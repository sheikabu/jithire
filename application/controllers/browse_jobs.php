<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_jobs extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role')!='candidate'){
           redirect('user', 'refresh');
           }
		$this->load->model('jobs_browse');
	}

	public function index()
	{
		//$candidate_id = $this->session->userdata("id");
		$data['job_list'] = $this->jobs_browse->job_list();
		$this->load->view('common/header');
		$this->load->view('browse_jobs',$data);
		$this->load->view('common/footer');
	}

}
 ?>