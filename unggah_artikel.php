<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="unggah.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="background-color:#F1D5DB">

<!-- navbar -->
<nav class="navbar navbar-dark" style="background-color: #C15B75;">
  <div class="container1">
  <a href="javascript:history.back()" class="btn btn-dark" style="background-color: #C15B75;">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
    </svg>
    </a>
    <a class="navbar-brand" href="#">
      <img src="img/Tasty_Bites.png" alt="Tasty Bites" width="60">
      <strong>Berbagi ilmu itu indah. Unggah artikelmu sekarang!</strong>
    </a>
  </div>
</nav>
<!-- end navbar -->

<!-- konten -->
    <div class="container">
        
        <form action="upload_artikel.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul Artikel:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Artikel:</label>
                <textarea class="form-control" id="isi" name="isi" rows="3" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-dark" style="background-color: #C15B75;">Upload Artikel</button>
        </form>
    </div>
<!-- end konten -->

</body>
</html>
