<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class jobs_browse extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function job_list(){ //comments
	
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}


}
?>