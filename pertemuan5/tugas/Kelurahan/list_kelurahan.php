<?php
require_once '../dbkoneksi.php';

// Ambil data dari tabel kelurahan
$sql = "SELECT * FROM kelurahan";
$rs = $dbh->query($sql);
?>

<table border="1" width="100%">
<tr>
    <th>Nomor</th>
    <th>Nama Kelurahan</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
foreach($rs as $row){
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row->nama_kelurahan; ?></td>
        <td>
            <a href="form_kelurahan.php?id=<?= $row->id; ?>">Edit</a> | 
            <a href="proses_kelurahan.php?Hapus=1&id=<?= $row->id; ?>"
               onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>
