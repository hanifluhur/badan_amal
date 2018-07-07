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
		public function profil(){
			$kd = array('kd_investor' => $this->session->userdata('kd_investor'));
			$data['query'] = $this->Model->getPendaftaran($kd,'tb_pendaftaran')->result();
			$this->load->view('user/profil',$data);
		}

		public function investor(){
			$data["query"]=$this->Model->getInvestor();
			$this->load->view('user/investor',$data);
		}
		public function tempat(){
			$data["query"]=$this->Model->getTempat();
			$this->load->view('user/tempat',$data);
		}

		//DATA UPDATE INVESTOR================================================================================================================================

	public function get_update_investor($kd_investor){
		$where = array('kd_investor' => $kd_investor);
		$data ['query'] = $this->Model->get_update($where,'tb_pendaftaran')->result();

		$this->load->view('user/profil',$data);
	}

	public function update_investor(){
			$data = array(
				'nama_investor' 		=> $this->input->post('nama_investor'),
				'alamat' 				=> $this->input->post('alamat'),
				'no_tlp' 				=> $this->input->post('no_tlp'),
				'username' 				=> $this->input->post('username'),
				'password' 				=> $this->input->post('password'),
				'level' 				=> $this->input->post('level'),
				'level' 				=> $this->input->post('foto')
			);
			$where = array(
				'kd_investor' => $this->input->post('kd_investor')
			);
			$this->Model->update($where,$data,'tb_pendaftaran');
			redirect('user/profil');

		}
	
}