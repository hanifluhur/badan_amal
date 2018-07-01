<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Model');
		} 

		public function index()
		{
			if (!$this->session->userdata('nama_investor'))
			{
				redirect(base_url('Controller'));
			}
			else
			{
				$this->load->view('admin/home');
			}
		}
		public function logout(){
			$this->session->session_destroy();
			redirect(base_url('Controller'));
		}
	
}