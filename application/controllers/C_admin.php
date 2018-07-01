<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class C_admin extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Model');
			$this->load->library('pdf');
		}
	 
		public function index(){
			if (!$this->session->userdata('nama')) 
			{
	    	  redirect(base_url('Controller'));
	    	}
	    	else
	    	{
	    		$data["query"]=$this->Model->getBiodata();
				$this->load->view('admin/home',$data);
	    	}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('Controller'));
		}

		function generate_to_pdf(){
			$data["query"]=$this->Model->getBiodata();
			$this->pdf->load_view('admin/pdf',$data);
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");
		}

	
	}
	
	/* End of file C_admin.php */
	/* Location: ./application/controllers/C_admin.php */