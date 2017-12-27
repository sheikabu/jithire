<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('valid_m');
		$this->load->library('session');
	}

	public function index()
	{
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}

	public function dashboard()
	{
		
		$this->load->view('common/header_inner');
		$this->load->view('common/leftmenu');
		$this->load->view('dashboard');
		$this->load->view('common/footer_inner');
	}

	public function check() //login_check
	{		

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
			        $this->dashboard();
			      }
			      else{			       
			      	$this->session->set_flashdata('loginfailed','Please try again!');
			      	redirect(base_url().'user');
			      	//redirect(base_url()."user".$info);
			      }
		 		$info['message']="valid success";
		
	}
	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('user');
			
	}

	// admin user details display --> model->valid_m->39lines
	public function user_dashboard($data)
	{
		
		$this->load->view('common/header_inner');
		$this->load->view('common/leftmenu');
		$this->load->view('user_tables.php', $data);
		$this->load->view('common/footer_inner');
	}
	public function company_dashboard($data)
	{
		
		$this->load->view('common/header_inner');
		$this->load->view('common/leftmenu');
		$this->load->view('company_tables.php', $data);
		$this->load->view('common/footer_inner');
	}
	public function user_tables() 
	{
		$userdata='candidate';
		$query = $this->valid_m->getUserTables($userdata);
		$data['User_tables'] = null;
		if($query){
		   $data['User_tables'] =  $query;
		  $this->user_dashboard($data);
		  }
	} 

	// admin company details display
	public function company_details() 
	{
		
		$userdata='company';
		$data['company_details'] = $this->valid_m->getCompanyDetails($userdata);
		//$this->company_dashboard($data);
		$this->load->view('company_details');
	  }

	} 
   