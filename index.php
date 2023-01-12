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

<body class="hold-transition login-page">

  <div class="login-box">
    <!-- left column -->
    <div class="card">
      <!-- general form elements -->
      <div class="card-body login-card-body">
        <div class="card-header">
          <h3 class="login-box-msg">Tambah Bio Data Mahasiswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="index2.php">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" required="" name="nama">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">NIM</label>
              <input type="text" class="form-control" required="" placeholder="Nomor Induk Mahasiswa" max="11" min="9" name="nim">
            </div>

            <div class="form-group">
              <label>PROGRAM STUDI</label>
              <form>
                <select class="form-control select2" style="width: 100%;" name="prodi" required="">
                  <option value="">-Pilih-Prodi-</option>


                  <option value='TEKNOLOGI KOMPUTER'>TEKNOLOGI KOMPUTER</option>
                  <option value='AKUNTANSI'>AKUNTANSI</option>
                  <option value='PERHOTELAN'>PERHOTELAN</option>
                  <option value='ADMINISTRASI BISNIS'>ADMINISTRASI BISNIS</option>
                  <option value='PENGELOLAHAN HOTEL'>PENGELOLAHAN HOTEL</option>

                </select>
              </form>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Angkatan</label>
              <input type="text" class="form-control" required="" placeholder="Tahun" max="4" min="4" name="angkatan">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input2" type="radio" value="LAKI - LAKI" name="gender" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  LAKI - LAKI
                </label>
                <br>
                <input class="form-check-input2" type="radio" value="PEREMPUAN" name="gender" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  PEREMPUAN
                </label>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" class="form-control" required="" placeholder="example@gmail.com" name="email">
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Alamat</label>
              <input type="text" class="form-control" required="" placeholder="Jl. xxxx" name="alamat">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">No. HandPhone</label>
              <input type="text" class="form-control" required="" placeholder="xxx xxx xxx xxx" min="10" max="15" name="nomer">
            </div>


            <div class="row">

              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Simpan</button>
              </div>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="login.php" class="nav-link">Kembali</a>
              </li>
              <!-- /.col -->
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