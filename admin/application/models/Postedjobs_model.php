<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Postedjobs_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

 	// company_table display in admin page
 	public function getPostedjobs(){		  
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');	  
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

}

?>