<?php
class ActorsController
{
    public function __construct($viewName){
        $model = new ActorPageLoader($viewName);
        $model->getActors();
    }
}
?>