<?php
define('ROOT_DIR', dirname(dirname(__DIR__)).'/');
define('APP_DIR', ROOT_DIR.'app/');
require_once ROOT_DIR.'penguin.php';
require_once CONFIG_DIR.'bootstrap.php';
require_once CONFIG_DIR.'core_development.php';
Dispatcher::invoke();