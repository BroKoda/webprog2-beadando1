<?php
include_once 'includes/header.php'
?>

    <h1 id="index-text">Üdvözlet,
        <?php if (isset($_SESSION['userId'])) {
            echo explode(" ", $_SESSION['userName'])[0];
        } else {
            echo 'Vendég';
        }
        ?>
    </h1>

<?php
include_once 'includes/footer.php'
?>