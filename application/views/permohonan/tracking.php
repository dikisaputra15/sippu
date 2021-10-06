<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tracking Permohonan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Trackinig Permohonan</h6>
            </div>
            <div class="card-body">
             <center><img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 60px; height: 60px;"></center>
             <center><h5>DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN LEBAK</h5></center>
             <hr /><br>

             <form action="<?= base_url('Permohonan/prosestrack'); ?>" method="POST">
	             <div class="row">
		             <div class="col-md-6">
		             	<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NPWP" name="npwp" required>
		             </div>
		             <div class="col-md-2">
		             	<input type="submit" class="btn btn-primary" name="track" value="Tracking">
	             </div>
	             </div>
             </form>

            </div>
          </div>
</div>
