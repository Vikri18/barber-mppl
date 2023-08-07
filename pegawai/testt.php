<?php
if (isset($_POST["btnUpdate"])) {
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        //Penyusunan Query
        $sql = "UPDATE pemesanan SET 
                      keterangan_pemesanan=? WHERE id=?";
        $ket = "SELESAI";
        //Eksekusi Query
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("si", $ket, "");
            if ($stmt->execute()) {
                if ($db->affected_rows > 0) { //jika ada update data produk
?>
                    Data berhasil diupdate.</br>
                <?php
                } else { //Jika sql berhasil di eksekusi tapi data tidak berubah
                ?>
                    Data berhasil di update tetapi tanpa ada perubahan data.<br>
                <?php
                }
            } else { //gagal di querynya
                ?>
                Data gagal diupdate.<br>
<?php
            }
        } else
            echo "Query Error : " . (DEVELOPMENT ? " : " . $db->error : "") . "<br>";
    } else
        echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
}
?>