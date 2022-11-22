<?php
include_once 'includes/header.php';
include_once './helpers/session_helper.php';
?>

    <h1 class="header">Bejelentkezés</h1>

    <?php flash('login') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="login">
        <input type="text" name="name/email"
               placeholder="Felhasználónév/Email...">
        <input type="password" name="userPwd"
               placeholder="Jelszó...">
        <button type="submit" name="submit">Belépés</button>
    </form>

<?php
include_once 'includes/footer.php'
?>