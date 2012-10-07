<?php
class View
{
    private $controller;
    public $vars = array();

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function render($action = null)
    {
        $action = is_null($action) ? $this->controller->action : $action;
        if (strpos($action, '/') === false) {
            $view_filename = VIEWS_DIR . $this->controller->name . '/' . $action . '.tmpl';
        }
        else {
            $view_filename = VIEWS_DIR . $action . '.tmpl';
        }

        //:TODO
        // Smartyで
    }
}