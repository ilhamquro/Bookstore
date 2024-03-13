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
<div class="container-fluid text-center" style=" height: 250px; padding-top: 80px;">
    <h1 class="fw-bold text-primary">UNIBOOKSTORE</h1>
    <p>Buka Jendela Duniamu Sekarang</p>
    <button type="button" class="btn btn-outline-primary mb-5">Ready to get started</button>
</div>
<div class="container-fluid">
    <h1 class="fw-bold my-5 text-primary">Buku</h1>
    <?php
    $buku = mysqli_query( $connect, "SELECT * FROM buku");
    ?>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach ($buku as $bk) {
    ?>
  <div class="col">
    <div class="card h-100">
      <div class="card-body bg-primary">
        <h5 class="card-title text-warning"><?= $bk["nama_buku"] ?></h5>
        <p class="card-text text-warning">Kategori Buku : <?= $bk["kategori"] ?><br>
         Kode Buku : <?= $bk["kode"] ?></p>
      </div>
      <div class="card-footer bg-danger">
        <small class="text-light">Harga <?= $bk["harga"] ?>, Sisa Stok <?= $bk["stok"] ?></small>
      </div>
    </div>
  </div>
  <?php
    }
  ?>

</div>
</div>
</body>