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
							  'nama_investor'  => $in->nama_investor);
				
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



















	//LOAD====================================================================================================================

	public function admin()
	{
		$data["query"]=$this->Model->getBiodata();
		$this->load->view('admin',$data);	
	}

	public function biodata_donatur()
	{
		$data["query"]=$this->Model->getBiodata();
		$this->load->view('biodata-donatur',$data);	
	}

	public function biodata_donasi()
	{
		$data["query"]=$this->Model->getBiodata();
		$this->load->view('biodata-donasi',$data);	
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
	
	
	



	//BIODATA CRUD================================================================================================================================

	public function tambah_bio()
	{
		$data['jurusan'] = $this->Model->view();
		$this->load->view('tambah', $data);
	}


	//insert no upload
	public function tambah_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$nim = $this->input->post('nim');
		$alamat = $this->input->post('alamat');
		$foto = $this->input->post('foto');
		$tempat = $this->input->post('tempat');
		$tgl_lahir = $this->input->post('tgl_lahir');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'id_jurusan' => $jurusan,
			'nim' => $nim,
			'alamat' => $alamat,
			'foto' => $foto,
			'tempat' => $tempat,
			'tgl_lahir' => $tgl_lahir
			);

		$this->Model->input_data($data,'biodata');
		redirect('Controller/biodata_javascript');
	}

	//insert upload
	public function input() {
		$data = array();
		$this->load->library("form_validation");
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('nim','nim','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('tambah');
		} else {
			$this->load->model('Model');
			$upload = $this->Model->upload();
			if ($upload['result'] == "success") {
				$dataMhs = array(
					'id'	=>	$this->input->post('id'),
					'nama'	=>	$this->input->post('nama'),
					'id_jurusan'	=>	$this->input->post('jurusan'),
					'nim'	=>	$this->input->post('nim'),
					'alamat'	=>	$this->input->post('alamat'),
					'tempat'	=>	$this->input->post('tempat'),
					'tgl_lahir'	=>	$this->input->post('tgl_lahir'),
					'foto'	=> $upload['file']['file_name']);

				$this->db->insert('biodata',$dataMhs);
				redirect('Controller/biodata_javascript');
			} else {
				$data['message'] = $upload['error'];
			}
		}
	}

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