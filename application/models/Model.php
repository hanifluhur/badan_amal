<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	//LOGIN=======================================================
	public function login($user, $pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_pendaftaran')->row();
	}
 
	//SELECT=======================================================
	public function getInvestor(){
		$this->db->select('tb_transaksi.*, tb_pendaftaran.*, tb_tempat.*');
		$this->db->from('tb_transaksi');
		$this->db->join('tb_pendaftaran','tb_pendaftaran.kd_investor = tb_transaksi.kd_investor');
		$this->db->join('tb_tempat','tb_tempat.kd_tempat = tb_transaksi.kd_tempat');
		$query = $this->db->get();
		return $query->result();	
	}

	public function getTempat(){
		$query = $this->db->get('tb_tempat');
		return $query->result();
	}

	//UPLOAD======================================================
	function uploadPelanggan() {
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '204800';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//INSERT======================================================
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	public function profil($kd){
		$sql = "SELECT*FROM tb_pendaftaran WHERE kd_investor='$kd' ";
		$query = $this->db->query($sql);
		return $query->num_rows();  
	}
















	//SELECT=======================================================
	public function getProduk(){
		$query = $this->db->get('produk');
		return $query->result();
	}

	//SELECT JOIN==================================================
	public function getBiodata()
	{
		$this->db->select('biodata.*, jurusan.*'); 
    	$this->db->from('biodata'); 
    	$this->db->join('jurusan', 'biodata.id_jurusan = jurusan.id_jurusan', 'inner');
		$query = $this->db->get();
		return $query->result();
	}	

	//INSERT======================================================
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	//GET UPDATE==================================================
	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	//UPDATE======================================================
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	//DELETE======================================================
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//UPLOAD======================================================
	function upload() {
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//COMBO BOX===================================================
	public function view(){
		return $this->db->get('jurusan')->result();
	}


	//PAGINATION===================================================
	function jumlah_data(){
		return $this->db->get('biodata')->num_rows();
 	}
	 function data($number,$offset){
		$this->db->select('biodata.*, jurusan.*');
		$this->db->join('jurusan','jurusan.id_jurusan = biodata.id_jurusan');
		$this->db->order_by("biodata.id", "asc");
		return $query = $this->db->get('biodata',$number,$offset)->result();
	}

	//SEARCH
	public function get_bio_count($st = NULL){
		if ($st == "") $st = "";
		$sql = "SELECT a.*, b.* FROM biodata a JOIN jurusan b ON a.id_jurusan = b.id_jurusan 
				WHERE b.nama_jurusan like '%$st%' ";
		$query = $this->db->query($sql);
		return $query->num_rows();  
	}

	public function get_bio($limit, $start, $st = NULL){
		if ($st == "") $st = "";
		$sql = "SELECT a.*, b.* FROM biodata a JOIN jurusan b ON a.id_jurusan = b.id_jurusan 
				WHERE b.nama_jurusan like '%$st%' limit ".$start.", ".$limit;
		$query = $this->db->query($sql);
		return $query->num_rows();  
	}

	function getBiodataBuilderObject($value=''){
		$this->db->select('biodata.*,jurusan.nama_jurusan');
		$this->db->from('biodata biodata');
		$this->db->join('jurusan', 'jurusan.id_jurusan = biodata.jurusan');
		
		$query = $this->db->get();
		return $query->result();
	}

	function getPDF($value=''){
		$query = $this->db->get('biodata');
		return $query->result();
	}


}

/* End of file Model.php */
/* Location: ./application/models/Model.php */