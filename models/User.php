<?php
require_once '../libraries/Database.php';

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Felhasználó keresése email cím VAGY felhasználónév alapján
    public function findUserByEmailOrUsername($email, $username)
    {
        $this->db->query('SELECT * FROM users WHERE userUid = :username OR userEmail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Ha van egyezés, akkor visszakapjuk a User sort
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    // Felhasználó regisztrálása
    public function register($data)
    {
        // SQL parancs létrehozás
        $this->db->query('INSERT INTO users (userName, userEmail, userUid, userPwd) 
        VALUES (:name, :email, :Uid, :password)');

        // Értékek hozzárendelése az SQL parancshoz
        $this->db->bind(':name', $data['userName']);
        $this->db->bind(':email', $data['userEmail']);
        $this->db->bind(':Uid', $data['userUid']);
        $this->db->bind(':password', $data['userPwd']);

        // Parancs végrehajtása
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Felhasználó beléptetése
    public function login($nameOrEmail, $password)
    {
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if ($row == false) return false;

        $hashedPassword = $row->userPwd;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }
}