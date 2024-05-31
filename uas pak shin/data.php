<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-responsive {
            overflow-x: auto;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="logo_smexa.png" alt="Logo" width="60">
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

<?php
include('Koneksi.php'); // Pastikan ini adalah path yang benar ke file koneksi Anda

$sql = "SELECT nama, email, umur, jurusan, sosmed, alamat FROM tbsiswa";
$result = $Koneksi->query($sql);
?>

<div class="container mt-5 pt-5">
  <div class="card mx-auto" style="width: 75%;">
    <h5 class="card-header">Data SMK NEGERI 1 KOTA PROBOLINGGO <a href="tambah.php" class="btn btn-primary">Tambah</a></h5>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Instagram</th>
                  <th scope="col">Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($result->num_rows > 0): ?>
                  <?php $no = 1; ?>
                  <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td><?= htmlspecialchars($row['nama']) ?></td>
                      <td><?= htmlspecialchars($row['email']) ?></td>
                      <td><?= htmlspecialchars($row['umur']) ?></td>
                      <td><?= htmlspecialchars($row['jurusan']) ?></td>
                      <td><?= htmlspecialchars($row['sosmed']) ?></td>
                      <td><?= htmlspecialchars($row['alamat']) ?></td>
                    </tr>
                  <?php endwhile; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="7">No data found</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
