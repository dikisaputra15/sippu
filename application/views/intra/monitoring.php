
     
<div class="container-fluid">

<!-- Page Heading -->
<h5>Monitoring LBKB</h5>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  
  <div class="card-body">
  <form action="" method="POST">
  <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
         Unit : <select class="form-select" aria-label="Default select example">
                    <option selected value="0">Semua</option>
                    <option value="1">Rangkasbitung</option>
                    <option value="2">Pandeglang</option>
                    <option value="3">Malingping</option>
                    <option value="4">Labuan</option>
                </select>     
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
         Tahun : <select class="form-select" aria-label="Default select example">
                    <option selected value="0">2021</option>
                    <option value="1">2020</option>
                    <option value="2">2019</option>
                    <option value="3">2018</option>
                </select>     
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <button><img src="<?= base_url('assets/img/pdf.png') ?>" style="width:30px; height:30px;">Cetak Pdf</button>
            <button><img src="<?= base_url('assets/img/excel.jpg') ?>" style="width:30px; height:30px;">Cetak Excel</button>  
        </div>
</div>
</form>
<br><br>
<table border="1">
    <tr>
        <td>KDBACA</td>
        <td>KETERANGAN</td>
        <td>TAHUN</td>
    </tr>
    <tr>
        <td>A</td>
        <td>KWH METER MACET</td>
        <td></td>
    </tr>
    <tr>
        <td>C</td>
        <td>KWH METER TIDAK ADA</td>
        <td></td>
    </tr>
    <tr>
        <td>H</td>
        <td>KWH METER BURAM/PECAH</td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>PAGAR TERKUNCI</td>
        <td></td>
    </tr>
    <tr>
        <td>E</td>
        <td>RUMAH TUTUP</td>
        <td></td>
    </tr>
    <tr>
        <td>I</td>
        <td>KWH METER DIDALAM BANGUNAN</td>
        <td></td>
    </tr>
    
</table>
</div>
</div>
</div>






