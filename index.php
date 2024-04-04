<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Bites</title>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body id="home">
<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F1D5DB;">
  <div class="container">
    <a class="navbar-brand" href="#home"><img src="img/Tasty-Text.png" height="60" alt="Tasty Bites"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
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

<!-- JUMBOTRON HOME -->
<section class="jumbotron">
  <img src="img/Tasty_Bites.png" alt="Tasty Bites" width="250" style="float:left;">
  <div style="overflow: hidden;">
    <h1>Tasty Bites</h1>
    <p class="lead">From Kitchen to Heart: Tasty Bites, Memorable Delights!</p>
    <hr class="my-4" style="border-color: white;">
    <p>Bringing deliciousness straight from the kitchen to your heart, Tasty Bites presents unforgettable, palate-pleasing dishes. Enjoy every bite filled with memories in every served dish.</p>
    <a class="btn btn-dark btn-lg" style="background-color: #C15B75;" href="login.php" role="button">Mulai Sekarang</a>
  </div>
</section>
<!-- END JUMBOTRON -->

<!-- TENTANG -->
<section id="tentang">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Tentang Tasty Bites</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4">
          <p>Hi! Namaku Tsurayya Salsabila. Lebih akrab dipanggil Ayya. Aku punya ketertarikan pada dunia desain/editing.</p>
        </div>
        <div class="col-md-4">
          <p>Aku pernah menjadi admin editing untuk instagram kelas. Jadi kerjaanku adalah buat konten untuk feeds instagram, dan juga konten instastory.</p>
        </div>
      </div>
    </div>
  </section>
<!-- END TENTANG -->

<!-- RESEP -->
<section id="resep">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Resep</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/rica.jpeg" class="card-img-top" alt="Ayam rica-rica">
            <div class="card-body">
              <h5 class="card-title">Ayam Rica-Rica</h5>
              <h6 class="card-subtitle mb-2 text-muted">Manado</h6>
              <p class="card-text">Hai, siapa nih yang suka banget sama ayam rica-rica? ...</p>
              <a href="#" class="btn btn-dark" style="background-color: #C15B75;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/rendang.jpeg" class="card-img-top" width="469" height="260" alt="Rendang">
            <div class="card-body">
              <h5 class="card-title">Rendang</h5>
              <h6 class="card-subtitle mb-2 text-muted">Sumatera Barat</h6>
              <p class="card-text">Siapa sih yang belum tau sama makanan terkenal yang satu ini? ...</p>
              <a href="#" class="btn btn-dark" style="background-color: #C15B75;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/semur.jpeg" class="card-img-top" alt="Semur daging">
            <div class="card-body">
              <h5 class="card-title">Semur Daging</h5>
              <h6 class="card-subtitle mb-2 text-muted">Betawi</h6>
              <p class="card-text">Daripada bosan dengan menu daging yang diolah itu-itu saja, kita buat semur yuk! ...</p>
              <a href="#" class="btn btn-dark" style="background-color: #C15B75;">Baca Selengkapnya</a>
            </div>
          </div>
        </div>  
        </div>
      </div>
      <div class="row">
        <div class="col text-center pt-2">
        <a href="login.php" class="btn btn-dark" style="background-color: #C15B75;">Temukan lebih banyak resep disini!</a> 
        </div>
        </div>
    </div>
  </section>
<!-- END RESEP -->

<!-- START FOOTER -->
<footer style="background-color: #F1D5DB;" class="text-white text-center pb-2" >
    <p>Created with <i class="bi bi-heart-fill"></i> by <a href="https://www.instagram.com/abilaayya" class="text-white fw-bold">Tsurayya Salsabila</a></p>
  </footer>
<!-- END FOOTER -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>