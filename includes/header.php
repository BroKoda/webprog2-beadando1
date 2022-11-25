<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webprogramozás II - beadandó</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet" href="./includes/style.css" type="text/css">
</head>
<body>
<div class="container-fluid">
    <div class="row main-row">
        <div class="col-12 px-0">

            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <div class="logged-in-user">
                        <span class="title">WebProg 2</span>
                        <span class="username">
                            <?php if (isset($_SESSION['userId'])) {
                                echo explode(" ", $_SESSION['userName'])[0];
                            } else {
                                echo 'Vendég';
                            }
                            ?>
                        </span>
                    </div>
                    <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                        <div class="row w-100">
                            <div class="col-6">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./index.php">Főoldal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="szineszek.php">Színészek</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./mnb_soap.php">MNB árfolyam</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-0">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                                    <!-- Ha nincs session elindítva akkor belépés és regisztráció gomb látszik -->
                                    <?php if (!isset($_SESSION['userId'])) : ?>
                                        <li class="nav-item nav-item-login">
                                            <a class="nav-link" href="./login.php">Bejelentkezés</a>
                                        </li>
                                        <li class="nav-item nav-item-registration">
                                            <a class="nav-link" href="./registration.php">Regisztráció</a>
                                        </li>
                                    <!-- Ha már van session akkor a kilépés gomb látszik -->
                                    <?php else: ?>
                                        <li class="nav-item nav-item-logout">
                                            <a class="nav-link" href="./controllers/Users.php?q=logout">Kilépés</a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>


<!--                            <li class="nav-item dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                    Dropdown-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                                    <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                                    <li><hr class="dropdown-divider"></li>-->
<!--                                    <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                    </div>
                </div>
            </nav>
        </div>
