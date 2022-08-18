<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function registering(){

			$pass = $this->input->post('password');
			$hash = password_hash($pass, PASSWORD_DEFAULT);

			$data = array(
				'fullname' => $this->input->post('name'),
				'username'=> $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $hash,
			 	'hint' => $pass
			);

			return $this->db->insert('users',$data);
		}

		public function ceklogin(){
			$username = $this->input->post('username');
			$query = $this->db->get_where('users',array('username'=>$username));
			$datauser = $query->row_array();
			
			if(empty($datauser)) return null;

			$cek = password_verify($this->input->post('password'), $datauser['password']);

			if($cek) {
				return($datauser);
			}

			return null;
		}
		
		// public function inputlogin(){
		// 	$data = array(
		// 		'username'=> $this->input->post('username'),
		// 		'password' => $this->input->post('password'),
		// 	);

		// 	return $this->db->insert('login',$data);
		// }

		public function get_posts($slug= FALSE){
			$iduser = $this->session->user;
			if($iduser === FALSE){// === is equal
				$cond['1'] = '1';
			} else {
				$cond['iduser'] = $iduser;
			}

			if($slug === FALSE){// === is equal
				$this->db->order_by('idpost','DESC'); //tampilan dari yg terbaru
				$query = $this->db->get_where('posts',$cond);
				
				return $query->result_array();
			} 

			// print_r($cond);die();
			$cond['slug']= $slug;
			// print_r($cond);die();
			$query = $this->db->get_where('posts',$cond);
			// print($this->db->last_query());
			return $query->row_array();

		}



		public function create_post(){
			$slug = url_title($this->input->post('title')); //this is how we get the value (title)
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'iduser' => (int)$this->session->user
			);

			return $this->db->insert('posts',$data);
		}

		public function delete_post($id){
			$this->db->where('id',$id);
			$this->db->delete('posts');
			return true;
		}


		public function update_post(){
			$slug = url_title($this->input->post('title')); 

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body'=> $this->input->post('body'),
				'updated_at' => date("Y-m-d H:m:s")
			);
			$this->db->where('idpost', $this->input->post('idpost'));
			return $this->db->update('posts',$data);
		}
	} 

