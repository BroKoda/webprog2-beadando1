<?php
include_once './includes/header.php';
include_once './helpers/session_helper.php';
?>

    <div class="col-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="co-12">
                    <h3 class="header"><?php echo $pageTitle; ?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan dui quis ipsum
                        eleifend dapibus. Sed ut ornare massa. Curabitur tellus neque, tristique eu odio eu,
                        faucibus egestas elit. Morbi.</p>
                    <div class="row" id="actors">
                        <div class="col-2 mt-3 mb-1">
                            <p>
                                <strong>Kitíntetés éve</strong>
                            </p>
                        </div>
                        <div class="col-3 mt-3 mb-1">
                            <p>
                                <strong>Színész</strong>
                            </p>
                        </div>
                        <div class="col-2 mt-3 mb-1">
                            <p>
                                <strong>Nemzet színésze</strong>
                            </p>
                        </div>
                        <div class="col-5 mt-3 mb-1">
                            <p>
                                <strong>Díj</strong>
                            </p>
                        </div>
                    </div>
<!--                    <div id="actors">-->
<!---->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>



    <?php echo $actors; ?>

    <script src="./includes/actors.js"></script>

<?php
include_once 'includes/footer.php'
?>