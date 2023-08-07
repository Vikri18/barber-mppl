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
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link " href="admin-kelola-pegawai.php">Kelola Pegawai</a>
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
        <h5>Welcome Back <?php echo " ", strtoupper($_SESSION["nama"]), "!"  ?></h5>

        <hr style="margin-right: 1200px;">
        <br><br>
        <h5 style="font-family: monospace;">Daftar Data Pesanan </h5>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" target="_self">
            <button class="btn btn-dark" name="sekarang">Hari Ini</button>
            <button class="btn btn-dark" name="semua">Tampilkan Semua</button>
        </form>

        <br>
        <?php

        $hari = "";
        if (isset($_POST['semua'])) {
            //kosong
        } else {
            $date = date("Y-m-d");
            $hari = " where pemesanan.tanggal_pemesanan = '$date' ";
        }


        $id_pegawai = $_SESSION["id"];
        $id_pemesanan;

        $db = dbConnect();
        if ($db->connect_errno == 0) {
            $sql = "SELECT pemesanan.id, customer.nama, customer.email, pemesanan.tanggal_pemesanan, layanan.nama_layanan, pemesanan.catatan, pemesanan.keterangan_pesanan , layanan.id_pegawai
            FROM pemesanan INNER JOIN layanan 
            ON pemesanan.id_layanan = layanan.id 
            INNER JOIN customer 
            ON pemesanan.id_customer = customer.id 
            $hari";
            $res = $db->query($sql);
            if ($res) {
        ?>
                <div style="margin-top: 20px; margin-left: 30px; margin-right: 30px;">

                    <form>
                        <table border=2 class="table table-striped" cellspacing="3">
                            <tr bgcolor=silver>
                                <th>No Pesanan</th>
                                <th>Nama Customer</th>
                                <th>Email Customer</th>
                                <th>Layanan</th>
                                <th>Tanggal</th>
                                <th>Catatan Customer</th>
                                <th>Keterangan</th>
                                <th>Id Pegawai</th>
                            </tr>
                            <?php
                            $data = $res->fetch_all(MYSQLI_ASSOC);
                            foreach ($data as $barisdata) {
                            ?>
                                <tr>
                                    <td><?php echo $id_pemesanan = $barisdata["id"]; ?></td>
                                    <td><?php echo $barisdata["nama"]; ?></td>
                                    <td><?php echo $barisdata["email"]; ?></td>
                                    <td><?php echo $barisdata["nama_layanan"]; ?></td>
                                    <td><?php echo $barisdata["tanggal_pemesanan"]; ?></td>
                                    <td><?php echo $barisdata["catatan"]; ?></td>
                                    <td><?php echo $barisdata["keterangan_pesanan"]; ?></td>
                                    <td><?php echo $barisdata["id_pegawai"]; ?></td>
                                </tr>

                    </form>
                </div>
    <?php
                            }
                            $res->free();
                        } else
                            echo "Gagal Eksekusi SQL" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
                    } else
                        echo "Gagal Koneksi" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
    ?>

    <!-- update  keterangan pesanan-->
    <?php
    if (isset($_POST["btnUpdate"])) {
        $db = dbConnect();
        if ($db->connect_errno == 0) {
            //Penyusunan Query
            $sql = "UPDATE pemesanan SET 
                      keterangan_pesanan=? WHERE id=?";
            $ket = "SELESAI";
            //Eksekusi Query
            if ($stmt = $db->prepare($sql)) {
                $stmt->bind_param("si", $ket, $id_pemesanan);
                if ($stmt->execute()) {
                    if ($db->affected_rows > 0) { //jika ada update data produk
    ?>
                        <?php
                        echo "Query Error : " . (DEVELOPMENT ?:  "Data berhasil diupdate.") . "<br>";
                        header("refresh:1");
                        ?>
                        </br>
                    <?php
                    } else { //Jika sql berhasil di eksekusi tapi data tidak berubah
                    ?>
                        <br>

                        <?php
                        echo "Query Error : " . (DEVELOPMENT ?:  "Data berhasil di update tetapi tanpa ada perubahan data.") . "<br>";
                        header("refresh:1");
                        ?>
                        </br>
                    <?php
                    }
                } else { //gagal di querynya
                    ?>
                    <?php
                    echo "Query Error : " . (DEVELOPMENT ?:  "Data gagal diupdate.") . "<br>";
                    header("refresh:1");
                    ?>
                    <br>

    <?php
                }
            } else
                echo "Query Error : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
        } else
            echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
    }
    ?>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>