<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");

// ambil nilai dari input pencarian
if (isset($_POST['cari'])) {
  $keyword = $_POST['keyword'];
} else {
  $keyword = "";
}

// query SELECT dengan filter pencarian
$buku = mysqli_query($conn, "SELECT * FROM buku WHERE judul_jurnal LIKE '%$keyword%' OR nama_pembuat LIKE '%$keyword%' OR tahun_terbit LIKE '%$keyword%' OR link_jurnal LIKE '%$keyword%'");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>JURNAL</title>
  </head>
  <body>
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
            <a class="nav-link active" aria-current="page" href="halamanUtama.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="halamanUtama.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jurnal.php">Perpustakaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="halamanUtama.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
    <!-- Table -->
<section id="perpustakaan" style="height: 100vh;">
    <div class="container">
      <h1 class="mt-5 text-center pt-5">All Jurnal</h1>
      <form action="" method="post">
        <label for="fname">Cari Jurnal:</label><br>
        <input type="text" id="cari" name="keyword" size="50" placeholder="masukan judul pencarian" autocomplete="off"><br>
        <input class="btn btn-primary mt-3" type="submit" name="cari" value="Submit">
      </form>
      <div class="table-responsive mt-3">
        <table class="table bg-secondary table-bordered border-dark">
          <tr class="bg-primary table-bordered">
            <th>No</th>
            <th>Judul Jurnal</th>
            <th>Nama Pembuat</th>
            <th >Tahun Terbit</th>
            <th>Link Jurnal</th>
          </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($buku)):?>
          <tr>
            <td><?= $i; ?></td>
            <td><?= $row["judul_jurnal"]; ?></td>
            <td><?= $row["nama_pembuat"]; ?></td>
            <td><?= $row["tahun_terbit"]; ?></td>
            <td><a href="<?= $row["link_jurnal"]; ?>">Klik Disini</a></td>
          </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
        </table>
      </div>
    </div>
    <!-- Tambah Buku -->
      <div class="container">
        <a class="btn btn-primary" href="tambah_buku.php" role="button">Tambah Jurnal</a>
      </div>
    <!-- Akhir Tambah Buku -->
  </section>
    <!-- Akhir Table -->
  </body>
</html>
