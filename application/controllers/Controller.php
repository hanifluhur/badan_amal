<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{
		$this->load->view('home');
	}
	
	public function profil()
	{
		$this->load->view('profil');	
	}
	function pendidikan()
	{
		$this->load->view('pendidikan');
	}
	public function kesehatan()
	{
		$this->load->view('kesehatan');	
	}
	public function kemiskinan()
	{
		$this->load->view('kemiskinan');	
	}
	public function sejarah()
	{
		$this->load->view('sejarah');	
	}
	public function visimisi()
	{
		$this->load->view('visimisi');	
	}
	public function halaman_daftar(){
	//id otomatiss-----------------------------------------------------------
		$data['id_pendaftaran'] = $this->Model->kd_investor();
		$this->load->view('pendaftaran', $data);
	}


	//LOGIN========================================================================================================
	public function login(){
		if(isset($_POST['login'])){
			$user  = $this->input->post('user',true);
			$pass  = $this->input->post('pass',true);
			$cek   = $this->Model->login($user, $pass);
			$hasil = count($cek);
			if($hasil > 0)
			{
				$in   = $this->db->get_where('tb_pendaftaran', array('username'=>$user, 'password' => $pass))->row();
				$data = array('udhmasuk'       => true, 
							  'nama_investor'  => $in->nama_investor,
							  'kd_investor'    => $in->kd_investor);
				
				$this->session->set_userdata($data);
				if($in->level == 'admin')
				{
					redirect(base_url('Admin'));
				}
				else
				{
					redirect(base_url('User'));
				}
			}
			else
			{
				echo "<script>alert('Username dan password salah !')</script>";
				redirect('Controller');
			}
		}
	}

	//LOGOUT
	public function logout(){
		$this->session->sess_destroy();
		redirect('Controller');
	}


	//INSERT UPLOAD
	public function pendaftaran() {
		$data = array();
		$this->load->library("form_validation");

		$this->form_validation->set_rules('kd_investor','kode kode investor','trim|required');
		$this->form_validation->set_rules('nama_investor','nama investor','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('no_tlp','no telepon','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('level','level','required');
		if ($this->form_validation->run()==false) 
		{
			$this->load->view('pendaftaran');
		}else 
		{
			$upload = $this->Model->uploadPelanggan();
			if ($upload['result'] == "success") {
				$dataPelanggan = array(
					'kd_investor'	=>	$this->input->post('kd_investor'),
					'nama_investor'	=>	$this->input->post('nama_investor'),
					'alamat'		=>	$this->input->post('alamat'),
					'no_tlp'		=>	$this->input->post('no_tlp'),
					'username'		=>	$this->input->post('username'),
					'password'		=>	$this->input->post('password'),
					'level'			=>	$this->input->post('level'),
					'foto'			=>  $upload['file']['file_name']);

				$this->db->insert('tb_pendaftaran',$dataPelanggan);
				redirect('Controller/halaman_daftar');
			} else {
				echo "gagal bossssss !!!!";
			}
		}
	}

	//DATA CRUD INVESTOR================================================================================================================================

	public function get_update_investor($kd_investor){
		$where = array('kd_investor' => $kd_investor);
		$data ['query'] = $this->Model->get_update($where,'tb_pendaftaran')->result();

		$this->load->view('admin/edit_data_investor',$data);
	}

	public function update_investor(){
			$data = array(
				'nama_investor' => $this->input->post('nama_investor'),
				'alamat' 		=> $this->input->post('alamat'),
				'no_tlp' 		=> $this->input->post('no_tlp'),
				'foto' 			=> $this->input->post('foto')
			);
			$where = array(
				'kd_investor' => $this->input->post('kd_investor')
			);
			$this->Model->update($where,$data,'tb_pendaftaran');
			redirect('admin/datapendaftaran');

		}

	 
	public function hapus_investor($kd_investor){
		$where = array('kd_investor' => $kd_investor);
		$this->Model->hapus_investor($where,'tb_pendaftaran');
		redirect('admin/datapendaftaran');
	}

	//DATA CRUD TEMPAT================================================================================================================================

	public function get_update_tempat($kd_tempat){
		$where = array('kd_tempat' => $kd_tempat);
		$data ['query'] = $this->Model->get_update($where,'tb_tempat')->result();

		$this->load->view('admin/edit_data_tempat',$data);
	}

	public function update_tempat(){
			$data = array(
				'nama_tempat' 		=> $this->input->post('nama_tempat'),
				'alamat' 			=> $this->input->post('alamat'),
				'nama_pengurus' 	=> $this->input->post('nama_pengurus'),
				'contact' 			=> $this->input->post('contact_p'),
				'gambar' 				=> $this->input->post('gambar')
			);
			$where = array(
				'kd_tempat' => $this->input->post('kd_tempat')
			);
			$this->Model->update($where,$data,'tb_tempat');
			redirect('admin/datalembaga');

		}




	public function hapus_tempat($kd_tempat){
		$where = array('kd_tempat' => $kd_tempat);
		$this->Model->hapus_tempat($where,'tb_tempat');
		redirect('admin/datalembaga');
	}




	

	function search_bio(){
		$search = ($this->input->post("nama_jurusan"))? $this->input->post("nama_jurusan") : "";
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;
		// pagination settings
		$config = array();
		$config['base_url'] = site_url("Controller/search_bio/$search");
		$config['total_rows'] = $this->Model->get_bio_count($search);
		$config['per_page'] = "5";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['query'] = $this->Model->get_bio($config['per_page'], $data['page'], $search);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('pagination_search',$data);
	}


}

/* End of file Controller.php */
/* Location: ./application/controllers/Controller.php */