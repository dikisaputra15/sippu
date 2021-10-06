<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= $user['nama_lengkap']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $user['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select name="level" class="form-control">
                      <option value="admin" <?php if($user['level']=="admin"){echo "selected";} ?> class="form-control">admin</option>
                      <option value="pemohon" <?php if($user['level']=="pemohon"){echo "selected";} ?> class="form-control">pemohon</option>
                      <option value="kadis" <?php if($user['level']=="kadis"){echo "selected";} ?> class="form-control">kadis</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>