<?php
class show_actors
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function output() {
//        return "<h3>" . $this->model->actors . "</h3>";
        return<<<HTML
            <h3>{$this->model->actors}</h3>                
            <script>
                let actorsJS = {$this->model->data};
                console.log(actorsJS)
            </script>         
HTML;
    }
}
?>
