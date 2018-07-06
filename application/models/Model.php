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
	public function getDonasi(){
		return $this->db->get('tb_transaksi')->result();
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

	//Databases=============================================
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	public function profil($kd){
		$sql = "SELECT*FROM tb_pendaftaran WHERE kd_investor='$kd' ";
		$query = $this->db->query($sql);
		return $query->num_rows();  
	}

	public function kd_investor(){
		$this->db->select('Right(kd_investor,3) as kode',false);
		$this->db->order_by('kd_investor', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('tb_pendaftaran');

		if($query->num_rows()<>0)
		{
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}
		else
		{
		 	$kode = 1;
		}
		$kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
		$kodejadi = "AB".$kodemax;
		return $kodejadi;
	}

	//DATA CRUD INVESTOR================================================================================================================================

	public function hapus_investor($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_update($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

	//DATA CRUD TEMPAT================================================================================================================================

	public function hapus_tempat($where,$table){
		$this->db->where($where);
		$this->db->delete($table);


	}
}
/* End of file Model.php */
/* Location: ./application/models/Model.php */