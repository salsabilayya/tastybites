<?php
include 'config.php'; // Sudah ada include config.php sebelumnya

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Query untuk mencari artikel berdasarkan judul
    $search_query = "SELECT id_artikel, judul, isi FROM artikel WHERE judul LIKE '%$query%'";
    $search_result = mysqli_query($conn, $search_query);

    if (mysqli_num_rows($search_result) > 0) {
        // Tampilkan hasil pencarian
        while ($row = mysqli_fetch_assoc($search_result)) {
            // Tampilkan artikel sesuai dengan format yang diinginkan
            echo '<div class="col-md-3 mb-3">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["judul"] . '</h5>';
            echo '<p class="card-text">' . $row["isi"] . '</p>';
            echo '</div>';
            echo '<div class="card-footer d-md-flex">';
            echo '<a href="detail_artikel.php?id_artikel=' . $row['id_artikel'] . '" class="btn btn-sm btn-dark d-block btnDetail" style="background-color: #C15B75;">Detail</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "Artikel tidak ditemukan";
    }
} else {
    // Tampilkan semua artikel jika tidak ada query pencarian
    $query = "SELECT id_artikel, judul, isi FROM artikel";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-3 mb-3">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["judul"] . '</h5>';
            echo '<p class="card-text">' . $row["isi"] . '</p>';
            echo '</div>';
            echo '<div class="card-footer d-md-flex">';
            echo '<a href="detail_artikel.php?id_artikel=' . $row['id_artikel'] . '" class="btn btn-sm btn-dark d-block btnDetail" style="background-color: #C15B75;">Detail</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "Artikel tidak ditemukan";
    }
}
?>
