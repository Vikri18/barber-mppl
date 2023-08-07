<?php include_once("../function/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <form id="login" method="post" name="f" action="login.php">
                                <div class="form-group">
                                    <?php
                                    if (isset($_GET["error"])) {
                                        $error = $_GET["error"];
                                        if ($error == 1)
                                            showError("username dan password tidak sesuai.");
                                        else if ($error == 2)
                                            showError("Harap Login Terlebih Dahulu");
                                        else if ($error == 3)
                                            showError("Koneksi ke Database gagal. Autentikasi gagal.");
                                        else if ($error == 4)
                                            showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login. Silahkan
      login terlebih dahulu.");
                                        else
                                            showError("Unknown Error.");
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" name="username" placeholder="Masukan Username" value="" required autofocus>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Masukan Password" required>
                                </div>

                                <br>

                                <div class="pt-1 mb-4 text-center">
                                    <button class="btn btn-dark btn-user btn-block" name="btnLogin" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>

    </div>

    

</body>

</html>