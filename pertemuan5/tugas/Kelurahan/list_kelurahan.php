<?php
require_once '../dbkoneksi.php';

// Ambil data dari tabel kelurahan
$sql = "SELECT * FROM kelurahan";
$rs = $dbh->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelurahan - Puskesmas</title>

    <!-- AdminLTE & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
            <span class="brand-text font-weight-light">PUSKESMAS</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="../halaman_utama/halaman.php" class="nav-link">
                            <i class="nav-icon fas fa-clinic-medical"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="list_kelurahan.php" class="nav-link active">
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
                <h1 class="mt-3">Data Kelurahan</h1>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Tombol navigasi -->
                <div class="mb-3 flex justify-between">
                    <a href="../halaman_utama/halaman.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">← Kembali ke Beranda</a>
                    <a href="form_kelurahan.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Kelurahan</a>
                </div>

                <!-- Tabel Data -->
                <div class="bg-white shadow-md rounded-lg overflow-x-auto">
                    <table class="min-w-full text-center">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="py-2 px-4">No</th>
                                <th class="py-2 px-4">Nama Kelurahan</th>
                                <th class="py-2 px-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php $nomor = 1; foreach($rs as $row): ?>
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-2 px-4"><?= $nomor++ ?></td>
                                <td class="py-2 px-4"><?= $row->nama_kelurahan ?></td>
                                <td class="py-2 px-4">
                                    <div class="flex justify-center space-x-2">
                                        <a href="form_kelurahan.php?id=<?= $row->id ?>" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-1 px-3 rounded text-sm">Edit</a>
                                        <a href="proses_kelurahan.php?hapus=1&id=<?= $row->id ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded text-sm">Hapus</a>
                                    </div>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                            <?php if (empty($rs)): ?>
                            <tr>
                                <td colspan="3" class="py-4 text-center text-gray-500">Data belum tersedia.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>
</body>
</html>
