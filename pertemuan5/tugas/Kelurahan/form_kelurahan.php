<?php
require_once '../dbkoneksi.php';

$id_edit = $_GET['id'] ?? null;  // Ambil id dari URL (untuk Edit)
$data = null;

// Jika id_edit ada, ambil data kelurahan berdasarkan ID
if ($id_edit) {
    $sql = "SELECT * FROM kelurahan WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_edit]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}
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
            <a href="#" class="brand-link">
            <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
            <span class="brand-text font-weight-light">PUSKESMAS</span>
        </a>

            <!-- Sidebar Menu -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="list_kelurahan.php" class="nav-link active">
                            <i class="nav-icon fas fa-map-marked-alt"></i>
                            <p>Kelurahan</p>
                        </a>
                    </li>
                        <!-- Menu lainnya -->
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <form method="POST" action="proses_kelurahan.php">
                    <div class="form-group">
                        <label for="nama">Nama Kelurahan</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                               value="<?= htmlspecialchars($data['nama_kelurahan'] ?? '') ?>" required>
                    </div>

                    <input type="hidden" name="id_edit" value="<?= $data['id'] ?? '' ?>">

                    <div class="form-group">
                        <!-- Tombol Simpan / Update -->
                        <?php if (!empty($data)): ?>
                            <button type="submit" name="proses" value="Update" class="btn btn-primary"><i class="fas fa-save"></i>Update</button>
                        <?php else: ?>
                            <button type="submit" name="proses" value="simpan" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                        <?php endif; ?>

                        <!-- Tombol Kembali -->
                        <a href="list_kelurahan.php" class="btn btn-secondary"><i class="fas fa-times"></i>Kembali</a>
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
