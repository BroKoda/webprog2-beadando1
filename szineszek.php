<?php
    $controllerfile = "ActorsController";
    $nezet = "show_actors";

    include("controllers/" . $controllerfile . ".php");
    include("models/ActorPageLoader.php");
    include("views/show_actors.php");

    $controller = new $controllerfile($nezet);
?>