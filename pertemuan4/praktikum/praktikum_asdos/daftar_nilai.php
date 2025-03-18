<?php 
require_once 'nilai_mahasiswa.php';

$data_mhs = [];

// data awal
$data_mhs[] = new NilaiMahasiswa("Ahmad Yudistira Ramdhany", "Pemrograman WEB",78, 85, 90,);
$data_mhs[] = new NilaiMahasiswa("Muhammad Rozi", "Pemrograman WEB" , 45, 62, 85);
$data_mhs[] = new NilaiMahasiswa("Muhammad Hatta", "Pemrograman WEB", 82, 88, 98,);

?>

<?php ?>

<h3>Input Data Mahasiswa</h3>

<form action="POST">
    <label for="nama">Nama</label>
    <input type="text" id="" name="nama"><br><br>
    <label for="matakuliah">Mata Kuliah</label>
    <input type="text" id="" name="matakuliah"><br><br>
    <label for="uts">UTS</label>
    <input type="number" id="" name="uts"><br><br>
    <label for="">UAS</label>
    <input type="number" id="" name="uas"><br><br>
    <label for="">Nilai Tugas</label>
    <input type="number" id="" name="tugas"><br><br>
    <input type="submit" value="Simpan">
</form>

<h3>Daftar Nilai Mahasiswa</h3>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>No</th
        ><th>Nama Lengkap</th>
        <th>Mata Kuliah</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Tugas</th>
        <th>Nilai Akhir</th>
        <th>Kelulusan</th>
    </tr>
    </thead>
    <tbody>
        <?php 
         $nomor = 1;
         foreach($data_mhs as $mhs){
            echo "<tr>";
            echo "<td>".$nomor."</td>";
            echo "<td>".$mhs->nama."</td>";
            echo "<td>".$mhs->matakuliah."</td>";
            echo "<td>".$mhs->nilai_uts."</td>";
            echo "<td>".$mhs->nilai_uas."</td>";
            echo "<td>".$mhs->nilai_tugas."</td>";
            echo "<td>". number_format($mhs->getNA(), 2). "</td>";
            echo  "<td>".$mhs->kelulusan(). "</td>";
            echo "</tr>";
            $nomor++;
         }
            

        ?>
    </tbody>
</table>

