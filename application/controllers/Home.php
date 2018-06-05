<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}

	public function program()
	{
		$this->load->view('Program');
	}
	public function about()
	{
		$this->load->view('About');
	}

}
