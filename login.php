<?php
include_once 'includes/header.php';
include_once './helpers/session_helper.php';
?>
    <div class="col-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-5 text-start py-4">
                    <h1 class="red-text mb-3">Belépés</h1>
                    <p><?php flash('login') ?></p>
                    <form method="post" action="./controllers/Users.php">
                        <div class="container px-0">
                            <input type="hidden" name="type" value="login">
                            <div class="row mb-2">
                                <div class="col-4 align-self-center">
                                    <label for="name/email"><strong>Felhasználónév:</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="name/email">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4 align-self-center">
                                    <label for="userPwd"><strong>Jelszó:</strong></label>
                                </div>
                                <div class="col-8">
                                    <input type="password" name="userPwd">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="submit">Bejelentkezés</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'includes/footer.php'
?>