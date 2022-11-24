<?php
class show_actors
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function output() {
        return "<h3>" . $this->model->actors . "</h3>";
    }
}
?>