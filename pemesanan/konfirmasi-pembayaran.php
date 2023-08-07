<?php include_once("../function/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body style="background-color: #eee; ">

    <?php
    $db = dbConnect();
    if ($db->connect_errno == 0) {

        $idPemesanan;
        //get id_layanan terakhir dan id customer terakhir
        $lastIdLayanan = getLastIdLayananPemesanan();
        $lastIdCustomer = getLastIdCustomerPemesanan();


        $sql = "SELECT pemesanan.id, nama_layanan, harga from pemesanan INNER JOIN customer 
        on pemesanan.id_customer = customer.id 
        INNER JOIN layanan 
        on pemesanan.id_layanan = layanan.id 
        WHERE pemesanan.id_layanan = $lastIdLayanan and pemesanan.id_customer = $lastIdCustomer";
        $res = $db->query($sql);
        if ($res) {
    ?>

            <!-- <table border=1>
                <tr bgcolor=silver>
                    <!-- <th>No Pesanan</th>
                    <th>Pesanan</th>
                    <th>harga</th> -->
            <!-- </tr>  -->
            <?php
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
            ?>
                <section class="vh-100" style="background-color: #eee; ">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-12 col-xl-4">

                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4" style="margin-left: 10px; margin-right: 10px; ">
                                            <h4 class="mb-2">Selamatt... Pembayaran Berhasil!</h4>
                                            <p class="text-muted mb-4">No Pesanan : <span class="mx-2"><?php echo $idPemesanan = $barisdata["id"]; ?></span></p>
                                            <img src="../assets/images/qr/qris.jpeg" class="rounded img-fluid" style="width:300px;" />
                                        </div>
                                        <h4 class="mb-2">Rp. <?php echo number_format($barisdata["harga"], 0, ",", "."); ?></h4>
                                        <p class="text-muted mb-4">Order <span class="mx-2">:</span> <span> <?php echo $barisdata["nama_layanan"]; ?> </span></p>
                                        <p class="text-muted mb-4"><span class="mx-2"><a href="../index.php"><button class="btn btn-primary">Kembali</button></a></span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- <tr>
                        <td><?php //echo $idPemesanan = $barisdata["id"]; 
                            ?></td>
                        <td><?php //echo $barisdata["nama_layanan"]; 
                            ?></td>
                        <td style="text-align: center;">Rp. <?php //echo number_format($barisdata["harga"], 0, ",", "."); 
                                                            ?></td>

                    </tr> -->
    <?php
            }
            $res->free();
        } else {
            echo "Gagal Eksekusi SQL" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
        }
    } else
        echo "Gagal Koneksi" . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
    ?>

    <!-- <div class="container" style="text-align: center;">
            <p>Silahkan Lakukan Pembayaran</p>
            <img src="../assets/images/qr/qris.jpeg" alt="">
        </div> -->



    <?php
    // header("refresh:7; konfirmasi-pembayaran.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>