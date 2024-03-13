<?php
require "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9294f4e16e.js" crossorigin="anonymous"></script>
</head>
<body class="bg-warning">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid p-3">
    <a class="navbar-brand text-primary fs-2 fw-bold" href="#">Toko Buku</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active text-primary fw-medium" href="index.php">Home</a>
            <a class="nav-link text-primary fw-medium" href="admin.php">Admin</a>
            <a class="nav-link text-primary fw-medium" href="#data-guru">Pengadaan</a>
          </div>
          <!-- <div class="navbar-nav ms-auto">
            <a class="nav-link" href="login.html">Login Sebagai Admin</a>
          </div> -->
        </div>
  </div>
</nav>
<!-- TABLES -->
<div class="container-fluid">
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $buku = mysqli_query( $connect, "SELECT penerbit.nama_penerbit, buku.* FROM buku
    INNER JOIN penerbit ON buku.penerbit_id = penerbit.id WHERE penerbit_id = penerbit.id");
    $id = 1;
    foreach ($buku as $bk) {
    ?>
    <tr>
      <th scope="row"><?= $id++ ?></th>
      <td><?= $bk["kode"] ?></td>
      <td><?= $bk["nama_buku"] ?></td>
      <td><?= $bk["kategori"] ?></td>
      <td><?= $bk["nama_penerbit"] ?></td>
      <td>
        <a href="show.php?id=<?= $bk["id"] ?>" style="text-decoration: none;">
        <button class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Lihat">
            <i class="fa fa-eye"></i>
        </button>
        </a>
        <a href="edit.php?id=<?= $bk["id"] ?>" style="text-decoration: none;">
        <button class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
            <i class="fa fa-pencil"></i>
        </button>
        </a>
        <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hapus">
            <i class="fa fa-trash"></i>
        </button>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</body>
</html>