<?php
define("DEVELOPMENT", TRUE); //Sedang Tahap Pengembangan
function dbConnect()
{
    $db = new mysqli("localhost", "root", "", "barbershop");
    return $db;
}

function getRole($id)
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT rolee from user WHERE id = $id");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["rolee"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}

// =========== PEMESANAN ================
function getMaxIdPegawai()
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT id_pegawai from layanan ORDER BY id_pegawai DESC LIMIT 1");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["id_pegawai"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}
function getIdLayanan($id_pegawai, $nama_layanan)
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT id FROM layanan WHERE id_pegawai ='$id_pegawai'  AND nama_layanan = '$nama_layanan'");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["id"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}

function getIdCustomer()
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT id from customer ORDER BY id DESC LIMIT 1");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["id"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}
//====== pemesanan ========== (pembayaran)
function getLastIdLayananPemesanan()
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT id_layanan,id_customer from pemesanan ORDER BY id DESC LIMIT 1");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["id_layanan"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}
function getLastIdCustomerPemesanan()
{
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $res = $db->query("SELECT id_customer from pemesanan ORDER BY id DESC LIMIT 1");
        if ($res->num_rows > 0) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $barisdata) {
                return $barisdata["id_customer"];
            }
            $res->free();
        } else
            return FALSE;
    } else
        return FALSE;
}
//====== pemesanan =========(end pembayaran)

// =========== END PEMESANAN ================


//=========== Pegawai
function getDataPegawai($id)
	{
		$db = dbConnect();
		if ($db->connect_errno == 0) {
			$res = $db->query("SELECT * 
						 FROM user
						 WHERE id='$id'");
			if ($res->num_rows > 0) {
				$data = $res->fetch_assoc();
				$res->free();
				return $data;
			} else
				return FALSE;
		} else
			return FALSE;
	}
//==========END PEGAWAI
function showError($message)
{
    ?>
    <div style="background-color:#FAEBD7;padding:10px;border:1px solid red;margin:15px 0px">
        <?php echo $message; ?>
    </div>
<?php
}
?>