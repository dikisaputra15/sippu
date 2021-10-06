<?php

class Model_permohonan extends CI_Model
{
   public function getallpermohonan()
   {
      if($this->session->userdata('level')=='pemohon'){
         $id = $this->session->userdata('id_user');
         $query = "SELECT * from tb_permohonan where status != 'diterima' and status != 'surat terbit' and id_user='$id'";
         return $this->db->query($query)->result_array();
      }else{
          $query = "SELECT * from tb_permohonan where status != 'diterima' and status != 'surat terbit'";
         return $this->db->query($query)->result_array();
      }
   }

    
	public function lihatpermohonan($id)
   {
      return $this->db->get_where('tb_permohonan', ['id_mohon' => $id])->row_array();
   }

   public function prosestrack($npwp)
   {
      return $this->db->get_where('tb_permohonan', ['npwp' => $npwp])->row_array();
   }

}

?>