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

        $id_member = $_GET['id_member'];
        $sql = $connect->query("SELECT *FROM tbl_data_member where id_member ='$id_member' ");
        $data = mysqli_fetch_assoc($sql);
        ?>
        <div class="container">
            <h1>Data Mahasiswa</h1>
            <h5>Form Update Data Mahasiswa</h5>
            <hr>
            <form method="post" id="formEdit" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="idm" id="" value="<?php echo $data['id_member'] ?>" hidden required>
                    <label for="">NAMA :</label>
                    <input type="text" class="form-control" name="nama" required value="<?php echo $data['nama_lengkap'] ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">ALAMAT :</label>
                            <input type="text" class="form-control" name="alamat" required value="<?php echo $data['alamat'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">NO. TELEPON :</label>
                            <input type="text" name="no" class="form-control" required value="<?php echo $data['no_telepon'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">JURUSAN</label>
                            <select name="jurusan" class="form-control custom-select" required>
                                <option value="<?php echo $data['jurusan']?>"><?php echo $data['jurusan']?></option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Elektronika">Teknik Elektronika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Manajerial">Teknik Manajerial</option>
                            </select>
                        </div>
                    </div>
                </div>  
                <button type="submit" class="btn btn-primary">Submit </button>
                <button type="reset" class="btn btn-danger">Reset </button>
            </form>
        </div>
    </body>
</html>