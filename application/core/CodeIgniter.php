<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeIgniter extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('valid_m');
	}

	public function index()
	{
		
		$data['title']='crud';
		$this->load->js('bootsstrap.min.js');
		$this->load->js('dataTables.bootsstrap.min.js');
		$this->load->js('jquery-2.2.3.min.js');
		$this->load->js('jquery.dataTables.min.js');

		$this->load->css('bootsstrap.min.css');
		$this->load->css('dataTables.bootsstrap.min.css');
		
	}

}