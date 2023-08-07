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
                    <a class="nav-link active" href="#">Kelola Pegawai</a>
                    <a class="nav-link" href="admin-profil.php">Profile</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="content" style="margin-top: 100px; margin-left: 30px; margin-right: 30px;">
        <h5 style="font-family: monospace; text-align: center;">Data Pegawai </h5>
        <hr>
        <?php

        $db = dbConnect();
        if ($db->connect_errno == 0) {
            $sql = "SELECT id, nama, alamat FROM user WHERE rolee = 'pegawai'";
            $res = $db->query($sql);
            if ($res) {
        ?>
                <div style="margin-top: 40px; margin-left: 300px; margin-right: 300px;">
                    <a href="admin-tambah-pegawai.php">

                        <button style="margin-bottom: 30px;" class="btn btn-dark">Tambah Pegawai</button>

                    </a>

                    <table border=2 class="table table-striped" cellspacing="3">
                        <tr bgcolor=silver>
                            <th>Id Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $data = $res->fetch_all(MYSQLI_ASSOC);
                        foreach ($data as $barisdata) {
                        ?>
                            <tr>

                                <td><?php echo $barisdata["id"]; ?></td>
                                <td><?php echo $barisdata["nama"]; ?></td>
                                <td><?php echo $barisdata["alamat"]; ?></td>
                                <td>
                                    <a href="admin-form-edit-pegawai.php?id=<?php echo $barisdata["id"]; ?>">
                                        <button class="btn btn-warning">Edit</button></a> |
                                    <a href="admin-kelola-pegawai.php?hal=hapus&id=<?php echo $barisdata["id"]; ?>" onclick="return confirm('Apakah Anda Yakin akan Menghapus Data ini?')">
                                        <button class="btn btn-danger">Hapus</button></a>

                                </td>
                            </tr>


                </div>

    </div>
<?php
                        }
                        $res->free();
                    } else
                        echo "Gagal Eksekusi SQL" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
                } else
                    echo "Gagal Koneksi" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
?>


<?php
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "hapus") {

        $db = dbConnect();
        $id = $db->escape_string($_GET["id"]);
        if ($dataPegawai = getDataPegawai($id)) {

            if ($db->connect_errno == 0) {
                // Susun query delete
                $sql = "DELETE FROM user WHERE id='$id'";
                // Eksekusi query delete
                $res = $db->query($sql);
                if ($res) {
                    if ($db->affected_rows > 0) {
?>
                        <script>
                            confirm('Data Berhasil Dihapus')
                        </script>
                    <?php
                    } // jika ada data terhapus{}

                    else // Jika sql sukses tapi tidak ada data yang dihapus
                    {
                    ?>
                        <script>
                            confirm('Penghapusan gagal karena data yang dihapus tidak ada')
                        </script>
                    <?php

                    }
                } else { // gagal query
                    ?>
                    <script>
                        confirm('Penghapusan gagal')
                    </script>
                <?php
                }
                ?>
            <?php
            } else
                echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
        } else {

            ?>
            <script>
                confirm('Penghapusan gagal karena data yang dihapus tidak ada')
            </script>
        <?php
        }
        ?>
<?php
    } //end if get == hal
}
?>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>