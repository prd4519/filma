<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
		redirect(base_url("Auth"));
		}
	}

	public function index()	{
		//$this->load->view('welcome_message');
		$this->load->view('login');
	}
}
