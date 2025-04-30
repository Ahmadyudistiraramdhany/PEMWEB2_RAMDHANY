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
require_once '../dbkoneksi.php';

$id = $_GET['id'] ?? '';
$data = [
    'tanggal' => '',
    'berat' => '',
    'tinggi' => '',
    'tensi' => '',
    'keterangan' => '',
    'pasien_id' => '',
    'dokter_id' => ''
];

if ($id) {
    $sql = "SELECT * FROM periksa WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

$pasien = $dbh->query("SELECT id, nama FROM pasien")->fetchAll(PDO::FETCH_ASSOC);
$dokter = $dbh->query("SELECT id, nama FROM paramedik")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pemeriksaan</title>
    <style>
        form {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        label {
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
        }
        button {
            padding: 10px 20px;
            background-color: #2c7be5;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #1a5fcc;
        }
    </style>
</head>
<body>

<h3 style="text-align:center;">Form Pemeriksaan</h3>
<form method="POST" action="proses_periksa.php">
    <input type="hidden" name="id_edit" value="<?= htmlspecialchars($id) ?>">

    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" id="tanggal" value="<?= htmlspecialchars($data['tanggal']) ?>">

    <label for="berat">Berat (kg):</label>
    <input type="number" name="berat" id="berat" step="0.1" value="<?= htmlspecialchars($data['berat']) ?>">

    <label for="tinggi">Tinggi (cm):</label>
    <input type="number" name="tinggi" id="tinggi" step="0.1" value="<?= htmlspecialchars($data['tinggi']) ?>">

    <label for="tensi">Tensi:</label>
    <input type="text" name="tensi" id="tensi" value="<?= htmlspecialchars($data['tensi']) ?>">

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" id="keterangan"><?= htmlspecialchars($data['keterangan']) ?></textarea>

    <label for="pasien_id">Pasien:</label>
    <select name="pasien_id" id="pasien_id" required>
        <option value="">-- Pilih Pasien --</option>
        <?php foreach ($pasien as $ps): ?>
            <option value="<?= $ps['id'] ?>" <?= ($ps['id'] == $data['pasien_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($ps['nama']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="dokter_id">Dokter:</label>
    <select name="dokter_id" id="dokter_id" required>
        <option value="">-- Pilih Dokter --</option>
        <?php foreach ($dokter as $dr): ?>
            <option value="<?= $dr['id'] ?>" <?= ($dr['id'] == $data['dokter_id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($dr['nama']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit" name="proses" value="<?= $id ? 'Update' : 'Simpan' ?>">
        <?= $id ? 'Update' : 'Simpan' ?>
    </button>
</form>

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

