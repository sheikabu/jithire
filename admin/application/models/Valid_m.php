<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid_m extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login_user($email,$password){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $this->db->where('password',$password);

	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}
	
	public function  regis_insert($reg){ //comments
		
		$this->db->insert('jh_registration',$reg);
		return TRUE;
	}
	public function  company_registration_insert($company_details){ //comments
		
		$this->db->insert('jh_company_details',$company_details);
		return TRUE;
	}
	// user_table display in admin page
	public function getUserTables($userdata){

	  $this->db->select("first_name,last_name,email,role,status");
	  $this->db->from('jh_registration');
	  $this->db->where('role',$userdata);
	  if($query=$this->db->get())
	  {
	      return $query->result();
	     
	  }
	  else{
	    return false;
	  }
	 // return $query->result();
 	}
 	// company_table display in admin page
 	public function getCompanyDetails($userdata){
	  
	 
	  $this->db->select("first_name,last_name,email,role,status");
	  $this->db->from('jh_registration');
	  $this->db->where('role',$userdata);
	  if($query=$this->db->get())
	  {
	      return $query->result();
	     
	  }
	  else{
	    return false;
	  }
 	}

}

?>