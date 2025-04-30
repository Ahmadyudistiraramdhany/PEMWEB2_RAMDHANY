<?php
// Koneksi database jika diperlukan
require_once '../dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSKESMAS</title>
    
    <!-- Link ke CSS AdminLTE melalui CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    
    <!-- Link ke Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        <!-- Navbar (Menu atas) -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PUSKESMAS </span>
            </a>

            <!-- Sidebar Menu -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="../kelurahan/list_kelurahan.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Kelurahan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../paramedik/list_paramedik.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Paramedik
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../pasien/list_pasien.php" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Pasien
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../periksa/list_periksa.php" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Periksa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../unit_kerja/list_unit.php" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Unit
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="container-fluid">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_paramedik.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" placeholder ="L/P" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir"  type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" placeholder="YYYY-MM-DD" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
        <select value="" name="kategori" id="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="dokter">1. Dokter</option>
            <option value="perawat">2. Perawat</option>
            <option value="bidan">3. Bidan</option>
        </select>
</div>
  </div> 
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">Telepon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
        <input id="alamat" name="alamat" type="text" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="unitkerja_id" class="col-4 col-form-label">Unit Kerja</label>
    <div class="col-8">
        <select name="unitkerja_id" id="unitkerja_id" class="form-control" required>
            <option value="">-- Pilih Unit Kerja --</option>
            <option value="1">1. Unit Gawat Darurat</option>
            <option value="2">2. Unit Poli Umum</option>
            <option value="3">3. Unit Laboratorium</option>
        </select>
    </div>
</div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="simpan" class="btn btn-primary">
    </div>
  </div>
</form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                PUSKESMAS
            </div>
            <strong>Copyright &copy; 2025 <a href="#">PUSKESMAS</a>.</strong> All rights reserved.
        </footer>

    </div>

    <!-- Script AdminLTE dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
</body>

</html>


