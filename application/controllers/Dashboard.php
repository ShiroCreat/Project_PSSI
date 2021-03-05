<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->library('template');
    }
    	
	public function index()
	{
		check_not_login();
		//check_admin();
		// $this->template->load('template','dashboard_view');
		
		$this->template->load('dashboard_view');
		
	}


}
