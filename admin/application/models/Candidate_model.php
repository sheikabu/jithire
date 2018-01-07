<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_model extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

 	// company_table display in admin page
 	public function getCandidateDetails($userdata){	
	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('role','candidate');
	  $query=$this->db->get();
	  //echo $this->db->last_query(); exit;
	  $results = $query->result();
	  return $results;
	}

	public function blockCandidate($cid,$block){	
	  	$data=array('status'=>$block);
		$this->db->where('id',$cid);
		if($this->db->update('jh_registration',$data))		
			{
			  if($block=='blocked') {	
			  echo '<div  class="alert alert-block alert-success">Blocked</div>';
			   } else {
			   	echo '<div  class="alert alert-block alert-success">Activated</div>';
			   }
			}
	}
}

?>