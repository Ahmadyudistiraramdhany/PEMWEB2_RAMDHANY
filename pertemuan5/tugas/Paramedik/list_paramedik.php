<?php
require_once '../dbkoneksi.php';

// 4.definisi query
$sql = "SELECT * FROM paramedik";

// 5.eksekusi query
$rs = $dbh->query($sql);
?>

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
