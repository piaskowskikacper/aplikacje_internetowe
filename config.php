<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/do%20wyslania/projekt');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

define('DB_HOST', 'localhost'); // lub adres serwera MySQL
define('DB_NAME', 'twoja_baza_danych'); // nazwa bazy danych
define('DB_USER', 'root'); // nazwa użytkownika MySQL
define('DB_PASSWORD', ''); // hasło użytkownika MySQL (domyślnie puste w XAMPP)
define('_ROOT_PATH', dirname(__FILE__));
define('_APP_URL', 'http://localhost/do wyslania/projekt');

require_once dirname(__FILE__).'/db.php';
?>

