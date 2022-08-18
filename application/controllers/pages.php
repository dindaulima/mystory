<?php
class Pages extends CI_Controller{
	public function view($page = 'login'){

		if($page=='logout'){
			$this->session->sess_destroy();
			$page = 'login';
		} else if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this ->load ->view('templates/headerout');
		$this ->load ->view('pages/'.$page, $data);
		$this ->load ->view('templates/footer');
	}
	
}  