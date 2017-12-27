<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_job extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role')!='company'){
           redirect('user', 'refresh');
           }
		$this->load->model('job_post');
	}

	public function index()
	{
		
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}
	
	
	public function job_posting_page() // add user full details
	{
		$candidate_id = $this->session->userdata("id");
		$this->load->view('common/header');
		//$data['get_candidate_info'] = $this->user_profile->get_user_profile_id($candidate_id);
		$this->load->view('post_job');
		$this->load->view('common/footer');
		
	}
	public function insert_job_post() //login_check
	{

    			$skill=json_encode($this->input->post('skill'));
    			$proficiency=json_encode($this->input->post('proficiency'));
    			
				
				$skills = json_encode(array_merge(json_decode($skill, true),json_decode($proficiency, true)));
				
				print_r($skills)l exit;
                    $user_details=array(
		 			
		 			'role' => $this->input->post('role'), 			
		 			'min_exp' => $this->input->post('min_exp'), 
		 			'skills' => $skills, 
		 			'job_description' => $this->input->post('job_description'),
					'preferred_location' => json_encode($this->input->post('preferred_location')),
					'no_positions' => $this->input->post('no_positions'),
					'duration' => $this->input->post('duration'), 
					'salary_lakhs' => $this->input->post('lakhs'),
					'salary_thousands' => $this->input->post('thousands'),

							
					//'company' => $this->input->post($company),
					//'previous_experience' => $this->input->post('previous_experience'),
					'company_id' => $this->input->post('company_id')

		 			);
					//print_r ($user_details['employer_name']); exit;
				    $this->job_post->insert_job_posting($user_details);
		 			
		 	    $msg = 'Success';
		 		redirect('post_job/job_posting_page/'.$msg);
                
	}


}
   