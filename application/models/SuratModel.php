<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SuratModel extends CI_Model {
	
	public function view(){
		return $this->db->get('surat')->result();
	}

	public function viewSurat($id){
		$this->db->from('surat');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();
	}

	public function editData($id){
		$this->db->from('surat');
		$this->db->where('id',$id);
		return $this->db->get()->row_array();
	}

    public function tambah_data($data){
		$this->db->insert('surat',$data);
	}

	public function ubahData($data,$id){
		$this->db->where('id',$id);
		$this->db->update('surat',$data);
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('surat');	
	}

	
}
