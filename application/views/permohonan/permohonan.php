<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Permohonan Perizinan usaha</h6>
            </div>
            <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Form Permohonan</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NPWP</th>
                      <th>Nama Pemilik</th>
                      <th>Nama Perusahaan</th>
                      <th>Alamat Perusahaan</th>
                      <th>File</th>
                      <th>Status</th>
                       <?php if($this->session->userdata('level')=='admin'){ ?>
                      <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($mohon as $dat) : ?>
                    <tr>
                      <td><?= $dat['npwp']; ?></td>
                      <td><?= $dat['nama_pemilik']; ?></td>
                      <td><?= $dat['nama_perusahaan']; ?></td>
                      <td><?= $dat['alamat_perusahaan']; ?></td>
                      <td> 
                          <a href="<?= base_url('uploads/') . $dat['bpjs_k']; ?>">BPJS K</a><br>
                          <a href="<?= base_url('uploads/') . $dat['foto']; ?>">Foto</a><br>
                          <a href="<?= base_url('uploads/') . $dat['skdtu']; ?>">SKDTU</a><br>
                          <a href="<?= base_url('uploads/') . $dat['siuk']; ?>">SIUK</a>
                      </td>
                       <td><?= $dat['status']; ?></td>
                       <?php if($this->session->userdata('level')=='admin'){ ?>
                       <td><a href="<?= base_url('Permohonan/lihat/') . $dat['id_mohon']; ?>" class="btn btn-primary">Lihat</a></td>
                       <?php } ?>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Form Permohonan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('Permohonan/formpermohonan') ?>" method="POST" enctype="multipart/form-data" >
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NPWP" name="npwp" id="npwp" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Pemilik" name="nama_pemilik" id="nama_pemilik" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Perusahaan" name="nama_perusahaan" id="nama_perusahaan" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Bidang Usaha" name="bidang_usaha" id="bidang_usaha" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Alamat Perusahaan" name="alamat_perusahaan" id="alamat_perusahaan" required>
                  </div>
                  <div class="form-group">
                    <label>BPJS Ketenagakerjaan <small>.jpeg</small></label>
                     <input class="form-control form-control-sm mb-3" name="bpjs" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>foto 4x6 <small>.jpeg</small></label>
                     <input class="form-control form-control-sm mb-3" name="foto" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>Surat Keterangan Domisili Tempat Usaha <small>.pdf</small></label>
                     <input class="form-control form-control-sm mb-3" name="skdtu" type="file" required>
                  </div>
                   <div class="form-group">
                    <label>Surat Izin Usaha Kecamatan <small>.pdf</small></label>
                     <input class="form-control form-control-sm mb-3" name="siuk" type="file" required>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
