<?php
include_once './includes/header.php';
include_once './helpers/session_helper.php';
?>

    <h1 class="header"> <?php echo $pageTitle; ?></h1>

    <?php echo $szoveg; ?>
    <?php echo $actors; ?>

    <div id="actors">

    </div>
    <script src="./includes/actors.js"></script>

    <?php

        echo $data

//        foreach ($data as $sor){ // felhasználók
//            for( $i= 0 ; $i < count($sor)/2 ; $i++) // mezők
//                // a lekérdezés eredményét duplán tárolja:
//                // Array ( [id] => 1 [0] => 1 [csaladi_nev] => Családi_1 [1] => Családi_1 …..)
//                print $sor[$i] . " " ;
//            print "<br>";
//        }

//        try {
//        // Kapcsolódás
//            $pdo = new PDO('mysql:host=localhost;dbname=webprog_czako_kavai', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//            $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
//            $utasitas = "SELECT * FROM szinesz";
//            $eredm = $pdo->query($utasitas);
//            foreach ($eredm as $sor){ // felhasználók
//                for( $i= 0 ; $i < count($sor)/2 ; $i++) // mezők
//                    // a lekérdezés eredményét duplán tárolja:
//                    // Array ( [id] => 1 [0] => 1 [csaladi_nev] => Családi_1 [1] => Családi_1 …..)
//                    print $sor[$i] . " " ;
//                print "<br>";
//            }
//        }
//        catch (PDOException $e) {
//            echo "Hiba: ".$e->getMessage();
//        }
?>

<?php
include_once 'includes/footer.php'
?>