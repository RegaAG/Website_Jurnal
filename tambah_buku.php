<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Buku</title>
</head>
<body class="bg-warning">
<div class="h-100 container-fluid">
    <div class="w-100 container text-center">
        <h1>Tambah Buku</h1>
        <form action="" method="POST">
        <table class="table table-bordered border-warning">
            <tr>
                <td>Judul Jurnal</td>
                <td><textarea class="form-control" rows="3" cols="20" name="judul_jurnal" placeholder="Tuliskan Judul Jurnal di sini"></textarea></td>
            </tr>
            <tr>
                <td>Nama Pembuat</td>
                <td><textarea class="form-control" rows="2" cols="20" name="nama_pembuat" placeholder="Tuliskan Pembuat Jurnal di sini"></textarea></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><textarea class="form-control" rows="2" cols="20" name="tahun_terbit" placeholder="Tuliskan Tahun Terbit di sini"></textarea></td>
            </tr>
            <tr>
                <td>Link Jurnal</td>
                <td><textarea class="form-control" rows="4" cols="20" name="link_jurnal" placeholder="Tuliskan link di sini"></textarea></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit" value="Simpan" name="simpan">SIMPAN</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>

</body>
</html>

<?php
require 'functions.php';

if(isset($_POST['simpan'])) {
    tambahJurnal($conn, $_POST['judul_jurnal'], $_POST['nama_pembuat'], $_POST['tahun_terbit'], $_POST['link_jurnal']);
}

?>