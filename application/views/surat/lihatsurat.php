<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Pemohon</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pemohon</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="<?= base_url('Surat/buatsurat'); ?>" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id Mohon</label>
                    <input type="text" class="form-control" name="id_mohon" value="<?= $surat['id_mohon']; ?>">
                  </div>
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $surat['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Npwp</label>
                    <input type="text" class="form-control" name="npwp" value="<?= $surat['npwp']; ?>" readonly="readonly">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemilik</label>
                    <input type="text" class="form-control" name="nama_pemilik" value="<?= $surat['nama_pemilik']; ?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="nama_perusahaan" value="<?= $surat['nama_perusahaan']; ?>" readonly="readonly">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Perusahaan</label>
                    <input type="text" class="form-control" name="alamat_perusahaan" value="<?= $surat['alamat_perusahaan']; ?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="buat" class="btn btn-primary" value="Buatkan Surat">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>