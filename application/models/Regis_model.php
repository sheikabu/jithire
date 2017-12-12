<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function  check_data($data){ //comments
		print_r($data);
		$this->db->insert('registration',$data);
		return TRUE;
	}
}
?>