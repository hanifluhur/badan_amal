<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class C_mahasiswa extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Model');
		}
	
		public function index(){
			if (!$this->session->userdata('nama')) 
			{
	    	  redirect(base_url('Controller'));
	    	}
	    	else
	    	{
	    		$data["query"]=$this->Model->getProduk();
				$this->load->view('mahasiswa/home',$data);
	    	}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('Controller'));
		}
		
	}
	
	/* End of file C_mahasiswa.php */
	/* Location: ./application/controllers/C_pelanggan.php */