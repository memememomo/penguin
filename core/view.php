<?php

require_once VENDOR_DIR . 'smarty/Smarty.class.php';


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
        $smarty = new Smarty();

        $action = is_null($action) ? $this->controller->action : $action;
        if (strpos($action, '/') === false) {
            $smarty->template_dir = VIEWS_DIR . $this->controller->name;
            $view_filename = $action . '.tmpl';
        }
        else {
            $view_filename = $action . '.tmpl';
        }

        $smarty->compile_dir  = TMP_DIR . 'views_c/';
        $smarty->caching      = false;

        foreach ($this->vars as $key => $val) {
            $smarty->assign($key, $val);
        }

        $content = $smarty->fetch($view_filename);
        $this->controller->output .= $content;
    }
}