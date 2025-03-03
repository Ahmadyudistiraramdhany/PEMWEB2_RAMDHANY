<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Input Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Input Nilai</h2>
        <form method="POST" action="tugas_output.php"> 
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap :</label> 
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah :</label> 
                <div class="col-8">
                    <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required>
                        <option value="">Pilih Mata Kuliah</option>
                        <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS :</label> 
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS :</label> 
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum :</label> 
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
