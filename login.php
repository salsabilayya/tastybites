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
        header("Location: user.php");
    } else {
        // Jika kredensial tidak valid, tampilkan pesan kesalahan
        echo "<script>alert('Email atau password salah.')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link css -->
    <link rel="stylesheet" href="login.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

</head>
<body>
<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F1D5DB;">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="img/Tasty-Text.png" height="60" alt="Tasty Bites"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
        <a class="nav-link" href="login.php">Masuk</a>
      </div>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->

<!-- START FORM -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="row g-3">
  <header class="col-12 text-center">Masuk</header>
  <div class="col-md-6">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="usernameHelp" required>
  </div>
  <div class="col-md-6">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
    </div>
  </div>
  <div class="col-12">
    <span>Belum punya akun? <a href="register.php" onclick="register()">Buat akun</a></span>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-dk" style="background-color: #C15B75;">Masuk</button>
  </div>
</form>
<!-- END FORM -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>