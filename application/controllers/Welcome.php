<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
	
	public function index()
	{
		
		// $data =  $this->M_data;
		$data = "test";

		$this->load->view('DataMahasiswa.php',$data);
	}

	public function admin(){
		echo "coba";
	}
}