<?php
require_once '../dbkoneksi.php';

// Ambil data dari form
$kode = $_POST['kode'] ?? '';
$nama = $_POST['nama'] ?? '';
$tmp_lahir = $_POST['tmp_lahir'] ?? '';
$tgl_lahir = $_POST['tgl_lahir'] ?? '';
$gender = $_POST['gender'] ?? '';
$email = $_POST['email'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$kelurahan_id = $_POST['kelurahan_id'] ?? '';
$proses = $_POST['proses'] ?? '';
$id_edit = $_POST['id_edit'] ?? null;

// Cek proses simpan atau update
if ($proses == 'simpan') {
    // Proses INSERT
    $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id]);
} elseif ($proses == 'Update') {
    // Proses UPDATE
    $sql = "UPDATE pasien SET kode = ?, nama = ?, tmp_lahir = ?, tgl_lahir = ?, gender = ?, email = ?, alamat = ?, kelurahan_id = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id, $id_edit]);
}

// Redirect ke halaman daftar pasien setelah simpan/update
header("Location: list_pasien.php");
exit; // pastikan script berhenti setelah redirect
?>
