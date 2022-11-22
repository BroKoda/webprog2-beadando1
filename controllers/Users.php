<?php

require_once '../models/User.php';
require_once '../helpers/session_helper.php';

class Users
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    public function register()
    {
        // Regisztrációs form feldolgozása
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Adatok előkészítése - Payload készítés
        $data = [
            'userName' => trim($_POST['userName']),
            'userEmail' => trim($_POST['userEmail']),
            'userUid' => trim($_POST['userUid']),
            'userPwd' => trim($_POST['userPwd']),
            'pwdRepeat' => trim($_POST['pwdRepeat'])
        ];

        // Beírt értékek ellenőrzése
        // Mezők ürességének ellenőrzése
        if (empty($data['userName']) || empty($data['userEmail']) || empty($data['userUid']) ||
            empty($data['userPwd']) || empty($data['pwdRepeat'])) {
            flash("register", "Minden mező kitöltése kötelező");
            redirect("../registration.php");
        }

        // Nem megfelelő karakterhasználat felhasználónévnél
        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['userUid'])) {
            flash("register", "Nem megfelelő felhasználónév");
            redirect("../registration.php");
        }

        // Nem megfelelő karakterhasználat email címnél
        if (!filter_var($data['userEmail'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Nem megfelelő email cím");
            redirect("../registration.php");
        }

        // Jelsző rövidebb mint 6 karakter -- jelsző nem egyezik
        if (strlen($data['userPwd']) < 6) {
            flash("register", "A jelsző kevesebb mint 6 karakter");
            redirect("../registration.php");
        } else if ($data['userPwd'] !== $data['pwdRepeat']) {
            flash("register", "A két megadott jelszó nem egyezik");
            redirect("../registration.php");
        }

        // Felhasználónév vagy emailcím már létezik
        if ($this->userModel->findUserByEmailOrUsername($data['userEmail'], $data['userName'])) {
            flash("register", "A felhasználónév vagy emailcím már használatban van");
            redirect("../registration.php");
        }

        // Ha minden ellenőrzés megfelelt -> jelsző hash-elés
        $data['userPwd'] = password_hash($data['userPwd'], PASSWORD_DEFAULT);

        // Felhasználó regisztrációja az adatbázisba, majd redirect LOGIN page-re
        if ($this->userModel->register($data)) {
            redirect("../login.php");
        } else {
            die("Sajnos valami nem sikerült! :(");
        }
    }

    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Adatok előkészítése - Payload készítés
        $data = [
            'name/email' => trim($_POST['name/email']),
            'userPwd' => trim($_POST['userPwd'])
        ];

        // Beírt értékek ellenőrzése
        // Mezők ürességének ellenőrzése
        if (empty($data['name/email']) || empty($data['userPwd'])) {
            flash("login", "Minden mező kitöltése kötelező");
            header("location: ../login.php");
            exit();
        }

        // Email és felhasználónv ellenőrzése -- ha létezik akkor bejelentkezés és session indítása
        if ($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])) {
            $loggedInUser = $this->userModel->login($data['name/email'], $data['userPwd']);
            if ($loggedInUser) {
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "A jelsző nem megfelelő");
                redirect("../login.php");
            }
        } else {
            flash("login", "Nem létezik ilyen felhasználó");
            redirect("../login.php");
        }
    }

    // Session indítása - globális változók létrehozása
    // Bejelentkezés után átirányítás a főoldalra
    public function createUserSession($user)
    {
        $_SESSION['userId'] = $user->userId;
        $_SESSION['userName'] = $user->userName;
        $_SESSION['userEmail'] = $user->userEmail;
        redirect("../index.php");
    }

    // Kijelentkezés - session leállítása
    // Kijelentkezés után átirányítás a főoldalra
    public function logout()
    {
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        session_destroy();
        redirect("../index.php");
    }
}

$init = new Users;

// SQL parancs ellenőrzés hidden input alapján
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'register':
            $init->register();
            break;
        case 'login':
            $init->login();
            break;
        default:
            redirect("../index.php");
    }
} else {
    switch ($_GET['q']) {
        case 'logout':
            $init->logout();
            break;
        default:
            redirect("../index.php");
    }
}

