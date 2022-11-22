<?php
include_once 'includes/header.php';
include_once './helpers/session_helper.php';
?>

    <h1 class="header">Regisztráció</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="userName"
               placeholder="Teljes név...">
        <input type="text" name="userEmail"
               placeholder="Email...">
        <input type="text" name="userUid"
               placeholder="Felhasználónév...">
        <input type="password" name="userPwd"
               placeholder="Jelszó...">
        <input type="password" name="pwdRepeat"
               placeholder="Jelszó mégegyszer...">
        <button type="submit" name="submit">Regisztráció</button>
    </form>

<?php
include_once 'includes/footer.php'
?>