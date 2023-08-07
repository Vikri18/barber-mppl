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
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
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
                    <a class="nav-link " href="admin-kelola-pegawai.php">Kelola Pegawai</a>
                    <a class="nav-link active" href="#">Profile</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="content" style="margin-top: 100px; margin-left: 30px; margin-right: 30px;">

        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="../assets/images/profile/Avatar-Profile.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                    <h5><?php echo $_SESSION["nama"] ?></h5>
                                    <p><?php echo $_SESSION["rolee"] ?></p>
                                    <i class="far fa-edit mb-5"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Profile Information</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Username</h6>
                                                <p class="text-muted"><?php echo $_SESSION["username"] ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Phone</h6>
                                                <p class="text-muted">-</p>
                                            </div>
                                        </div>
                                        <h6></h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Alamat</h6>
                                                <p class="text-muted"><?php echo $_SESSION["alamat"] ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6></h6>
                                                <p class="text-muted"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>