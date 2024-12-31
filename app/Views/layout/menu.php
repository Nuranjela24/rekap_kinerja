
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="/assets/images/orang.png" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo strtoupper(session('username')) ?></span>
                <span class="text-secondary text-small"><?php echo strtoupper(session('username')) ?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <?php
          if (session('level')=='kepala unit') {
         
          ?>
          <li class="nav-item">
            <a class="nav-link" href="/data-karyawan">
              <span class="menu-title">Input Nama Karyawan</span>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
          </li>
          <?php
          }
          if (session('level') == 'admin' || session('level') == 'kepala unit') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/data-penilaian">
                <span class="menu-title">Penilaian </span>
                <i class="mdi mdi-calculator menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data-slip-gaji">
                <span class="menu-title">Slip Gaji </span>
                <i class="fa fa-money menu-icon"></i>
              </a>
            </li>
            
            <?php
          }
          if (session('level')=='karyawan') {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/data-slip-gaji">
                <span class="menu-title">Slip Gaji </span>
                <i class="fa fa-money menu-icon"></i>
              </a>
            </li>
            <?php
          }
          ?>
          <li class="nav-item">
<<<<<<< HEAD
              <a class="nav-link" href="/logout">
                <span class="menu-title">Logout </span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>
=======
            <a class="nav-link" href="/data-penilaian">
              <span class="menu-title">Penilaian </span>
              <i class="mdi mdi-calculator menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data-slip-gaji">
              <span class="menu-title">Slip Gaji </span>
              <i class="fa fa-money menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data-pegawai">
              <span class="menu-title">Data Pegawai </span>
              <i class="mdi mdi-account-multiple-outline menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data-pengguna">
              <span class="menu-title">Data Pengguna </span>
              <i class="mdi mdi mdi-account-key menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">
              <span class="menu-title">Logout </span>
              <i class="mdi mdi-logout menu-icon"></i>
            </a>
          </li>
>>>>>>> 1e54d76d58f2529b206bf90a82472ef3ef5279e4
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- br-pagetitle -->

          <head>
            <style>
              .br-pagetitle {
                display: flex;
                align-items: center;
                padding: 50px;
                background: linear-gradient(to right, #f5f5f5, #ffffff);
              }

              .br-pagetitle img {
                width: 200px;
                height: auto;
              }

              .br-pagetitle h4 {
                font-size: 24px;
                margin-left: 20px;
                color: #333;
              }

              .right-image {
                margin-left: auto;
              }

              .right-image img {
                width: 200px;
                /* Lebar gambar kanan */
                height: auto;
                opacity: 0.7;
                /* Transparansi untuk memberikan efek lembut */
              }
            </style>
          </head>