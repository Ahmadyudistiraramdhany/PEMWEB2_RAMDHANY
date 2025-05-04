<?php
require_once '../dbkoneksi.php';

$id = $_GET['id'] ?? '';
$data = [];
if ($id) {
    $sql = "SELECT * FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
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
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
            <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
            <span class="brand-text font-weight-light">PUSKESMAS</span>
        </a>

            <!-- Sidebar Menu -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="../pasien/list_pasien.php" class="nav-link active">
                            <i class="nav-icon fas fa-procedures"></i>
                            <p>Pasien</p>
                        </a>
                    </li>
                        <!-- Menu lainnya -->
                    </ul>
                </nav>
            </div>
        </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper p-4">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title"><?= $id ? 'Edit' : 'Tambah' ?> Data Pasien</h3>
                    </div>
                    <form method="POST" action="proses_pasien.php">
                        <input type="hidden" name="id_edit" value="<?= $data['id'] ?? '' ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" value="<?= $data['kode'] ?? '' ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?? '' ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" class="form-control" value="<?= $data['tmp_lahir'] ?? '' ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?? '' ?>">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="L" <?= isset($data['gender']) && $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="P" <?= isset($data['gender']) && $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $data['email'] ?? '' ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"><?= $data['alamat'] ?? '' ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>ID Kelurahan</label>
                                <input type="number" name="kelurahan_id" class="form-control" value="<?= $data['kelurahan_id'] ?? '' ?>">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" name="proses" value="<?= $id ? 'Update' : 'simpan' ?>" class="btn btn-primary">
                                <i class="fas fa-save"></i> <?= $id ? 'Update' : 'Simpan' ?>
                            </button>
                            <a href="list_pasien.php" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer text-sm">
        <div class="float-right d-none d-sm-inline">PUSKESMAS</div>
        <strong>&copy; 2025 <a href="#">PUSKESMAS</a>.</strong> All rights reserved.
    </footer>
</div>

<!-- Script AdminLTE -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>
</html>
