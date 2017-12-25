<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user_profile extends CI_Model{
	
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

	public function  insert_user_profile($user_details){ //comments
		$user_id = $user_details['user_id'];
		 $this->db->select('*');
	  	  $this->db->from('jh_user_profile');
		  $this->db->where('user_id',$user_id);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
			$this->db->where('user_id', $user_id);
			$this->db->update('jh_user_profile', $user_details);
		    return true;
		  }else{
		    $this->db->insert('jh_user_profile',$user_details);
			return TRUE;
		  }

		
	}

}
?>