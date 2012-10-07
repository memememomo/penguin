<?php
class Controller
{
    /**
     * @param コントローラ名
     */
    public $name;

    /**
     * @param アクション名
     */
    public $action;

    /**
     * @param ビュー
     */
    public $view;

    /**
     * @param デフォルトのビュークラス名
     */
    private $default_view_class = 'View';

    /**
     * @param 出力結果
     */
    private $output;

    public function __construct($name)
    {
        $this->name = $name;
        $this->view = new $this->default_view_class($this);
    }

    public function beforeFilter()
    {
    }

    public function afterFilter()
    {
    }

    public function dispatchAction()
    {
        if (!self::isAction($this->action)) {
            throw new PGException('invalid action name');
        }

        if (!method_exists($this, '__call')) {
            if (!method_exists($this, $this->action)) {
                throw new PGException('action does not exist');
            }
            $method = new ReflectionMethod($this, $this->action);
            if (!$method->isPublic()) {
                throw new PGException('action is not public');
            }
        }

        $this->{$this->action}();

        $this->render();
    }

    public static function isAction($action)
    {
        $methods = get_class_methods('Controller');
        return !in_array($action, $methods);
    }

    public function set($name, $values = null)
    {
        if (is_array($name)) {
            foreach ($name as $k => $v) {
                $this->view->vars[$k] = $v;
            }
        }
        else {
            $this->view->vars[$name] = $values;
        }
    }

    public function beforeRender()
    {
    }

    public function render($action = null)
    {
        static $is_rendered = false;

        if ($is_rendered) {
            return;
        }

        $this->beforeRender();
        $this->view->render($action);
        $is_rendered = true;
    }
}