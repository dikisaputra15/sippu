<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Surat Permohonan Masuk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Permohonan Perizinan usaha yang masuk</h6>
            </div>
            <div class="card-body">
            
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($surat as $dat) : ?>
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
                       <td><a href="<?= base_url('Surat/lihat/') . $dat['id_mohon']; ?>" class="btn btn-primary">Lihat</a></td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

