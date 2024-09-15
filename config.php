<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/do%20wyslania/projekt');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'meeting_management');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

require_once dirname(__FILE__).'/db.php';
?>

