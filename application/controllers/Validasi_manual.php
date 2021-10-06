<?php

class Validasi_manual extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Model_lbkb');
		// $this->load->library('excel');
    }

    public function index()
    {
        $data['judul'] = 'Validasi Manual';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('validasi/validasi_manual', $data);
        $this->load->view('templates/footer'); 
    }

	public function penggantian_meter()
    {
        $data['judul'] = 'Validasi Manual';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('validasi/penggantian_meter', $data);
        $this->load->view('templates/footer'); 
    }

}

?>