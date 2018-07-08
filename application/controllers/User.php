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
			$data['query'] = $this->Model->get_update($kd,'tb_pendaftaran')->result();
			$this->load->view('user/profil',$data);
		}

		public function investor(){
			$data["query"]=$this->Model->getInvestor();
			$this->load->view('user/investor',$data);
		}
		public function donasi(){
			$data["query"]=$this->Model->getTempat();
			$this->load->view('user/donasi',$data);
		}
		public function donasi_user(){
			$where = array('kd_investor' => $this->session->userdata('nama_investor'));
			$data["query"]=$this->Model->get_update($where,'tb_transaksi')->result();
			$this->load->view('user/donasi-user',$data);
		}
		public function prin_user(){
			$where = array('kd_investor' => $this->session->userdata('nama_investor'));
			$data["query"]=$this->Model->get_update($where,'tb_transaksi')->result();
			$this->load->view('user/print',$data);
		}
		

		public function transaksi($kd_tempat){
		$where = array('kd_tempat' => $kd_tempat);
		$data['query'] = $this->Model->get_update($where,'tb_tempat')->result();
		$data['nama_user'] = $this->session->userdata('nama_investor');
		$data['kd_user'] = $this->session->userdata('kd_investor');
		$data['kd_transaksi'] = $this->Model->kd_transaksi();

		$this->load->view('user/transaksi',$data);
	}

		//DATA UPDATE INVESTOR================================================================================================================================

	public function get_update_investor($kd_investor){
		$where = array('kd_investor' => $kd_investor);
		$data ['query'] = $this->Model->get_update($where,'tb_pendaftaran')->result();

		$this->load->view('user/profil',$data);
	}

	public function update_investor(){
		$upload = $this->Model->uploadPelanggan();
			if ($upload['result'] == "success") {
				$data = array(
					'nama_investor' 		=> $this->input->post('nama_investor'),
					'alamat' 				=> $this->input->post('alamat'),
					'no_tlp' 				=> $this->input->post('no_tlp'),
					'username' 				=> $this->input->post('username'),
					'password' 				=> $this->input->post('password'),
					'level' 				=> $this->input->post('level'),
					'foto' 					=> $upload['file']['file_name']);
			} else {
				echo "gagal bossssss !!!!";
			}
			$where = array(
				'kd_investor' => $this->input->post('kd_investor')
			);
			$this->Model->update($where,$data,'tb_pendaftaran');
			redirect('user/profil');

		}
		//Transaksi
	public function simpan_transaksi() {
		
		$dataTransaksi = array(
			'kd_transaksi'		=>	$this->input->post('kd_transaksi'),
			'kd_investor'	=>	$this->input->post('kd_investor'),
			'kd_tempat'		=>	$this->input->post('kd_tempat'),
			'nominal'	=>	$this->input->post('nominal'),
			'tgl_transaksi'		=>	$this->input->post('tgl_transaksi')
		);

		$this->db->insert('tb_transaksi',$dataTransaksi);
		redirect('User/donasi_user');
		
	}
	
}