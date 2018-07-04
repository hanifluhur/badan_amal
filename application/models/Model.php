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

	public function getPendaftaran(){
		return $this->db->get('tb_pendaftaran')->result();
	}
	public function getLembaga(){
		return $this->db->get('tb_tempat')->result();
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


}
/* End of file Model.php */
/* Location: ./application/models/Model.php */