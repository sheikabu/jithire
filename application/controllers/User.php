<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('form');
		$this->load->model('valid_m');
	}

	public function index()
	{
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}
	public function login_check() //login_check
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
			      	$this->session->set_userdata('id',$data['id']);
			        $this->session->set_userdata('email',$data['email']);
			        $this->session->set_userdata('first_name',$data['first_name']);
			        $this->session->set_userdata('last_name',$data['last_name']);
			        $this->session->set_userdata('role',$data['role']);
			      	$this->session->set_flashdata('user_loggedin','you are now loggedin');
			        $this->user_details();
			      }
			      else{
			      	$this->session->set_flashdata('log_msg','login is invalid,please try again');
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
		
		$this->load->view('common/header');
		$this->load->view('login/');
		$this->load->view('common/footer');
		
	}
	public function user_details() // add user full details
	{
		
		$this->load->view('common/header');
		$this->load->view('user_details');
		$this->load->view('common/footer');
		
	}
	public function forgot() 
	{
		
		$this->load->view('common/header');
		$this->load->view('forgot');
		$this->load->view('common/footer');
		
	}
	public function forgot_check() 
	{
		
		$forgot_details=array(
		 	'email' => $this->input->post('email'), 
						);

		 $email_forgot=$this->valid_m->forgot_email_check($forgot_details['email']);
		 $email_det=$this->session->set_userdata('email',$forgot_details['email']);
				if($email_forgot){
					
				    $this->load->view('common/header');
					$this->load->view('forgot_password');
					$this->load->view('common/footer');
				}
				else{

				  $this->session->set_flashdata('message', 'email not having please sign up');
				  redirect('user');


				}
		
	}
	public function forgot_update() 
	{
		
		$this->form_validation->set_rules('password','Password','trim|required|matches[password]'); 
		$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 

		if ($this->form_validation->run() == FALSE)
        {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! sorry mismatch password..Please try again.</div>');
        
        $this->load->view('common/header');
		$this->load->view('forgot_password');
		$this->load->view('common/footer');
	
        }
        else
        {

        	$password_details=array(
		 				 			
					'password' => md5($this->input->post('password')), 
					
		 			);
        	$forgot_password_model=$this->valid_m->forgot_password_check($password_details['password'],$email_det);
        	if($forgot_password_model){
					
				   
				  $this->session->set_flashdata('wel_message', 'pasword changed successfully');
				  redirect('user');
				}
				else{

				  $this->session->set_flashdata('message', 'email not having please sign up');
				  redirect('user');


				}
		}
		
	}

	public function about() 
	{
		
		$this->load->view('common/header');
		$this->load->view('about');
		$this->load->view('common/footer');
		
	}
	public function contact() 
	{
		
		$this->load->view('common/header');
		$this->load->view('contact');
		$this->load->view('common/footer');
		
	}

	public function valid()
	{
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}

	public function register_check() //login_check
	{

					$this->form_validation->set_rules('password','Password','trim|required|matches[password]'); 
					$this->form_validation->set_rules('confirm_password','Confirm_password','trim|required|matches[password]'); 

					 if ($this->form_validation->run() == FALSE)
                {
                	//$message = 'sorry mismatch password';
				//$this->session->set_flashdata('message', $message);
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! sorry mismatch password..Please try again.</div>');
                        //redirect('valid($message)');
                        $this->load->view('common/header');
						$this->load->view('login');
						$this->load->view('common/footer');
	
                }
                else
                {
                       $register_details=array(
		 			
		 			'first_name' => $this->input->post('first_name'), 
		 			'last_name' => $this->input->post('last_name'), 
		 			'email' => $this->input->post('email'), 
					'password' => md5($this->input->post('password')), 
					'role' => $this->input->post('role'),
					'status' => $this->input->post('status')

		 			);

				echo $email_check=$this->valid_m->email_check($register_details['email']);
				if($email_check){
				  $this->valid_m->register_insert($register_details);
		 			$link = anchor('user/index', 'login');

					$message = 'Thank You for registering with Jithire' .' '. $link .' '. 'please login your account!';
					$this->session->set_flashdata('wel_message', $message);
		 			//$this->load->user;
		 			$this->index();

				}
				else{

				  $this->session->set_flashdata('message', 'email already registered.please use forgot password');
				  redirect('user');


				}

		 		
		 		//$this->load->user;
		 		//$this->load->view('login.php',$info);
		 		//redirect('same_controller/index', 'refresh');
		 		//redirect('user_profile');
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
	/*public function about()
	{
		
		$this->load->view('about');
	}*/




}
   