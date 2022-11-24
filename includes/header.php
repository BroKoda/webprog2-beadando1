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
    <link rel="stylesheet" href="./includes/style.css" type="text/css">
</head>
<body>
<nav>
    <ul>
        <a href="index.php">
            <li>Főoldal</li>
        </a>

        <a href="szineszek.php">
            <li>Színészek</li>
        </a>

        <!-- Ha nincs session elindítva akkor belépés és regisztráció gomb látszik -->
        <?php if (!isset($_SESSION['userId'])) : ?>
            <a href="./registration.php">
                <li>Regisztráció</li>
            </a>
            <a href="./login.php">
                <li>Bejelentkezés</li>
            </a>

            <!-- Ha már van session akkor a kilépés gomb látszik -->
        <?php else: ?>
            <a href="./controllers/Users.php?q=logout">
                <li>Kilépés</li>
            </a>
        <?php endif; ?>
    </ul>
</nav>