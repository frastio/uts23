<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	
	public function tambah()
	{
	

		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'prodi' => $this->input->post('prodi'),
			'fakultas' => $this->input->post('fakultas'),
		);

		$this->M_data->tambah($data);
		
		redirect('welcome');
	}


	function hapus($id){

		$where = array('nim' => $id);
		$this->M_data->hapus_data($where,'mahasiswa_baru');
		redirect('welcome');
	}

}