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

<form method="POST" action="proses_kelurahan.php">
    <input type="text" name="nama" placeholder="Nama Kelurahan" required>
    <input type="hidden" name="id_edit" value="<?= $data['id_kelurahan'] ?? '' ?>">
    <button type="submit" name="proses" value="simpan">Simpan</button>
    <button type="submit" name="proses" value="Update">Update</button>
</form>
<?php
// Koneksi database jika diperlukan
require_once '../dbkoneksi.php';
?>
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

