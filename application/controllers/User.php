<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->library('template');
    	$this->load->model('user_model');
    }
    	
	public function index()
	{
		check_not_login();

		$data['row'] = $this->user_model->get(); 
		$data_table['profile'] = $this->user_model->tampil_data()->result();
		
		$this->template->load_user_data('user/user_data', $data, $data_table);
		

	}

	public function add()
	{
		$this->template->load_user_form_add('user/profil_klub');
	}


}
