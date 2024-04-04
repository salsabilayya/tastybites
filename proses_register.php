<?php
    // Ambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    // Koneksi ke database (sesuaikan dengan informasi koneksi Anda)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "tastybites";

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    // Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah kedua password sesuai
if ($password !== $password2) {
    echo "<script>alert('Konfirmasi kata sandi tidak sesuai.')</script>";
    exit; // Hentikan eksekusi jika password tidak sesuai
}

// // Hash password sebelum disimpan ke database
// $hashed_password = md5($password);

// Query untuk menyimpan data registrasi ke dalam database
$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrasi berhasil! Silakan login.')</script>";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
