<?php
if (isset($_POST['nama']) || isset($_POST['prodi']) || isset($_POST['alamat']) || isset($_POST['nim']) || isset($_POST['angkatan']) || isset($_POST['email']) || isset($_POST['nomer']) || isset($_POST['gender'])) {
    $lp = $_POST['gender'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $angkatan = $_POST['angkatan'];
    $email = $_POST['email'];
    $nomer = $_POST['nomer'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="dist/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <!-- left column -->
        <div class="card">
            <!-- general form elements -->
            <div class="card-body login-card-body">
                <div class="card-header">
                    <h3 class="login-box-msg"> Bio Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" value="<?= $nama ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">NIM</label>
                            <input type="text" class="form-control" value="<?= $nim ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">PROGRAM STUDI</label>
                            <input type="text" class="form-control" value="<?= $prodi ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Angkatan</label>
                            <input type="text" class="form-control" required="" Readonly value="<?= $angkatan ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <input type="text" class="form-control" value="<?= $lp ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" value="<?= $email ?>" readonly>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="text" class="form-control" value="<?= $alamat ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">No. Handphone</label>
                            <input type="text" class="form-control" value="<?= $nomer ?>" readonly>
                        </div>
                        <div class="row">
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="index.php" class="nav-link">Kembali</a>
                            </li>
                        </div>
                </form>
            </div>



            <script src="plugins/js/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="plugins/js/adminlte.min.js"></script>
</body>

</html>