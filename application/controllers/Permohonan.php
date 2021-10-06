<?php

class Permohonan extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_permohonan');
    }

    public function index()
    {

        $data['title'] = 'Data Permohonan';
        $data['mohon'] = $this->Model_permohonan->getallpermohonan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/permohonan', $data);
        $this->load->view('templates/footer'); 
    }

    public function formpermohonan()
   {
         $npwp = $this->input->post('npwp');
         $nama_pemilik = $this->input->post('nama_pemilik');
         $nama_perusahaan = $this->input->post('nama_perusahaan');
         $alamat_perusahaan = $this->input->post('alamat_perusahaan');
         $bidang_usaha = $this->input->post('bidang_usaha');

         $id_user = $this->session->userdata('id_user');

         $bpjs = $_FILES['bpjs']['name'];
         $foto = $_FILES['foto']['name'];
         $skdtu = $_FILES['skdtu']['name'];
         $siuk = $_FILES['siuk']['name'];
        
         if ($bpjs) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('bpjs')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

           if ($foto) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('foto')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          if ($skdtu) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('skdtu')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          if ($siuk) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('siuk')) {
             } else {
                echo $this->upload->display_errors();
             }
          }

          $data = [
             'id_user' => $id_user,
             'npwp' => $npwp,
             'nama_pemilik' => $nama_pemilik,
             'nama_perusahaan' => $nama_perusahaan,
             'alamat_perusahaan' => $alamat_perusahaan,
             'bpjs_k' => $bpjs,
             'foto' => $foto,
             'skdtu' => $skdtu,
             'siuk' => $siuk,
             'status' => "proses verifikasi"
           ];
         
        $this->db->insert('tb_permohonan', $data);
        redirect('Permohonan');
   }

   public function lihat($id)
    {

        $data['title'] = 'Lihat Permohonan';
        $data['lihat'] = $this->Model_permohonan->lihatpermohonan($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/lihat', $data);
        $this->load->view('templates/footer'); 
    }

    public function tracking()
    {

        $data['title'] = 'Tracking Permohonan';
       
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/tracking', $data);
        $this->load->view('templates/footer'); 
    }

    public function prosestrack()
    {

        $npwp = $this->input->post('npwp');

        $x = $this->db->get_where('tb_permohonan', ['npwp' => $npwp])->row_array();

        if($x){

            $data['title'] = 'Proses Permohonan';
            $data['track'] = $this->Model_permohonan->prosestrack($npwp);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('permohonan/hasiltracking', $data);
            $this->load->view('templates/footer'); 
        }else{
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('permohonan/nonpwp');
            $this->load->view('templates/footer'); 
        }
       
        
    }

     public function tolak($id)
    {

        
        $data['title'] = 'Form tolak';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('permohonan/formtolak', $data);
        $this->load->view('templates/footer'); 
        
    }

    public function prosestolak()
    {
        
        $status = $this->input->post('ket');
        $id = $this->input->post('id_mohon');

        $data = array(
                'status' => $status
        );

        $this->db->where('id_mohon', $id);
        $this->db->update('tb_permohonan', $data);
        
         redirect('Permohonan');
    
    }

     public function terima($id)
    {

        $data = array(
                'status' => "diterima"
        );

        $this->db->where('id_mohon', $id);
        $this->db->update('tb_permohonan', $data);
        
         redirect('Permohonan');
    
    }

}

?>