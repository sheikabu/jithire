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
			        $this->load->view('dashboard.php');
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


}
   