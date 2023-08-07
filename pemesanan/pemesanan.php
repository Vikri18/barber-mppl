<?php include_once("../function/functions.php"); ?>
<?php
if (isset($_POST["btnPesan"])) {
    $db = dbConnect();
    if ($db->connect_errno == 0) {

        // $date = date("d-m-Y");
        $nama = $_POST["nama"];
        $nomor_telp = $_POST["nomor_telp"];
        $date = $_POST["date"];
        $email = $_POST["email_customer"];
        $layanan = $_POST["nama_layanan"];
        $catatan = $_POST["catatan"];
        $ketBayar = "BELUM LUNAS";
        $ketPesanan = "BELUM SELESAI";
        $getMaxIdPegawai = getMaxIdPegawai();
        $getIdPegawai = rand(2, $getMaxIdPegawai);
        $id_layanan = getIdLayanan($getIdPegawai, $layanan);

        //=============insert kustomer
        // Menyusun Query Insert
        $sql = "insert into customer(email, nama, nomor_telp)
        values (?,?,?)";
        // Eksekusi Query Insert
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("sss",  $email, $nama, $nomor_telp);
            if ($stmt->execute()) {
                if ($db->affected_rows > 0) {
?>
                    <?php
                    header("Location: pembayaran.php");
                    ?>
                <?php
                }
            } else {
                header("Location: ../index.php");
                ?>
        <?php
            }
        } else {
            echo "Query Error : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
        }

        ?>

        <!-- =============end insert kustomer -->
        <?php

        //get id_customer
        $idCustomer = getIdCustomer();

        // Menyusun Query Insert
        $sql = "insert into pemesanan(id_layanan,id_customer,tanggal_pemesanan,catatan,keterangan_pembayaran,keterangan_pesanan)
                    values (?,?,?,?,?,?)";
        // Eksekusi Query Insert
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("iissss",  $id_layanan, $idCustomer, $date, $catatan, $ketBayar, $ketPesanan);
            if ($stmt->execute()) {
                if ($db->affected_rows > 0) {
        ?>
                    <?php
                    header("Location: pembayaran.php");
                    ?>
                <?php
                }
            } else {

                header("Location: ../index.php");
                ?>
<?php
            }
        } else
            echo "Query Error : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
    } else
        echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
}

header("Location: pembayaran.php");
?>