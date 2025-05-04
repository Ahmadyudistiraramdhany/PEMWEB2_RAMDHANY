<?php
require_once '../dbkoneksi.php';

if (isset($_POST['proses'])) {
    $id = $_POST['id'] ?? null;
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kategori = $_POST['kategori'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $unitkerja_id = $_POST['unitkerja_id'];

    if ($id) {
        // Update data
        $sql = "UPDATE paramedik SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?, telpon=?, alamat=?, unitkerja_id=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unitkerja_id, $id]);
    } else {
        // Insert data baru
        $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unitkerja_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unitkerja_id]);
    }

    header("Location: list_paramedik.php");
    exit();
}

// Hapus data
if (isset($_GET['hapus']) && isset($_GET['id'])) {
    $sql = "DELETE FROM paramedik WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_GET['id']]);
    header("Location: list_paramedik.php");
    exit();
}
