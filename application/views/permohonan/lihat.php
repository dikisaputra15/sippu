<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Permohonan Perizinan usaha</h6>
            </div>
            <div class="card-body">
             <center><img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 60px; height: 60px;"></center>
             <center><h5>DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN LEBAK</h5></center>
             <hr /><br>

             <h7>Kepada Yth</h7><br>
             <h7>Dinas perindustrian dan perdagangan kabupaten lebak</h7><br>

             <h7>Kami yang bertanda tangan dibawah ini :</h7><br>

             <table>
               <tr>
                 <td>Nama Pemilik</td>
                 <td>:</td>
                 <td><?= $lihat['nama_pemilik']; ?></td>
               </tr>
                <tr>
                 <td>NPWP</td>
                 <td>:</td>
                 <td><?= $lihat['npwp']; ?></td>
               </tr>
               <tr>
                 <td>Nama Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat['nama_perusahaan']; ?></td>
               </tr>
               <tr>
                 <td>Alamat Perusahaan</td>
                 <td>:</td>
                 <td><?= $lihat['alamat_perusahaan']; ?></td>
               </tr>
               <tr>
                 <td>File Pendukung</td>
                 <td>:</td>
                 <td>
                   <a href="<?= base_url('uploads/') . $lihat['bpjs_k']; ?>">BPJS Ketenagakerjaan</a><br>
                   <a href="<?= base_url('uploads/') . $lihat['foto']; ?>">Foto</a><br>
                   <a href="<?= base_url('uploads/') . $lihat['skdtu']; ?>">SKDTU</a><br>
                   <a href="<?= base_url('uploads/') . $lihat['siuk']; ?>">SIUK</a>
                 </td>
               </tr>
             </table><br>
             <h7>dengan ini mengajukan permohonan izin usaha di wilayah yang bapak/ibu pimpin</h7><br>
             <h7>demikian permohonan ini kami ucapkan terima kasih</h7><br><br><br>
             <h7>Hormat Kami</h7><br>
             <h7><?= $lihat['nama_perusahaan']; ?></h7><br><br><br>


            </div>
            <?php if ($lihat['status']== "proses verifikasi"){ ?>
            <div class="card-header py-3">
               <a href="<?= base_url('Permohonan/tolak/') . $lihat['id_mohon']; ?>" class="btn btn-primary">Tolak</a>
               <a href="<?= base_url('Permohonan/terima/'). $lihat['id_mohon']; ?>" class="btn btn-primary" style="float: right;">Terima</a>
             </div>
             <?php } ?>
          </div>

</div>


