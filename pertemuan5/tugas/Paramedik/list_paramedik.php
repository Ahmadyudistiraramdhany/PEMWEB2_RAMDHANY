


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
            <a href="#" class="brand-link">
                <i class="fas fa-clinic-medical brand-image img-circle elevation-3"></i>
                <span class="brand-text font-weight-light">PUSKESMAS</span>
            </a>
            <!-- Sidebar Menu -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <div class="container-fluid">
            <?php
require_once '../dbkoneksi.php';

// 4.definisi query
$sql = "SELECT * FROM paramedik";

// 5.eksekusi query
$rs = $dbh->query($sql);
?>
<a href="../halaman_utama/halaman.php">kembali</a>
<table border="1" width="100%">
<tr>
    <th>Nomor</th>
    <th>Nama </th>
    <th>Gender </th>
    <th>tmp_lahir</th>
    <th>tgl_lahir</th>
    <th>Kategori</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th>unit_kerja</th>
    <th>Aksi</th>
</tr>

<?php
$nomor = 1;
foreach($rs as $row){
    ?>
     <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->gender ?></td>
            <td><?= $row->tmp_lahir ?></td>
            <td><?= $row->tgl_lahir ?></td>
            <td><?= $row->kategori ?></td>
            <td><?= $row->telpon ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->unitkerja_id ?></td>
            <td>
            <a href="form_paramedik.php?id=<?= $row->id ?>">Edit</a> | 
            <a href="proses_paramedik.php?hapus=1&id=<?= $row->id ?>" 
               onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>

            </td>
        </tr>
    <?php
           
            
}


?>
</table>
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
