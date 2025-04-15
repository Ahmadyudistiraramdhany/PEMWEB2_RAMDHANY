<?php
require_once 'koneksi.php';

// 4.definisi query
$sql = "SELECT * FROM mahasiswa order by thn_masuk desc";

// 5.eksekusi query
$rs = $dbh->query($sql);

//tampilkan hasil query
foreach($rs as $row){
    echo "<br>".$row->nim . '-'. $row->nama;
}
?>