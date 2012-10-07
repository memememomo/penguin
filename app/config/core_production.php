<?php
define('EVN_PRODUCTION', true);
define('APP_HOST', 'hello.example.com');
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://hello.example.com/');

error_reporting(E_ALL | E_STRING);
ini_set('display_errors', 'Off');
ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);