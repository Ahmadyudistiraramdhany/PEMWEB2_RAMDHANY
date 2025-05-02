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

    <!-- CSS AdminLTE & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
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
            <a href="#" class="brand-link">
                <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
                <span class="brand-text font-weight-light">PUSKESMAS</span>
            </a>

            <!-- Sidebar Menu -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-clinic-medical"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../kelurahan/list_kelurahan.php" class="nav-link">
                                <i class="nav-icon fas fa-map-marked-alt"></i>
                                <p>Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../paramedik/list_paramedik.php" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Paramedik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../pasien/list_pasien.php" class="nav-link">
                                <i class="nav-icon fas fa-procedures"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../periksa/list_periksa.php" class="nav-link">
                                <i class="nav-icon fas fa-notes-medical"></i>
                                <p>Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../unit_kerja/list_unit.php" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Unit Kerja</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Header -->
            <section class="content-header">
                <div class="container-fluid">
                    <h1 class="mt-3">Selamat Datang di Layanan Puskesmas</h1>
                    <p class="text-muted">Gunakan menu di samping kiri untuk mengelola data sistem puskesmas.</p>
                </div>
            </section>

            <!-- Dashboard Cards -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- Card: Pasien -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h4>Pasien</h4>
                                    <p>Data Pasien</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-procedures"></i>
                                </div>
                                <a href="../pasien/list_pasien.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- Card: Paramedik -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4>Paramedik</h4>
                                    <p>Tenaga Kesehatan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <a href="../paramedik/list_paramedik.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- Card: Periksa -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner text-white">
                                    <h4>Periksa</h4>
                                    <p>Riwayat Pemeriksaan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-notes-medical"></i>
                                </div>
                                <a href="../paramedik/list_periksa.php" class="small-box-footer"><span class="inner text-white">Lihat Detail</span> <i class="fas fa-arrow-circle-right text-white"></i></a>
                                </div>
                        </div>

                        <!-- Card: Kelurahan -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h4>Kelurahan</h4>
                                    <p>Wilayah Kerja</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <a href="../kelurahan/list_kelurahan.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- Card: Unit Kerja -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4>Unit Kerja</h4>
                                    <p>Data Unit</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <a href="../unit_kerja/list_unit.php" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">PUSKESMAS</div>
            <strong>&copy; 2025 <a href="#">PUSKESMAS</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
</body>

</html>
