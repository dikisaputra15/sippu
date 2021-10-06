<?php

class Model_user extends CI_Model
{
   public function getAlluser()
   {
      $query = "SELECT * from tb_user";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_user', ['id_user' => $id]);
   }

  public function getuserById($id_user)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
   }

	public function updateuser()
   {
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $level = $this->input->post('level');

      $data = [
      	'nama_lengkap' => $nama,
      	'email' => $email,
      	'password' => $password,
      	'level' => $level
      ];

      $this->db->update('tb_user', $data, ['id_user' => $this->input->post('id_user')]);
   }


}

?>