<?php
require "config.php";
$id = $_GET["id"];
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


<?php
    $buku = mysqli_query( $connect, "SELECT * FROM buku WHERE id = $id");
    $no = 1;
    foreach ($buku as $bk) {
?>
    <p class="container-fluid"><?= $bk["nama_buku"] ?></p>
<?php
    }
?>
</body>
</html>