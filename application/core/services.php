<?php
//Adam Firdaus 4311901038
include "connection.php";

switch($_GET['action']){
    //save
    case 'save':
        
        $id_member = $_POST['idm'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $nomor = $_POST['no'];

        $rand = rand();
        $ekstensi = array('pdf','PDF','doc','docx');
        $filename = $_FILES['dokumen']['name'];
        $ukuran = $_FILES['dokumen']['size'];
        $ext = pathinfo($filename,PATHINFO_EXTENSION);

        if(!in_array($ext,$ekstensi)){
            header("location:index.html");
        }else{
            if($ukuran < 1044070){
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['dokumen']['tmp_name'], '../../resources/uploaded_files'.$rand.'_'.$filename);
            }
        }

        $sql = "INSERT INTO tbl_data_member (id_member,nama_lengkap,jurusan,alamat,no_telepon,scan_id)VALUES('$id_member','$nama','$jurusan','$alamat','$nomor','$xx');";
            
        $result = $connect->query($sql) or die("Galat Layanan");

        if($result){
            echo 'Member '. $id_member; echo ' berhasil didaftarkan';
        }else{
            echo 'Gagal menyimpan data : '. mysqli_error($connect);
        }
    break;

    //edit
    case 'edit':

        $id_member = $_POST['idm'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $nomor = $_POST['no'];

        $query = "UPDATE `tbl_data_member` SET 
        `nama_lengkap` = '$nama', `jurusan` = '$jurusan', `alamat` = '$alamat', `no_telepon` = '$nomor' 
        WHERE `tbl_data_member`.`id_member` = '$id_member';";

        $result = $connect->query($query) or die("Galat Layanan");

        if($result){
            echo "Data dengan ID Member : " . $id_member; echo " Berhasil diedit";
        }else{
            echo "Data Gagal Diedit :". mysqli_error($connect);
        }
    
    break;

    //delete
    case 'delete':

        $id_member = $_POST['id_member'];
        
        $sql = "DELETE FROM tbl_data_member WHERE id_member='$id_member';";

        $result = $connect->query($sql) or die ("Galat Layanan");

        if($result){
            echo "Data dengan ID Member ". $id_member; echo " berhasil dihapus";
        }else{
            echo "Gagal menghapus data :". mysqli_error($connect);
        }
    break;
}


?>