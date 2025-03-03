<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
// Memeriksa apakah form sudah disubmit
if (isset($_POST['submit'])) {
    // Mengambil data dari form dan membersihkan input
    $nama = htmlspecialchars($_POST['nama']);
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // untuk menghitung nilai total
    $nilai_total = $nilai_uts * 0.3 + $nilai_uas * 0.35 + $nilai_tugas * 0.35;

    // untuk menententukan status kelulusan
    $status = $nilai_total >= 56 ? "Lulus" : "Tidak Lulus";

    // untuk menentukan Grade
    if ($nilai_total > 100 || $nilai_total < 0) {
        $grade = "I"; 
    } elseif ($nilai_total >= 85) {
        $grade = "A";
    } elseif ($nilai_total >= 70) {
        $grade = "B";
    } elseif ($nilai_total >= 56) {
        $grade = "C";
    } elseif ($nilai_total >= 36) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // untuk menentukan keterangan dengan switch case
    $keterangan = "";
    switch ($grade) {
        case "A":
            $keterangan = "Sangat Memuaskan";
            break;
        case "B":
            $keterangan = "Memuaskan";
            break;
        case "C":
            $keterangan = "Cukup";
            break;
        case "D":
            $keterangan = "Kurang";
            break;
        case "E":
            $keterangan = "Sangat Kurang";
            break;
        case "I":
            $keterangan = "Tidak Ada";
            break;
        default:
            $keterangan = "Grade tidak valid";
            break;
    }
}
?>
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h2 class="card-title text-center">Hasil Perhitungan Nilai</h2>
            </div>
            <div class="card-body">
                <p><strong>Nama Lengkap:</strong> <?php echo $nama; ?></p>
                <p><strong>Mata Kuliah:</strong> <?php echo $mata_kuliah; ?></p>
                <p><strong>Nilai UTS:</strong> <?php echo $nilai_uts; ?></p>
                <p><strong>Nilai UAS:</strong> <?php echo $nilai_uas; ?></p>
                <p><strong>Nilai Tugas:</strong> <?php echo $nilai_tugas; ?></p>
                <p><strong>Nilai Total:</strong> <?php echo number_format($nilai_total, 2); ?></p>
                <p><strong>Status:</strong> <?php echo $status; ?></p>
                <p><strong>Grade:</strong> <?php echo $grade; ?></p>
                <p><strong>Keterangan:</strong> <?php echo $keterangan; ?></p>
            </div>
        </div>
        <a href="tugas_input.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
