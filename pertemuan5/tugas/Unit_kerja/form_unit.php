<?php
require_once '../dbkoneksi.php';

// Ambil data jika mode edit
$id = $_GET['id'] ?? '';
$data = ['kode_unit' => '', 'nama_unit' => '', 'keterangan' => ''];

if ($id) {
    $stmt = $dbh->prepare("SELECT * FROM unit_kerja WHERE id = ?");
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Unit Kerja - PUSKESMAS</title>

    <!-- AdminLTE & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="list_unit.php" class="nav-link active">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Unit Kerja</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper p-4">
        <h3 class="mb-4">Form Unit Kerja</h3>

        <form method="POST" action="proses_unit.php">
            <input type="hidden" name="id_edit" value="<?= $id ?>">

            <div class="form-group">
                <label for="kode_unit">Kode Unit</label>
                <input type="text" name="kode_unit" id="kode_unit" value="<?= $data['kode_unit'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_unit">Nama Unit</label>
                <input type="text" name="nama_unit" id="nama_unit" value="<?= $data['nama_unit'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" value="<?= $data['keterangan'] ?>" class="form-control">
            </div>

            <div class="form-group mt-3">
                <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>" class="btn btn-primary">
                    <i class="fas fa-save"></i> <?= $id ? 'Update' : 'Simpan' ?>
                </button>
                <a href="list_unit.php" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Kembali
                </a>
            </div>
        </form>
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
