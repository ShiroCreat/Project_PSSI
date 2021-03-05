<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
		
	}
	
	public function index()
	{
		check_already_login();
		$this->load->view('login');
		
	}

	public function checklogin()
	{
		

		// $post = $this->input->post(null, TRUE);
		// if (isset($post['login'])){
		// 	$this->load->model('user_model');
		// 	$query = $this->user_model->login($post);

		// 	if ($query->num_rows() > 0) {
		// 		$row = $query->row();
		// 		// echo $row->email;
		// 		$params = array(
		// 			'userid'     => $row->id_profile,
		// 			'level'      => $row->level
		// 		);
		// 		$this->session->set_userdata($params);
		// 		// redirect('dashboard');
		// 		// echo "<script> alert('Welcome'); window.location='".base_url('dashboard')."';</script>";
		// 		echo "work";
		// 	}
		// 	else {
		// 		// echo "<script> alert('Fail'); window.location='".base_url('auth/login')."';</script>";
		// 		echo "fail";
		// 	}
		// }	
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => sha1($password)
			);
		$cek = $this->user_model->login("profile",$where)->num_rows();
		if($cek > 0){
 		
			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			// redirect(base_url('dashboard'));
 			echo "<script> alert('Selamat Datang di Situs Pendaftaran PSSI'); window.location='".base_url('dashboard')."';</script>";
		}else{
			// echo "Username dan password salah !";
			echo "<script> alert('Fail'); window.location='".base_url('auth')."';</script>";
		}
		

	 }

	 public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
		

}
