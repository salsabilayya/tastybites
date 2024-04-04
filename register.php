<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
</head>
<body>
    <!-- START NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F1D5DB;">
    <div class="container">
        <a class="navbar-brand" href="#home"><img src="img/Tasty-Text.png" height="60" alt="Tasty Bites"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php/#home">Beranda</a>
            <a class="nav-link" href="#tentang">Tentang</a>
            <a class="nav-link" href="#resep">Resep</a>
            <a class="nav-link" href="login.php">Masuk</a>
        </div>
        </div>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </nav>
<!-- END NAVBAR -->

<!-- START FORM -->
    <form action="proses_register.php" method="post">
        <header>Daftar</header>
        <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="usernameHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Konfirmasi Kata Sandi</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
        <br>
        <span>Sudah punya akun? <a href="login.php" onclick="login()">Masuk</a></span>
    </div>
    <button type="submit" class="btn btn-dk" style="background-color: #C15B75;" name="submit">Daftar</button>
    </form>
<!-- END FORM -->

<!-- START FOOTER -->
<footer style="background-color: #F1D5DB;" class="text-white text-center pt-2 pb-2" >
    <p>Created with <i class="bi bi-heart-fill"></i> by <a href="https://www.instagram.com/abilaayya" class="text-white fw-bold">Tsurayya Salsabila</a></p>
  </footer>
<!-- END FOOTER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>