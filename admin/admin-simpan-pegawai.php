<?php
session_start();
include_once("../function/functions.php");

if (!isset($_SESSION["id"])) {
    header("Location: ../auth/index-login.php?error=4");
}
if (getRole($_SESSION["id"]) != "super admin") {
    header("Location: ../auth/index-login.php?error=4");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop | Home</title>

    <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 fixed-top" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Barbershop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link" href="#">| </a>
                    <a class="nav-link " href="admin-home.php">Home</a>
                    <a class="nav-link active " href="admin-kelola-pegawai.php">Kelola Pegawai</a>
                    <a class="nav-link" href="admin-profil.php">Profile</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link " href="../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="content" style="margin-top: 100px; margin-left: 30px; margin-right: 30px;">


        <div class="" style="margin-left: 400px; margin-right: 400px;">
            <h2>Penyimpanan Data pegawai</h1>
                <?php
                if (isset($_POST["TblSimpan"])) {
                    $db = dbConnect();
                    if ($db->connect_errno == 0) {
                        // Bersihkan data
                        $username = $db->escape_string($_POST["username"]);
                        $password =  $db->escape_string($_POST["password"]);
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $role = "pegawai";
                        $nama = $db->escape_string($_POST["nama"]);
                        $alamat = $db->escape_string($_POST["alamat"]);
                        // Susun query insert
                        $sql = "INSERT INTO user (username, password,rolee,nama,alamat)
				VALUES('$username', '$hashed_password','$role','$nama','$alamat')";
                        // Eksekusi query insert
                        $res = $db->query($sql);
                        if ($res) {
                            if ($db->affected_rows > 0) { // jika ada penambahan data
                ?>
                                Data berhasil disimpan.<br>
                            <?php
                            }
                        } else {
                            ?>
                            Data gagal disimpan karena NoSewa/Data mungkin sudah ada.<br>
                <?php
                        }
                    } else
                        echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
                }
                ?>
        </div>

        <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">kembali</button></a><br>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>