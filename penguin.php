<?php

mb_internal_encoding('UTF-8');
define('TIME_START', microtime(true));
define('PG_ACTION', 'pg_action');

define('PG_DIR', dirname(__FILE__).'/');
define('PG_CORE_DIR', PG_DIR.'core/');
define('CONFIG_DIR', APP_DIR.'config/');
define('CONTROLLERS_DIR', APP_DIR.'controllers/');
define('MODELS_DIR', APP_DIR.'models/');
define('VIEWS_DIR', APP_DIR.'views/');
define('HELPERS_DIR', APP_DIR.'helpers/');
define('TMP_DIR', APP_DIR.'tmp/');
define('LOGS_DIR', TMP_DIR.'logs/');
define('LIB_DIR', ROOT_DIR.'lib/');
define('VENDOR_DIR', ROOT_DIR.'vendor/');

require_once PG_CORE_DIR.'exception.php';
require_once PG_CORE_DIR.'inflector.php';
require_once PG_CORE_DIR.'param.php';
require_once PG_CORE_DIR.'model.php';
require_once PG_CORE_DIR.'view.php';
require_once PG_CORE_DIR.'controller.php';
require_once PG_CORE_DIR.'dispatcher.php';