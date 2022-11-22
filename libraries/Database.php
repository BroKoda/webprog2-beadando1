<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'webprog_czako_kavai';

    // PHP Data Object létrehozás
    private $dbh;
    private $stmt;
    private $error;

    // DSN Beállítás -- PDO inicializálása
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    // Query statement előkészítése
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    // Értékek hozzárendelése az előkészített statement-hez, paraméterekkel
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Statement futtatása
    public function execute()
    {
        return $this->stmt->execute();
    }

    // Visszatérő érték - több érték esetén
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Visszatérő érték - egy érték esetén
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Sorok száma
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}