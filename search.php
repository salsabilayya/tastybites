<?php
include 'config.php'; // Sudah ada include config.php sebelumnya

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Query untuk mencari resep berdasarkan judul
    $search_query = "SELECT id_resep, judul, deskripsi, bahan, instruksi, gambar FROM resep WHERE judul LIKE '%$query%'";
    $search_result = mysqli_query($conn, $search_query);

    if (mysqli_num_rows($search_result) > 0) {
        // Tampilkan hasil pencarian
        while ($row = mysqli_fetch_assoc($search_result)) {
            // Tampilkan resep sesuai dengan format yang diinginkan
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
} else {
    // Tampilkan semua resep jika tidak ada query pencarian
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
}
?>
