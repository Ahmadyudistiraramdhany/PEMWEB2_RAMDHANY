<?php
require_once 'koneksi.php';

// 4.definisi query
$sql = "SELECT * FROM prodi";

// 5.eksekusi query
$rs = $dbh->query($sql);
?>

<table border="1" width="100%">
<tr>
    <th>nomer</th>
    <th>kode</th>
    <th>nama prodi</th>
    <th>kepala prodi</th>
    <th>aksi</th> 
</tr>

<?php
$nomor = 1;
foreach($rs as $row){
    ?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $row->kode; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->kaprodi; ?></td>
        <td>
            <a href="form_prodi.php?id=<?php echo $row-> id; ?>">Edit </a> 
            <a href="proses_prodi.php?Hapus=1&id=<?php echo $row->id;?>"onclick ="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php
           
            
}


?>
</table>
