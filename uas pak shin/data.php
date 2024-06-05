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
<div class="container text-center" style="margin-top: 80px;"> <!-- Menambahkan margin top -->
    <div class="row align-items-center">
        <div class="col">
            <div class="card">
            <div class="card-header d-flex justify-content-start align-items-center">
    <div>Data Siswa SMK Negeri 1 Probolinggo</div>
    <a href="tambah.php" class="btn btn-primary ml-3">Tambah</a>
</div>

<main>
    

<?php
    include('Koneksi.php'); // Ensure the semicolon is present
    // Assuming you have a valid database connection in $db
    if (isset($_GET['delete_id'])) {
      $id = $_GET['delete_id'];
      $sql = "DELETE FROM tbsiswa WHERE id = ?";
      $stmt = $Koneksi->prepare($sql);
      $stmt->bind_param('i', $id);
  
      if ($stmt->execute()) {
          echo "<script>alert('Record deleted successfully');</script>";
      } else {
          echo "Error deleting record: " . $Koneksi->error;
      }
  
      $stmt->close();
  }
    $sql = "SELECT id, nama, email, umur, jurusan, sosmed, alamat FROM tbsiswa";
    $result = $Koneksi->query($sql);
    ?>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <table class="table table-striped mt-2 shadow-sm">
                         <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Operasi</th>
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
                                    <td>
                                        <a href="?delete_id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3">No data found</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                        </table>
                        </li>
                    </ul>                    
                </div>
                </div>
        
        </div>
    </div>
    </main>
   
   <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
