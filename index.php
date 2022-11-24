<?php
include_once 'includes/header.php'
?>
<div class="col-12">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 text-center py-4">
                <h1 class="red-text mb-3">Webprogramozás II</h1>
                <h3 class="red-text mb-3">Első beadandó feladat</h3>
                <p class="white-text mb-3"><strong>Készítette:</strong> Czakó Ákos és Kávai Konrád</p>
                <p class="white-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate sem ut nunc
                    dictum, non commodo sem bibendum. Morbi in accumsan leo, porttitor varius risus.
                    Aenean dignissim rhoncus erat a aliquet. </p>
                <h3 class="red-text">Üdvözlünk az oldalon:</h3>
                <p class="white-text">
                    <strong>
                        <?php if (isset($_SESSION['userId'])) {
                            echo explode(" ", $_SESSION['userName'])[0];
                        } else {
                            echo 'Vendég';
                        }
                        ?>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>