<?php
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "tastybites";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Memproses data yang diunggah
// $id_komentar = $_POST['id_komentar'];
$komentar = $_POST['komentar'];


// Menyimpan data resep ke database beserta gambar dalam bentuk base64
$sql = "INSERT INTO komentar (komentar) VALUES ('$komentar')";

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'alert("Komentar berhasil diunggah!");';
    echo 'window.location.href = "user.php";'; // Mengarahkan ke halaman user.php
    echo '</script>';
} else {
    echo '<script>';
    echo 'alert("Error: ' . $sql . '\\n' . $conn->error . '");'; // Menampilkan pesan error dalam alert
    echo 'window.location.href = "user.php";'; // Mengarahkan ke halaman user.php
    echo '</script>';
}

// Menutup koneksi
$conn->close();
?>
