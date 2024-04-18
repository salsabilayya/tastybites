<?php
// Include file konfigurasi database
include 'config.php';

// Cek apakah parameter id_resep sudah diterima melalui URL
if(isset($_GET['id_resep'])) {
    // Ambil id_resep dari URL
    $id_resep = $_GET['id_resep'];

    // Query untuk mengambil informasi resep dari database berdasarkan id_resep
    $query = "SELECT * FROM resep WHERE id_resep = $id_resep";
    $result = mysqli_query($conn, $query);

    // Periksa apakah hasil query tidak kosong
    if (mysqli_num_rows($result) > 0) {
        // Ambil data resep
        $row = mysqli_fetch_assoc($result);
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
        $bahan = $row['bahan'];
        $instruksi = $row['instruksi'];
        $gambar = $row['gambar'];

        // Tampilkan halaman detail resep
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* CSS styling */
    </style>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-dark" style="background-color: #C15B75;">
  <div class="container1">
  <a href="javascript:history.back()" class="btn btn-dark" style="background-color: #C15B75;">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
    </svg>
    </a>
    <a class="navbar-brand" href="#">
      <img src="img/Tasty_Bites.png" alt="Tasty Bites" width="60">
      <strong>Detail Resep</strong>
    </a>
  </div>
</nav>
<!-- end navbar -->
    <div class="container mt-5">
        
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <!-- Tampilkan gambar resep -->
                <img src="data:image/jpeg;base64,<?php echo base64_encode($gambar); ?>" class="img-fluid" alt="Gambar Resep">
                <h2 class="mt-4"><?php echo $judul; ?></h2>
                <p><?php echo $deskripsi; ?></p>
                <h3>Bahan-bahan:</h3>
                <p><?php echo $bahan; ?></p>
                <h3>Instruksi:</h3>
                <p><?php echo $instruksi; ?></p>

            <?php
                //Form untuk menambahkan komentar
            echo '<div class="card mb-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Tambahkan Komentar</h5>';
            echo '<form action="tambah_komentar.php" method="post">';
            echo '<input type="hidden" name="id_resep" value="' . $id_resep . '">';
            echo '<div class="form-group">';
            echo '<label for="komentar">Komentar:</label>';
            echo '<textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>';
            echo '</div>';
            echo '<button type="submit" class="btn btn-dark" style="background-color: #C15B75;">Kirim Komentar</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    } else {
        // Jika resep tidak ditemukan dalam database
        echo "Resep tidak ditemukan.";
    }
} else {
    // Jika parameter id_resep tidak diterima melalui URL
    echo "ID resep tidak ditemukan.";
}
?>
