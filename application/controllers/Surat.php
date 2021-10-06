<?php

class Surat extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_surat');
    }

    public function index()
    {
        $data['title'] = 'Surat';
        $data['surat'] = $this->Model_surat->getallsurat();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('surat/surat', $data);
        $this->load->view('templates/footer'); 
    }

     public function lihat($id)
    {
        $data['title'] = 'Surat';
        $data['surat'] = $this->Model_surat->getsuratbyid($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('surat/lihatsurat', $data);
        $this->load->view('templates/footer'); 
    }

     public function buatsurat()
    {
        $id_user = $this->input->post('id_user');
        $id_mohon = $this->input->post('id_mohon');
 
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/img/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$id_mohon.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $id_mohon; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        $this->Model_surat->simpansurat($id_mohon,$id_user,$image_name); //simpan ke database

        $data = array(
                'status' => "surat terbit"
        );

        $this->db->where('id_mohon', $id_mohon);
        $this->db->update('tb_permohonan', $data);

        redirect('Surat'); //redirect ke mahasiswa usai simpan data
    }

    public function suratterbit()
    {
        $data['title'] = 'Surat terbit';
        $data['suratterbit'] = $this->Model_surat->getsuratterbit();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('surat/suratterbit', $data);
        $this->load->view('templates/footer'); 
    }

    public function cetak($id)
    {
        $data['pdf'] = $this->Model_surat->getpdfById($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "surat.pdf";
        $this->pdf->load_view('surat/pdfsurat', $data);
    }

}

?>