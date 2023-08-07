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
            <form method="post" name="frm" action="admin-simpan-pegawai.php">
                <table border=" 2" class="table table-striped">

                    <th colspan="2" style="text-align: center;">
                        <h4>Tambah Data Pegawai</h4>
                    </th>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" size="50" maxlength="20" class="input-field" required> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" size="50" maxlength="20" class="input-field" required> </td>
                    </tr>
                    <tr>
                        <td>Nama Pegawai</td>
                        <td><input type="text" name="nama" size="50" maxlength="20" class="input-field" required> </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" size="50" maxlength="30" required class="input-field"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" name="TblSimpan" value="Simpan" class="btn btn-success"></td>
                    </tr>
                </table>
            </form>
        </div>

        <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">kembali</button></a><br>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>