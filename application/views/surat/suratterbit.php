<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Surat Terbit</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Surat Terbit</h6>
            </div>
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Pemilik</th>
                      <th>Nama Perusahaan</th>
                      <th>QR Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($suratterbit as $dat) : ?>
                    <tr>
                      <td><?= $dat['nama_pemilik']; ?></td>
                      <td><?= $dat['nama_perusahaan']; ?></td>
                      <td><img style="width: 50px; height: 50px;" src="<?= base_url('assets/img/') . $dat['qr_code']; ?>"></td>
                       <td><a href="<?= base_url('Surat/cetak/') . $dat['id_mohon']; ?>" class="btn btn-primary">Lihat</a></td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table><br>
                   <a href="" ><img src="<?= base_url('assets/img/excel.png'); ?>" style="width:30px; height:30px;"></a> Export To XLS
              </div>
            </div>
          </div>

</div>

