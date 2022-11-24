<?php
class ActorPageLoader
{
    public $actors;
    public $viewName;

    public function __construct($viewName){
        $this->viewName = $viewName;
    }
    public function getActors(){
        $this->actors = 'Ezek a nemzet színészei';
    }
    public function __destruct(){
        $view = new $this->viewName($this);
        $szoveg = $view->output();
        include('views/view_template.php');
    }
}
?>