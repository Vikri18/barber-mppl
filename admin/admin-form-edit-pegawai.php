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
                    <a class="nav-link active" href="admin-kelola-pegawai.php">Kelola Pegawai</a>
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
        <?php
        if (isset($_GET["id"])) {
            $db = dbConnect();
            $id = $db->escape_string($_GET["id"]);
            if ($dataPegawai = getDataPegawai($id)) { // cari data produk, kalau ada simpan di $dataPegawai
        ?>

                <div style="margin-left: 400px; margin-right: 400px;">

                    <form method="post" name="frm" action="admin-form-edit-pegawai.php">
                        <table border="1" class="table table-striped">
                            <th colspan="2" style="text-align: center;">
                                <h4>Edit Data Pegawai</h4>
                            </th>
                            <tr>
                                <td>id Pegawai</td>
                                <td><input type="text" name="id" size="50" maxlength="8" value="<?php echo $dataPegawai["id"]; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td>Nama Pegawai</td>
                                <td><input type="text" name="nama" size="50" maxlength="30" value="<?php echo $dataPegawai["nama"]; ?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat Pegawai</td>
                                <td><input type="text" name="alamat" size="50" maxlength="20" value="<?php echo $dataPegawai["alamat"]; ?>"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="TblUpdate" value="Update" class="btn btn-success">
                                    <input type="reset" value="Reset" class="btn btn-warning">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">Kembali</button></a>
            <?php
            } else
                echo "pegawai dengan id : $id tidak ada. Pengeditan dibatalkan";
            ?>
        <?php
        }
        ?>


        <!-- save update -->
        <?php
        if (isset($_POST["TblUpdate"])) {
            $db = dbConnect();
            if ($db->connect_errno == 0) {
                // Bersihkan data
                $id  = $db->escape_string($_POST["id"]);
                $nama       = $db->escape_string($_POST["nama"]);
                $alamat = $db->escape_string($_POST["alamat"]);
                // Susun query update
                $sql = "UPDATE user SET nama='$nama',alamat='$alamat'
			            WHERE id=$id";
                // Eksekusi query update
                $res = $db->query($sql);
                if ($res) {
                    if ($db->affected_rows > 0) { // jika ada update data
        ?>

                        <p style="text-align: center;">Data berhasil diupdate.</p><br>
                        <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">Kembali</button></a>
                    <?php
                    } else { // Jika sql sukses tapi tidak ada data yang berubah
                    ?>
                        Data berhasil diupdate tetapi tanpa ada perubahan data.<br>
                        <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">Kembali</button></a>
                    <?php
                    }
                } else { // gagal query
                    ?>
                    Data gagal diupdate.
                    <a href="admin-kelola-pegawai.php"><button class="btn btn-dark">Kembali</button></a>
        <?php
                }
            } else
                echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
        }
        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>