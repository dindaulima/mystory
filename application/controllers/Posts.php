<?php
class Posts extends CI_Controller{
	public function index(){
		$data['title'] = 'Latest Posts';

		$user = $this->session->user;
		$posts = $this->post_model->get_posts();
		$msg = null;
		
		if(empty($posts)) 
			$msg = "Belum ada postingan";
		$data['posts'] = $posts;
		$data['msg'] = $msg;

		if(empty($user)){
			$this ->load ->view('templates/headerout');
			$this ->load ->view('pages/login', $data);
			$this ->load ->view('templates/footer');
		} else {
			$this ->load ->view('templates/headerin');
			$this ->load ->view('posts/index', $data);
			$this ->load ->view('templates/footer');
		}
	}	

	public function view($slug=NULL){

		$data['post'] = $this->post_model->get_posts($slug);
		if(empty($data['post'])){
			show_404();
		}
		$data['title'] = $data['post']['title'];

		$this ->load ->view('templates/headerin');
		$this ->load ->view('posts/view', $data);
		$this ->load ->view('templates/footer');
	}

	public function register(){
		$data['title'] = 'Register';

		$err = false;
		$pass = $this->input->post('password');
		$repass = $this->input->post('repassword');
		if($pass != $repass){
			$err = true;
		} 

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('email','Email','valid_email');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE || $err){
			$this ->load ->view('templates/headerout');
			$this ->load ->view('pages/register', $data);
			$this ->load ->view('templates/footer');
		} else{
			$this->post_model->registering(); 
			// $this->post_model->inputlogin(); 
			redirect('posts'); 
		}	
	}

	public function login(){
		$data['title'] = 'Login';

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE){
			$this ->load ->view('templates/headerout');
			$this ->load ->view('pages/login', $data);
			$this ->load ->view('templates/footer');
		} else{
			$datauser = $this->post_model->ceklogin();
			$data['user'] = $datauser['iduser'];
			$this ->load ->view('pages/loginsinggah', $data);
			redirect('posts'); 
		}	
	}
	public function create(){
		$data['title'] = 'Create Post';

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if($this->form_validation->run() === FALSE){
			$this ->load ->view('templates/headerin');
			$this ->load ->view('posts/create', $data);
			$this ->load ->view('templates/footer');
		} else{
			$this->post_model->create_post(); 
			redirect('posts'); 
		}	
	}

	public function delete($id){
			$this->post_model->delete_post($id);
			redirect('posts'); 
	}

	public function edit($slug){
		$data['post'] = $this->post_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
		}

		$data['title'] = 'Edit Post';

		$this ->load ->view('templates/headerin');
		$this ->load ->view('posts/edit', $data);
		$this ->load ->view('templates/footer');
	}

	public function update(){
		$this->post_model->update_post();
		redirect('posts'); 
	}

}  