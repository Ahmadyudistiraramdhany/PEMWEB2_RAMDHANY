<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_kelurahan.php">
    <input type="text" name="nama" placeholder="Nama Kelurahan" required>
    <input type="hidden" name="id_edit" value="<?= $data['id_kelurahan'] ?? '' ?>">
    <button type="submit" name="proses" value="simpan">Simpan</button>
    <button type="submit" name="proses" value="Update">Update</button>
</form>
