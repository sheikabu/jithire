<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class job_post extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function  get_user_profile_id($candidate_id){ //comments
		
	  $this->db->select('jh_registration.*,jh_user_profile.*');
	  $this->db->from('jh_registration');
	   $this->db->join('jh_user_profile', 'jh_registration.id = jh_user_profile.user_id');
	  $this->db->where('jh_registration.id',$candidate_id);

	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}

	public function  insert_job_posting($user_details){ //comments
		    $this->db->insert('jh_job_posting',$user_details);
			return TRUE;
	}

	public function posted_job_list($cid){ //comments
	
	  $this->db->select('*');
	  $this->db->from('jh_job_posting');
	  $this->db->where('company_id',$cid);
	  $query=$this->db->get();
	  $results = $query->result_array();
	  return $results;
	}

}
?>