<?php
class show_actors
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function output() {
        return

<<<HTML
            <script>
                let actorsJS = {$this->model->data};
            </script>         
HTML;

    }
}
?>
