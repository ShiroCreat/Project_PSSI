<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	
	 public function login($table, $where)
	 {
	// 	// $this->db->select('*');
	// 	// $this->db->from('profile');
	// 	// $this->db->where('email', $post['email']);
	// 	// $this->db->where('password', sha1($post['password']);
	// 	// $query = $this->db->get();
	// 	// return $query;
	 	return $this->db->get_where($table,$where);
	 }

	

	public function get($id = null)
	{
		$this->db->from('profile');
		if ($id != null) {
			$this->db->where('id_profile', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_asking($id = null)
	{
		$this->db->from('status');
		if ($id != null) {
			$this->db->where('id_status', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	function tampil_data(){
		return $this->db->get('profile');
	}
}