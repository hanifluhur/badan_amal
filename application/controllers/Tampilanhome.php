<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilanhome extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}

}
