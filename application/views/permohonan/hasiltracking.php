<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Hasil Tracking Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Hasil Trackinig Permohonan</h6>
            </div>
            <div class="card-body">
             <center><img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 60px; height: 60px;"></center>
             <center><h5>DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN LEBAK</h5></center>
             <hr /><br>
             
	          <table>
               <tr>
                 <td>Nama Pemilik</td>
                 <td>:</td>
                 <td><?= $track['nama_pemilik']; ?></td>
               </tr>
               <tr>
                 <td>Nama Perusahaan</td>
                 <td>:</td>
                 <td><?= $track['nama_perusahaan']; ?></td>
               </tr>
               <tr>
                 <td>Alamat Perusahaan</td>
                 <td>:</td>
                 <td><?= $track['alamat_perusahaan']; ?></td>
               </tr>
                <tr>
                 <td>Status</td>
                 <td>:</td>
                 <td><?= $track['status']; ?></td>
               </tr>
             </table>

            </div>
          </div>
</div>
