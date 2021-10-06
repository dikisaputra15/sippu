<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Keterangan Tolak</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Keterangan Tolak</h6>
            </div>
            <div class="card-body">
             <center><img src="<?= base_url('assets/img/kablebak.png'); ?>" style="width: 60px; height: 60px;"></center>
             <center><h5>DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN LEBAK</h5></center>
             <hr /><br>

             <form action="<?= base_url('Permohonan/prosestolak'); ?>" method="POST">
	             <div class="row">
	             	<div class="col-md-12" hidden>
		             	<input type="text" name="id_mohon" value="<?php echo $this->uri->segment(3); ?>">
		             </div>

		             <div class="col-md-12">
		             	<label>keterangan</label><br>
		             	<textarea name="ket" style="width: 300px; height: 100px;"></textarea>
		             </div>
		             <div class="col-md-2">
		             	<input type="submit" class="btn btn-primary" name="tolak">
	             	 </div>
	             </div>
             </form>

            </div>
          </div>
</div>
