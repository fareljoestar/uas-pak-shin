<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="logo_smexa.png" alt="Logo SMEXA" width="60px">
      <a class="navbar-brand" href="index.html">SMK NEGERI 1 PROBOLINGGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data.php">Data</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="container mt-5 pt-5">
  <div class="card mx-auto" style="width: 50%;">
    <h5 class="card-header">Input Data</h5>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-9">
          <form action="" method="post">
            <div class="mb-3">
              <label for="namaLengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan Nama Lengkap" name="nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
            </div>
            <div class="mb-3">
              <label for="umur" class="form-label">Umur</label>
              <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur"name="umur">
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
            </div>
            <div class="mb-3">
              <label for="instagram" class="form-label">Sosial Media Instagram</label>
              <input type="text" class="form-control" id="instagram" placeholder="Masukkan Akun Instagram" name="sosmed">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Tinggal</label>
              <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat Tinggal" name="alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
          
          include ('Koneksi.php');

          if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $umur = $_POST['umur'];
            $jurusan = $_POST['jurusan'];
            $sosmed = $_POST['sosmed'];
            $alamat = $_POST['alamat'];

            $sql = "INSERT INTO tbsiswa (nama,email,umur,jurusan,sosmed,alamat) VALUES ('$nama', '$email', '$umur', '$jurusan', '$sosmed', '$alamat')";
            $query = mysqli_query($Koneksi,$sql);  
            }
          ?>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
