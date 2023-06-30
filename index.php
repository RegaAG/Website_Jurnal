<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container-fluid bg-info" style="height: 100vh; background-image: url('https://www.passgeeker.com/id/wp-content/uploads/2022/08/library-books-stacked-on-shelves.jpg');">
    <div class="container">
    <div id="card" class="card text-center text-dark border-dark mx-auto bg-secondary" style="width: 30rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="card-body">
                <h1 class="card-title">LOGIN</h1>
                <form action="" method="POST">
                    <p class="card-text"><div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                                        </div></p>
                    <p class="card-text"> <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        </div></p>
                    <p class="card-text"><button type="submit" name="submit" class="btn btn-success">Login</button></p>
                    <p class="card-text"><button type="submit" name="tambah" class="btn btn-success">Buat Akun</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
    require 'functions.php';

    if(isset($_POST['tambah'])) {
        echo "<script>
        document.location.href = 'buatAkun.php';
    </script>";
    }

    if(isset($_POST['submit'])) {
        login($conn, $_POST['username'], $_POST['password']);
    }
?>