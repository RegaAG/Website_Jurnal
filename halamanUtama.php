<?php

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>Perpustakaan</title>
</head>

<body id="home">
<div class="p-3 mb-2 bg-dark text-white">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Perpustakaan Gaskuy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#card">Personil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jurnal.php">Perpustakaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron  text-center" style="height: 100vh;">
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6g5gqfnp8QEXeVd9cxC9nTNL85wQcFXCz5w&usqp=CAU" alt="Logo" width="200px" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">PERPUSTAKAAN DIGITAL</h1>
      <p class="lead">GASKUY COMPANY</p>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about" style="height: 100vh;">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2 class="m-5">About This Web</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5 text-center mx-auto">
      <div class="col-md-4 mx-5">
        <p>Perpustakaan digital merupakan solusi yang tepat bagi mereka yang ingin mengakses banyak sumber informasi tanpa harus mengeluarkan banyak uang untuk membeli buku. Perpustakaan digital kami menyediakan akses ke ribuan buku elektronik yang dapat dibaca secara online, tanpa harus keluar rumah! Selain itu, perpustakaan digital kami juga menawarkan pengalaman membaca yang luar biasa, dengan ribuan buku elektronik yang tersedia untuk dipinjam atau dibaca secara gratis.</p>
      </div>
      <div class="col-md-4 mx-5">
        <p> Kami merupakan sumber pengetahuan yang luar biasa, dengan beragam buku elektronik yang dapat Anda akses secara online kapan saja dan di mana saja. Ayo bergabung dengan kami sekarang dan nikmati akses ke ribuan sumber informasi yang berguna, termasuk buku elektronik, jurnal, dan lainnya.</p>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About -->

<!-- Card -->
<section id="card" style="height: 100vh;">
  <div class="container">
    <h2 class="mb-5">PERSONIL GASKUY</h2>
    <div class="row gx-3 gy-3 text-center">
      <div class="col-md-5" style="max-width: 250px;">
        <div class="card text-dark">
          <img src="foto/rega.jpeg" class="card-img-top" alt="rega" height="230px">
          <div class="card-body">
            <h5 class="card-title">REGA ANTON GIAPIERRO</h5>
            <p class="card-text">Jika orang lain bisa, maka aku juga bisa.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="max-width: 250px;">
        <div class="card text-dark">
          <img src="foto/rohmad.jpg" class="card-img-top" alt="rega" height="230px">
          <div class="card-body">
            <h5 class="card-title">Rohmad Al Ghifari Wijanarko</h5>
            <p class="card-text">Jadilah orang ganteng, maka hidupmu akan nyaman</p>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="max-width: 250px;">
        <div class="card text-dark">
          <img src="foto/eca.jpeg" class="card-img-top" alt="rega" height="230px">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="max-width: 250px;">
        <div class="card text-dark">
          <img src="foto/ali.jpg" class="card-img-top" alt="rega" height="230px">
          <div class="card-body">
            <h5 class="card-title">Ali ma'ruf Iskandar</h5>
            <p class="card-text">berjuanglah semampu kita dan berjuanglah untuk diri sendiri kelak diri kita akan sangat bangga apa yang kita perjuangan hari ini</p>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="max-width: 250px;">
        <div class="card text-dark">
          <img src="foto/eca.jpeg" class="card-img-top" alt="rega" height="230px">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Akhir Card -->

  <!-- Contact -->
  <section id="contact" style="height: 100vh;">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form  action="" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="name" class="form-control" id="name" name="NamaLengkap" aria-describedby="name" />
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="Email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" name="Pesan" rows="6"></textarea>
              </div>
              <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>
    </div>
<?php
if(isset($_POST['kirim'])) {
    pesan($conn, $_POST['NamaLengkap'], $_POST['Email'], $_POST['Pesan']);
}
?>
  </section>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="text-white text-center pb-5">
    <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/rega.ag/"
        class="text-white fw-bold">Rega Anton Giapierro</a></p>
  </footer>
  <!-- Akhir Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</div>
</body>

</html>