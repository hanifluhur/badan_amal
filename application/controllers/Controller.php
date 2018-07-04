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
		$this->load->view('pendaftaran');
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

	public function logout(){
		$this->session->sess_destroy();
		redirect('Controller');
	}


	//insert upload
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
				redirect('Controller');
			} else {
				echo "gagal bossssss !!!!";
			}
		}
	}

	//BIODATA CRUD================================================================================================================================

	public function edit($id){
		$where = array('id' => $id);
		$data['biodata'] = $this->Model->edit_data($where,'biodata')->result();
		//dropdown
		$data['jurusan'] = $this->Model->view();

		$this->load->view('edit',$data);

	}

	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$nim = $this->input->post('nim');
		$alamat = $this->input->post('alamat');
		$foto = $this->input->post('foto');
		$tempat = $this->input->post('tempat');
		$tgl_lahir = $this->input->post('tgl_lahir');
	 
		$data = array(
			'nama' => $nama,
			'id_jurusan' => $jurusan,
			'nim' => $nim,
			'alamat' => $alamat,
			'foto' => $foto,
			'tempat' => $tempat,
			'tgl_lahir' => $tgl_lahir
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Model->update_data($where,$data,'biodata');
		redirect('Controller/biodata_javascript');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->Model->hapus_data($where,'biodata');
		redirect('Controller/biodata_javascript');
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