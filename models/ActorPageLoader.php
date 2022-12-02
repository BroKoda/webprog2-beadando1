<?php
//require_once '../libraries/Database.php';

class ActorPageLoader
{
//    private $db;
    public $actors;
    public $data;
    public $viewName;

    public function __construct($viewName)
    {
//        $this->db = new Database;
        $this->viewName = $viewName;
    }

    public function getActors()
    {
        $this->actors = 'Ezek a nemzet színészei';

        try {

            $pdo = new PDO('mysql:host=localhost;dbname=webprog_czako_kavai_1', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            $query = "SELECT * FROM kapott 
                        LEFT JOIN szinesz ON kapott.szineszid = szinesz.id 
                        LEFT JOIN elismeres ON kapott.elismeresid = elismeres.id 
                        ORDER BY kapott.ev;";
            $sth = $pdo->prepare($query);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            $this->data = json_encode($result);



            // Kapcsolódás
//            $pdo = new PDO('mysql:host=localhost;dbname=webprog_czako_kavai', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//            $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
//            $sql = "SELECT * FROM `kapott` LEFT JOIN `szinesz` ON kapott.szineszid = szinesz.id LEFT JOIN `elismeres` ON kapott.elismeresid = elismeres.id;";
//            $actors = $pdo->query($sql);
//            $this->data = $actors;
//            foreach ($actors as $actor) {
//                for ($i = 0; $i < count($actor) / 2; $i++)
//                    print $actor[$i] . " ";
//                print "<br>";
//            }
        } catch (PDOException $e) {
            echo "Hiba: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $view = new $this->viewName($this);
        $actors = $view->output();
        $pageTitle = 'A nemzet színészei';
        include('views/actors_page.php');
    }
}

?>