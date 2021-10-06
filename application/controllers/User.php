<?php

class User extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->Model_user->getalluser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahuser()
    {
       $nama = $this->input->post('nama');
       $password = $this->input->post('password');
       $email = $this->input->post('email');
       $level = $this->input->post('level');
       $data = [
             'nama_lengkap' => $nama,
             'email' => $email,
             'password' => $password,
             'level' => $level
           ];
      $this->Model_user->insert($data, 'tb_user');
       redirect('User');
    }

    public function edituser($id_user)
    {
       $data['title'] = 'Edit';
       $data['user'] = $this->Model_user->getuserById($id_user);
       $this->form_validation->set_rules('id_user', 'id_user', 'required');
       $this->form_validation->set_rules('email', 'email', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_user->updateuser();
          redirect('User');
       }
    }

    public function hapususer($id)
    {
       $this->Model_user->delete($id);
       redirect('User');
    }

}

?>