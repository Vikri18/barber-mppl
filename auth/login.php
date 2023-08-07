<?php
session_start();
if (!isset($_SESSION["id"]))
    header("Location: ../index.php?error=4");
?>
<?php include_once("../function/functions.php"); ?>
<?php
$db = dbConnect();
if ($db->connect_errno == 0) {
    if (isset($_POST["btnLogin"])) {
        $username = $db->escape_string($_POST["username"]);
        $password = $db->escape_string($_POST["password"]);
        $sql = "SELECT id,username,rolee,nama,alamat FROM user
			  WHERE username='$username' and password='$password'";
        $res = $db->query($sql);
        if ($res) {
            if ($res->num_rows == 1) {
                $data = $res->fetch_assoc();

                if ($data['rolee'] == "super admin") {

                    session_start();

                    $_SESSION["id"] = $data["id"];
                    $_SESSION["username"] = $data["username"];
                    $_SESSION["rolee"] = $data["rolee"];
                    $_SESSION["nama"] = $data["nama"];
                    $_SESSION["alamat"] = $data["alamat"];


                    header("Location: ../admin/admin-home.php");
                } else if ($data['rolee'] == "pegawai") {
                    session_start();
                    $_SESSION["id"] = $data["id"];
                    $_SESSION["username"] = $data["username"];
                    $_SESSION["rolee"] = $data["rolee"];
                    $_SESSION["nama"] = $data["nama"];
                    $_SESSION["alamat"] = $data["alamat"];

                    header("Location: ../pegawai/pegawai-home.php");
                } else {

                    // alihkan ke halaman login kembali
                    header("location: index-login.php?pesan=gagal");
                }
            } else
                header("Location: index-login.php?error=1");
        }
    } else
        header("Location: index-login.php?error=2");
} else
    header("Location: index-login.php?error=3");
?>