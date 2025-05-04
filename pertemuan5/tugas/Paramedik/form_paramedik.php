<?php
require_once '../dbkoneksi.php';

// Cek apakah ini untuk edit
$id = isset($_GET['id']) ? $_GET['id'] : '';
$data = null;

if (!empty($id)) {
    $stmt = $dbh->prepare("SELECT * FROM paramedik WHERE id = ?");
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Paramedik</title>
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
        <a href="#" class="brand-link">
            <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
            <span class="brand-text font-weight-light">PUSKESMAS</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <li class="nav-item">
                        <a href="list_paramedik.php" class="nav-link active">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>Paramedik</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper">
        <div class="container mt-4">
            <form method="POST" action="proses_paramedik.php">
                <?php if (!empty($id)): ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" class="form-control" value="<?= $data['nama'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input id="gender" name="gender" placeholder="L/P" type="text" class="form-control" value="<?= $data['gender'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $data['tmp_lahir'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $data['tgl_lahir'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="dokter" <?= ($data['kategori'] ?? '') === 'dokter' ? 'selected' : '' ?>>1. Dokter</option>
                        <option value="perawat" <?= ($data['kategori'] ?? '') === 'perawat' ? 'selected' : '' ?>>2. Perawat</option>
                        <option value="bidan" <?= ($data['kategori'] ?? '') === 'bidan' ? 'selected' : '' ?>>3. Bidan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="telpon">Telepon</label>
                    <input id="telpon" name="telpon" type="text" class="form-control" value="<?= $data['telpon'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" name="alamat" type="text" class="form-control" value="<?= $data['alamat'] ?? '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="unitkerja_id">Unit Kerja</label>
                    <select name="unitkerja_id" id="unitkerja_id" class="form-control" required>
                        <option value="">-- Pilih Unit Kerja --</option>
                        <option value="1" <?= ($data['unitkerja_id'] ?? '') == 1 ? 'selected' : '' ?>>1. Unit Gawat Darurat</option>
                        <option value="2" <?= ($data['unitkerja_id'] ?? '') == 2 ? 'selected' : '' ?>>2. Unit Poli Umum</option>
                        <option value="3" <?= ($data['unitkerja_id'] ?? '') == 3 ? 'selected' : '' ?>>3. Unit Laboratorium</option>
                    </select>
                </div>

                <div class="form-group">
                <button type="submit" name="proses" value="<?= empty($id) ? 'simpan' : 'update' ?>" class="btn btn-primary">
                    <i class="fas fa-save"></i> <?= empty($id) ? 'Simpan' : 'Update' ?>
                </button>

                    <a href="list_paramedik.php" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
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
