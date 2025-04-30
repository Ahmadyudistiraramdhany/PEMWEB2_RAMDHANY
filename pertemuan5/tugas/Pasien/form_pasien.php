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
            <?php
// Koneksi Database
require_once '../dbkoneksi.php';

// Query data pasien jika ada ID
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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<div class="container mx-auto px-4 py-6 max-w-2xl">
    <h2 class="text-2xl font-bold mb-4"><?= $id ? 'Edit' : 'Tambah' ?> Data Pasien</h2>

    <!-- Tombol kembali -->
    <a href="index.php" class="inline-block mb-4 text-blue-600 hover:underline">← Kembali ke Daftar Pasien</a>

    <!-- Formulir -->
    <form method="POST" action="proses_pasien.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <input type="hidden" name="id_edit" value="<?= $data['id'] ?? '' ?>">

        <div class="mb-4">
            <label class="block text-gray-700">Kode:</label>
            <input type="text" name="kode" value="<?= $data['kode'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Tempat Lahir:</label>
            <input type="text" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Gender:</label>
            <select name="gender" class="w-full border rounded px-3 py-2">
                <option value="">-- Pilih --</option>
                <option value="L" <?= isset($data['gender']) && $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="P" <?= isset($data['gender']) && $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email:</label>
            <input type="email" name="email" value="<?= $data['email'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Alamat:</label>
            <textarea name="alamat" class="w-full border rounded px-3 py-2"><?= $data['alamat'] ?? '' ?></textarea>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700">Kelurahan ID:</label>
            <input type="number" name="kelurahan_id" value="<?= $data['kelurahan_id'] ?? '' ?>" class="w-full border rounded px-3 py-2">
        </div>

        <div class="flex justify-between">
            <button type="submit" name="proses" value="<?= $id ? 'Update' : 'simpan' ?>"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                <?= $id ? 'Update' : 'Simpan' ?>
            </button>
            <a href="list_pasien.php" class="text-gray-600 hover:underline mt-2">Batal</a>
        </div>
    </form>
</div>

</body>
</html>
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

