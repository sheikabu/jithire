<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('valid_m');
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
			      	//$this->session->set_userdata($user_data);
			      	//$this->session->set_flashdata('user_loggedin','you are now loggedin');
			        $this->load->view('user_profile.php');
			      }
			      else{
			      	$this->session->set_flashdata('login_failed','login is invalid');
			      	redirect('user');
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

	public function registration() //login_check
	{
		$data['registration_data']='registration';
		$login_data=$this->load->view('registration',$data);
		
	}

	public function regis() //login_check
	{
					$this->form_validation->set_rules('first_name','First_name','trim|required'); 
		 			$this->form_validation->set_rules('last_name','Last_name','trim|required');
		 			$this->form_validation->set_rules('email','Email','trim|required');
					$this->form_validation->set_rules('password','Password','trim|required');
					$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 

					 if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
                }
                else
                {
                       $reg=array(
		 			
		 			'first_name' => $this->input->post('first_name'), 
		 			'last_name' => $this->input->post('last_name'), 
		 			'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')), 
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status')

		 			);
		
		 		$this->valid_m->regis_insert($reg);
		 		$info['message']="valid success";
		 		redirect('user_profile');
                }
	}
	public function registration_company() //login_check
	{
		/*if(!$this->session->userdata('logged_in')){
			redirect('user');
		}*/
		$data['registration_company']='company_registration';
		$this->load->view('company_registration',$data);

	}
	public function company_details() //login_check
	{
		$company_details=array(
		 			'id' => $this->input->post('id'), 
		 			'company_name' => $this->input->post('company_name'),
		 			'address' => $this->input->post('address'), 
		 			'url' => $this->input->post('url'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'country' => $this->input->post('country'), 
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status')

		 			);
		 		//print_r($data); exit;
		 		$company_check=$this->valid_m->company_registration_insert($company_details);
		 		$info['message']="valid success";
		 		if($company_check)
			      {
			        $this->load->view('login.php');

			      }
				
	}
	public function about()
	{
		
		$this->load->view('about');
	}




}
   