<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->library('template');
    }
    	
	public function index()
	{
		check_not_login();
		//$this->template->load('dashboard_view');
		
	}


}
