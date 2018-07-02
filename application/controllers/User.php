<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

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
				$this->load->view('user/home');
			}
		}
		public function logout(){
			$this->session->session_destroy();
			redirect(base_url('Controller'));
		}

		public function investor(){
			$data["query"]=$this->Model->getInvestor();
			$this->load->view('user/investor',$data);
		}
		public function tempat(){
			$data["query"]=$this->Model->getTempat();
			$this->load->view('user/tempat',$data);
		}
	
}