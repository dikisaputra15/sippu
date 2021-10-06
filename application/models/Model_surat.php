<?php

class Model_surat extends CI_Model
{
   public function getallsurat()
   {
      $query = "SELECT * from tb_permohonan where status = 'diterima'";
      return $this->db->query($query)->result_array();
   }

    
	public function lihatpermohonan($id)
   {
      return $this->db->get_where('tb_permohonan', ['id_mohon' => $id])->row_array();
   }

   public function prosestrack($npwp)
   {
      return $this->db->get_where('tb_permohonan', ['npwp' => $npwp])->row_array();
   }

   public function getsuratbyid($id)
   {
      return $this->db->get_where('tb_permohonan', ['id_mohon' => $id])->row_array();
   }

    public function simpansurat($id_mohon,$id_user,$image_name)
   {
       $data = array(
            'id_user'       => $id_user,
            'id_mohon'      => $id_mohon,
            'qr_code'     => $image_name
        );
        $this->db->insert('tb_surat',$data);
   }

    public function getsuratterbit()
   {
      if($this->session->userdata('level')=='pemohon'){
        $id = $this->session->userdata('id_user');
        $status = "surat terbit";
        $query = "SELECT tb_permohonan.*, tb_surat.id_surat,tb_surat.id_user,tb_surat.id_mohon,tb_surat.qr_code FROM tb_permohonan JOIN tb_surat
                    ON tb_permohonan.id_mohon=tb_surat.id_mohon where tb_permohonan.status='$status' and tb_permohonan.id_user='$id'";
        return $this->db->query($query)->result_array();
      }else{
         $status = "surat terbit";
         $query = "SELECT tb_permohonan.*, tb_surat.id_surat,tb_surat.id_user,tb_surat.id_mohon,tb_surat.qr_code FROM tb_permohonan JOIN tb_surat
                    ON tb_permohonan.id_mohon=tb_surat.id_mohon where tb_permohonan.status='$status'";
          return $this->db->query($query)->result_array();
      }
   }

   public function getpdfbyid($id)
   {

     $query = "SELECT tb_permohonan.*, tb_surat.id_surat,tb_surat.id_user,tb_surat.id_mohon,tb_surat.qr_code FROM tb_permohonan JOIN tb_surat
                  ON tb_permohonan.id_mohon=tb_surat.id_mohon where tb_permohonan.id_mohon='$id'";
      return $this->db->query($query)->row_array();
      
   }

}

?>