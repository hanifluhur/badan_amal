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

		public function datapendaftaran(){
			$data["query"]=$this->Model->getPendaftaran();
			$this->load->view('admin/datapendaftaran',$data);
		}
		public function datalembaga(){
			$data["query"]=$this->Model->getLembaga();
			$this->load->view('admin/datalembaga',$data);
		}
		public function datadonasi(){
			$data["query"]=$this->Model->getInvestor();
			$this->load->view('admin/datadonasi',$data);
		}
	
		public function halaman_tambah(){
		//id otomatiss-----------------------------------------------------------
		$data['id_tempat'] = $this->Model->kd_tempat();
		$this->load->view('admin/tambah_data_tempat', $data);
		}

		public function tambah_data_tempat() {
		$data = array();
		$this->load->library("form_validation");

		$this->form_validation->set_rules('kd_tempat','kode kode tempat','trim|required');
		$this->form_validation->set_rules('nama_tempat','nama tempat','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('nama_pengurus','nama pengurus','required');
		$this->form_validation->set_rules('no_tlp','no telepon','required');
		if ($this->form_validation->run()==false) 
		{
			$data['id_tempat'] = $this->Model->kd_tempat();
		$this->load->view('admin/tambah_data_tempat', $data);
		}else 
		{
			$upload = $this->Model->uploadTempat();
			if ($upload['result'] == "success") {
				$dataTempat = array(
					'kd_tempat'		=>	$this->input->post('kd_tempat'),
					'nama_tempat'	=>	$this->input->post('nama_tempat'),
					'alamat'		=>	$this->input->post('alamat'),
					'nama_pengurus'	=>	$this->input->post('nama_pengurus'),
					'contact_p'		=>	$this->input->post('no_tlp'),
					'gambar'		=>  $upload['file']['file_name']);

				$this->db->insert('tb_tempat',$dataTempat);
				redirect('Admin/datalembaga');
			} else {
				echo "gagal bossssss !!!!";
			}
		}
	}

	//DATA CRUD TEMPAT================================================================================================================================

	public function get_update_tempat($kd_tempat){
		$where = array('kd_tempat' => $kd_tempat);
		$data ['query'] = $this->Model->get_update($where,'tb_tempat')->result();

		$this->load->view('admin/edit_data_tempat',$data);
	}

	public function update_tempat(){
		$upload = $this->Model->uploadTempat();
			if ($upload['result'] == "success") {
				$data = array(
					'nama_tempat' 			=> $this->input->post('nama_tempat'),
					'alamat' 				=> $this->input->post('alamat'),
					'nama_pengurus' 		=> $this->input->post('nama_pengurus'),
					'contact_p' 			=> $this->input->post('contact_p'),
					'gambar' 				=> $upload['file']['file_name']);
				
				$where = array(
					'kd_tempat' => $this->input->post('kd_tempat')
				);
				$this->Model->update($where,$data,'tb_tempat');
				redirect('admin/datalembaga');
				} else {
				echo "gagal bossssss !!!!";
			}

		}

	 
	public function hapus_tempat($kd_tempat){
		$where = array('kd_tempat' => $kd_tempat);
		$this->Model->hapus_tempat($where,'tb_tempat');
		redirect('admin/datalembaga');
	}

	//DATA CRUD TRANSAKSI================================================================================================================================

	public function get_update_transaksi($kd_transaksi){
		$where = array('kd_transaksi' => $kd_transaksi);
		$data ['query'] = $this->Model->get_update($where,'tb_transaksi')->result();

		$this->load->view('Admin/edit_data_transaksi',$data);
	}

	public function update_transaksi(){
			$data = array(
				'kd_tempat' 			=> $this->input->post('nama_tempat'),
				'nominal' 				=> $this->input->post('nominal'),
				'tgl_transaksi' 		=> $this->input->post('tgl_transaksi')
			);
			$where = array(
				'kd_transaksi' => $this->input->post('kd_transaksi')
			);
			$this->Model->update($where,$data,'tb_transaksi');
			redirect('admin/datadonasi');

		}

	 
	public function hapus_transaksi($kd_transaksi){
		$where = array('kd_transaksi' => $kd_transaksi);
		$this->Model->hapus_transaksi($where,'tb_transaksi');
		redirect('admin/datadonasi');
	}

	public function hapus_investor($kd_investor){
		$where = array('kd_investor' => $kd_investor);
		$this->Model->hapus_investor($where,'tb_pendaftaran');
		redirect('admin/datapendaftaran');
	}

}