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
$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

// Menyimpan data resep ke database beserta gambar dalam bentuk base64
$sql = "INSERT INTO artikel (judul, isi) VALUES ('$judul', '$isi')";

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'alert("Artikel berhasil diunggah!");';
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
