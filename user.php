<?php

session_start();

// if (!isset($_SESSION['username'])){
//     header("Location: login.php");
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="home">
    <!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F1D5DB;">
  <div class="container">
    <a class="navbar-brand" href="#home"><img src="img/Tasty-Text.png" height="60" alt="Tasty Bites"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
        <a class="nav-link" href="unggah.php">Upload</a>
        <a class="nav-link" href="artikel.php">Artikel</a>
        <a class="nav-link" href="unggah_artikel.php">Upload Artikel</a>
        <a class="nav-link" href="logout.php">Logout</a>
      </div>
    </div>
    <form action="search.php" method="GET" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- END NAVBAR -->

<div class="container" style="padding-top: 130px;">
      <div class="row text-center">
        <div class="col">
          <h2>Resep</h2>
        </div>
      </div>
      <div class="row mt-4">
        <!-- Kode PHP untuk menampilkan resep dari database -->
        <?php
        include 'config.php'; // Sudah ada include config.php sebelumnya

        $query = "SELECT id_resep, judul, deskripsi, bahan, instruksi, gambar FROM resep";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-3 mb-3">';
                echo '<div class="card">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row["gambar"]) . '" class="card-img-top"/>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["judul"] . '</h5>';
                echo '<p class="card-text">' . $row["deskripsi"] . '</p>';
                echo '</div>';
                echo '<div class="d-none deskripsi"><p>' . $row["deskripsi"] . '</p></div>';
                echo '<div class="card-footer d-md-flex">';
                echo '<a href="detail.php?id_resep=' . $row['id_resep'] . '" class="btn btn-sm btn-dark d-block btnDetail" style="background-color: #C15B75;">Detail</a>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Resep tidak ditemukan";
        }
        ?>
      </div>
    </div>
  <div class="container">
  <?php
include 'config.php'; // Sudah ada include config.php sebelumnya

if (isset($_GET['id_resep'])) {
    $id_resep = $_GET['id_resep'];

    $query = "SELECT * FROM resep WHERE id_resep = $id_resep";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo '<div class="card mb-3">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row["gambar"]) . '" class="card-img-top" alt="Gambar Resep">'; // Menyesuaikan dengan kolom gambar pada tabel database
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['judul'] . '</h5>';
            echo '<p class="card-text">' . $row['deskripsi'] . '</p>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Resep tidak ditemukan.";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // Jika id_resep tidak ditemukan dalam URL, maka tampilkan pesan bahwa resep tidak ditemukan
    // echo '<div class="card mb-3">';
    // echo '<div class="card-body">';
    // echo '<h5 class="card-title">Resep tidak ditemukan.</h5>';
    // echo '</div>';
    // echo '</div>';
}
?>
    </div>

<!-- END RESEP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
