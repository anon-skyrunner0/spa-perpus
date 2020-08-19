<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php

include "core/connection.php";
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($connect, "SELECT max(id_member) as kodeTerbesar FROM tbl_data_member");
	$data = mysqli_fetch_array($query);
	$kodeMember = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeMember, 6, 6);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "LM";
	$idFinal = $huruf . sprintf("%06s", $urutan);
?>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <h5>Form Input Data Mahasiswa</h5>
        <hr>
        <form method="POST" id="formAdd" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="">ID MEMBER :</label>
                        <input type="text" class="form-control" name="idm" id="" value="<?php echo $idFinal ?>" required>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="">NAMA :</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">ALAMAT :</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">NO. TELEPON :</label>
                        <input type="text" name="no" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">JURUSAN</label>
                        <select name="jurusan" class="form-control custom-select" required>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Elektronika">Teknik Elektronika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Manajerial">Teknik Manajerial</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">SCAN ID</label>
                        <input type="file" name="dokumen" class="form-control">
                    </div>
                </div>
            </div>  
            <button type="submit" class="btn btn-primary">Submit </button>
            <button type="reset" class="btn btn-danger">Reset </button>
        </form>
        </div>
</body>
</html>