<?php

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }
    
   public function index()
   {
       if (!$this->session->userdata('email')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/login');
         $this->load->view('login_template/footer');
      }else{
         redirect('dashboard');
      }
   }

   public function login()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'id_user' => $user['id_user'],
               'email' => $user['email'],
               'nama_lengkap' => $user['nama_lengkap'],
               'password' => $user['password'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
            redirect('Home');
         } else {
            redirect('auth');
         }
      } else {
         redirect('auth');
      }      
   }

   public function register()
   {
         
         $data = [
            'title' => 'register'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/register');
         $this->load->view('login_template/footer');
      
   }

    public function proses_registrasi()
   {
         
       $nama_lengkap = $this->input->post('nama_lengkap');
       $password = $this->input->post('password');
       $email = $this->input->post('email');
       $data = [
             'nama_lengkap' => $nama_lengkap,
             'email' => $email,
             'password' => $password,
             'level' => 'pemohon'
           ];
      $this->Model_user->insert($data, 'tb_user');
       redirect('auth');
      
   }

   public function logout()
   {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('password');

      redirect('auth');
   }
}
