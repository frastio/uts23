<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
    public function getData()
	{
		return $this->db->get_where('mahasiswa_baru')->row();
	}

	public function tambah($data){
$this->db->insert('mahasiswa_baru',$data);
return true;
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
