
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color:white;" href="<?= base_url(); ?>">
        <img src="<?= base_url('assets/img/moka.jpg'); ?>" alt="logo">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
  <?php if($this->session->userdata('level')=='admin'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('User'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Data User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Permohonan'); ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Permohonan</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Permohonan/tracking'); ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Tracking Permohonan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Surat'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Surat Permohonan</span></a>
      </li>
  <?php } ?>

<?php if($this->session->userdata('level')=='pemohon'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Permohonan'); ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Permohonan</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Permohonan/tracking'); ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Tracking Permohonan</span></a>
      </li>
  <?php } ?>

       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Surat/suratterbit'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Surat Terbit</span></a>
      </li>

 <?php if($this->session->userdata('level')=='kadis'){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Surat'); ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Surat Permohonan</span></a>
      </li>
<?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama_lengkap'); ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profileuser.png'); ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->