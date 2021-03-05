<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asking extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->library('template');
    	$this->load->model('user_model');
    }
    	
	public function index()
	{
		check_not_login();

		$data['row'] = $this->user_model->get_asking(); 

		$this->template->load_asking('user/asking_view', $data);
		
	}


}
