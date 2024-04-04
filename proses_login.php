<?php
// Lakukan koneksi ke database

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
        header("Location: user.php");
    } else {
        // Jika kredensial tidak valid, tampilkan pesan kesalahan
        echo "<script>alert('Username atau password salah.')</script>";
    }
}
?>