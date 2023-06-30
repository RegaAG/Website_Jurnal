<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","perpustakaan");


// menampilkan data dari database
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


// menambahkan data buku
function tambahJurnal($conn, $judul_jurnal, $nama_pembuat, $tahun_terbit, $link_jurnal) {
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO buku set
    judul_jurnal = '$judul_jurnal',
    nama_pembuat = '$nama_pembuat',
    tahun_terbit = '$tahun_terbit',
    link_jurnal = '$link_jurnal'");

    if (!$query) {
        die(mysqli_error($conn));
    } else {
        echo "<script>
            alert('Jurnal Berhasil Ditambahkan');
            document.location.href = 'jurnal.php';
        </script>";
    }
}

//Cari Jurnal




// login
function login($conn, $username, $password) {
    global $conn;
    // cek ke database apakah username dan password tersebut sesuai dengan yang disimpan
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      // jika sesuai, redirect ke halaman dashboard
    header("Location: halamanUtama.php");
    } else {
      // jika tidak sesuai, tampilkan pesan error
        echo "<script>
            alert('Username atau Password Salah');
            document.location.href = 'index.php';
        </script>";
    }
}

// buat akun
function buatAkun($conn, $username, $password) {
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO login set
    username = '$username',
    password = '$password'");

    if (!$query) {
        die(mysqli_error($conn));
    } else {
        echo "<script>
            alert('Berhasil Membuat Akun');
            document.location.href = 'index.php';
        </script>";
    }
}

// pesan
function pesan($conn, $NamaLengkap, $Email, $Pesan) {
    global $conn;
    $query = mysqli_query($conn, "INSERT INTO pesan set
    NamaLengkap = '$NamaLengkap',
    Email = '$Email',
    Pesan = '$Pesan'");

    if (!$query) {
        die(mysqli_error($conn));
    } else {
        echo "<script>
            alert('Pesan telah dikirim');
            document.location.href = 'halamanUtama.php';
        </script>";
    }
}
?>