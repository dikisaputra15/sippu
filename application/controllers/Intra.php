<?php

class Intra extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
  //       $this->load->model('Model_lbkb');
		// $this->load->library('excel');
    }

    public function index()
    {
        $data['judul'] = 'Data Intra';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('intra/intra', $data);
        $this->load->view('templates/footer'); 
    }

	public function monitoring()
    {
        $data['judul'] = 'Data Monitoring';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('lbkb/monitoring', $data);
        $this->load->view('templates/footer'); 
    }

	public function validasi()
    {
        $data['judul'] = 'validasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('lbkb/validasi', $data);
        $this->load->view('templates/footer'); 
    }

	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
		$path = $_FILES["file"]["tmp_name"];
		$object = PHPExcel_IOFactory::load($path);
		foreach($object->getWorksheetIterator() as $worksheet)
		{
			$highestRow = $worksheet->getHighestRow();
			$highestColumn = $worksheet->getHighestColumn();
			for($row=2; $row<=$highestRow; $row++)
			{
			$NOMOR = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
			$IDPEL = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			$ALAMAT = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
			$BLTH = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
			$NAMA = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
			$TARIF = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
			$DAYA = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
			$KDBACA = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
			$TGLBACA = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
			$STAN_METER = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
			$STAN_BACA = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
			$PEMKWH = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
			$JAMNYALA = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
			$MUTASI = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
			$UNITAP = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
			$UNITUP = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
			$data[] = array(
			'NOMOR'  => $NOMOR,
			'IDPEL'   => $IDPEL,
			'ALAMAT'    => $ALAMAT,
			'BLTH'  => $BLTH,
			'NAMA'   => $NAMA,
			'TARIF'   => $TARIF,
			'DAYA'   => $DAYA,
			'KDBACA'   => $KDBACA,
			'TGLBACA'   => $TGLBACA,
			'STAN_METER'   => $STAN_METER,
			'STAN_BACA'   => $STAN_BACA,
			'PEMKWH'   => $PEMKWH,
			'JAMNYALA'   => $JAMNYALA,
			'MUTASI'   => $MUTASI,
			'UNITAP'   => $UNITAP,
			'UNITUP'   => $UNITUP
			);

			}
			

		}
			$this->Model_lbkb->insertRecord($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Import Data Berhasil!
		 	 </div>');
			redirect('Lbkb');		
		} 
	}
 

}

?>