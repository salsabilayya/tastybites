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
$id_resep = $_POST['id_resep'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$bahan = $_POST['bahan'];
$instruksi = $_POST['instruksi'];
$gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
$tmp_name = $_FILES['gambar']['tmp_name'];

// Menyimpan gambar ke folder upload
$upload_dir = "uploads/";
move_uploaded_file($tmp_name, $upload_dir . $gambar);

// // Membaca isi file gambar dan mengonversinya ke dalam base64
// $gambar_base64 = base64_encode(file_get_contents($upload_dir . $gambar));

// Menyimpan data resep ke database beserta gambar dalam bentuk base64
$sql = "INSERT INTO resep (judul, deskripsi, bahan, instruksi, gambar) VALUES ('$judul', '$deskripsi', '$bahan', '$instruksi', '$gambar')";

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'alert("Resep berhasil diunggah");';
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
