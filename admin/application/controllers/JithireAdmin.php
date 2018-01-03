<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JithireAdmin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');		
		$this->load->model('valid_m');
		$this->load->model('company_model');
	}

	public function load_view($view, $vars = array()) {
	    $this->load->view('common/header_inner', $vars);
	    $this->load->view('common/leftmenu');
	    $this->load->view($view, $vars);
	    $this->load->view('common/footer_inner');
	  }
	 public function load_login_view($view, $vars = array()) {
	    $this->load->view('common/header', $vars);	    
	    $this->load->view($view, $vars);
	    $this->load->view('common/footer');
	  }

	public function index()
	{		
		$this->load_login_view('login');
	}

	public function dashboard() //login_check
	{
		if(!empty($this->input->post('email'))) {
		$user_login=array(
			'email' => $this->input->post('email'), 
		'password' => md5($this->input->post('password')), 
		);
		$data=$this->valid_m->login_user($user_login['email'],$user_login['password']);
 	if($data)
      {
      	$user_data=array(
      		'email'=>$data,
      		'logged_in'=>true
      		);	
      	$this->session->set_userdata($user_data);
        $this->load_view('dashboard');
      }
      else{			       
      	$this->session->set_flashdata('loginfailed','Please try again!');
      	redirect(base_url().'JithireAdmin');      	
      }
		$info['message']="valid success";
	 }
	 else {
	 	 $this->load_view('dashboard');
	 }
	}

	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('JithireAdmin');
			
	}

	public function candidate_details() 
	{
		$userdata='candidate';
		$query = $this->valid_m->getUserTables($userdata);
		$data['User_tables'] =  $query;
		$this->load_view('candidate_details');
	} 

	// admin company details display
	public function company_details()
	{
		$userdata='company';
		$data['company_details'] = $this->company_model->getCompanyDetails($userdata);		
		$this->load_view('company_details',$data);
	  }

   // admin company details display
	public function company_block()
	{
		$userdata='company';
		$data['company_details'] = $this->company_model->getCompanyDetails($userdata);		
		$this->load_view('company_details',$data);
	  }

    // Locations:- Admin add/edit locations. Added Locations will display to users.
	public function locations()
	{
		$userdata='company';
		$data['company_details'] = $this->company_model->getCompanyDetails($userdata);		
		$this->load_view('locations');
	  }

	} 
   