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
	public function email_check($email){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
	    return false;
	  }else{
	    return true;
	  }

	}

	public function forgot_email_check($email){

	  $this->db->select('*');
	  $this->db->from('jh_registration');
	  $this->db->where('email',$email);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
	    return true;
	  }else{
	    return false;
	  }

	}
	public function forgot_password_check($password,$email_det){
		$field = array(
		'password'=>$this->input->post('$password'));
		$this->db->where('email', $email_det);
		$this->db->update('jh_registration', $field);
		//echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	public function  register_insert($register_details){ //comments
		
		$this->db->insert('jh_registration',$register_details);
		return TRUE;
	}
	
	public function  company_registration_insert($company_details){ //comments
		
		$this->db->insert('jh_company_details',$company_details);
		return TRUE;
	}
	
}
?>