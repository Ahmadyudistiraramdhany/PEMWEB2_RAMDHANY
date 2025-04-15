<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_paramedik.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" placeholder ="L/P" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir"  type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" placeholder="YYYY-MM-DD" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Kategori</label> 
    <div class="col-8">
        <select value="" name="kategori" id="kategori" class="form-control" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="dokter">1. Dokter</option>
            <option value="perawat">2. Perawat</option>
            <option value="bidan">3. Bidan</option>
        </select>
</div>
  </div> 
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">Telepon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
        <input id="alamat" name="alamat" type="text" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="unitkerja_id" class="col-4 col-form-label">Unit Kerja</label>
    <div class="col-8">
        <select name="unitkerja_id" id="unitkerja_id" class="form-control" required>
            <option value="">-- Pilih Unit Kerja --</option>
            <option value="1">1. Unit Gawat Darurat</option>
            <option value="2">2. Unit Poli Umum</option>
            <option value="3">3. Unit Laboratorium</option>
        </select>
    </div>
</div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="simpan" class="btn btn-primary">
    </div>
  </div>
</form>