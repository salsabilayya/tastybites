<?php
// Lakukan koneksi ke database
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah kredensial ada di database
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Periksa apakah hasil query mengembalikan baris
    if (mysqli_num_rows($result) == 1) {
        // Jika kredensial valid, arahkan ke halaman user
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username']; // Simpan username dalam sesi
        header("Location: user.php");

    } else {
        // Jika kredensial tidak valid, tampilkan pesan kesalahan
        echo "<script>alert('Username atau password salah.')</script>";
    }
}
?>