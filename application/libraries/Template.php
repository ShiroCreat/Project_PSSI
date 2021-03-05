<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
    class Template {
    		protected $_ci;

		// var $template_data = array();
		
		// function set($name, $value)
		// {
		// 	$this->template_data[$name] = $value;
		// }

		// function load($template = '', $view = '', $view_data = array(), $return = FALSE)
		// {
		// 	$this->CI =& get_instance();
		// 	$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
		// 	return $this->CI->load->view($template, $this->$template_data, $return);
		// }

	
    
    	function __construct(){
        	$this->_ci = &get_instance();
    	}
    
  		function load($content, $data = NULL){
    	
    	 
        	$data['contents'] = $this->_ci->load->view('dashboard_view', $data, TRUE);
        	
        
        	$this->_ci->load->view('template', $data);
		}

        function load_profile_club($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('user/profile_club_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_asking($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('user/asking_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_player($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('player_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_official($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('official_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_verify($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('verify_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_pendaftaran($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('pendaftaran_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }

        function load_pengesahan($content, $data = NULL){
        
         
            $data['contents'] = $this->_ci->load->view('pengesahan_view', $data, TRUE);
            
        
            $this->_ci->load->view('template', $data);
        }


		function load_user_data($content, $data = NULL){
    	
    	 
        	$data['contents'] = $this->_ci->load->view('user/user_data', $data, TRUE);
        	
        
        	$this->_ci->load->view('template', $data);
		}

		function load_user_form_add($content, $data = NULL){
    	
    	 
        	$data['contents'] = $this->_ci->load->view('user/profil_klub', $data, TRUE);
        	
        
        	$this->_ci->load->view('template', $data);
		}
}