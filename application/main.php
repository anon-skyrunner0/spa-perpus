<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Librarian | SPA Services</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/datables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/datables/jquery.dataTables.min.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/datables/jquery.dataTables.min.js"></script>
    <script src="../assets/datables/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myTable").DataTable({
                "lengthMenu": [10, 20, 30, 40, 50],
                "pageLength": 5
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Data Member</h1>
        <p>List Data Member e-Librarian</p>
        <p><button id="addButton" class="btn btn-primary">+ Tambah Data</button></p>
        <div class="table-responsive">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>ID Member</th>
                        <th>Nama Member</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "core/connection.php";

                    $sql = $connect->query("SELECT * FROM tbl_data_member");

                    while($data = mysqli_fetch_assoc($sql)){
                        echo '<tr>';
                        echo '<td>'.$data['id_member'].'</td>';
                        echo '<td>'.$data['nama_lengkap'].'</td>';
                        echo '<td>'.$data['jurusan'].'</td>';
                        echo '<td>'.$data['alamat'].'</td>';
                        echo '<td>'.$data['no_telepon'].'</td>';
                        echo '<td>';
                        echo '<button id="editButton" class="btn btn-success btn-sm" value="'.$data['id_member'].'"><i class="fa fa-pencil"></i> Edit</button>
                              <button id="DeleteButton" class="btn btn-danger btn-sm" value="'.$data['id_member'].'"><i class="fa fa-trash"></i> Delete</button>';
                        echo '</td>'; echo '</tr>';
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>