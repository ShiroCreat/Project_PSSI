<?php 
 
	public class Redatabase extends CI_Model
	{
		
		function getdata()
		{
			return $this->db->get('profile');
		}
	}
?>