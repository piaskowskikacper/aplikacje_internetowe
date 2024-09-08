<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Panel główny');
$smarty->assign('page_description', 'Witaj w panelu głównym');
$smarty->assign('page_header', 'Panel użytkownika');

// Dane użytkownika (np. zalogowanego użytkownika)
$smarty->assign('username', $_SESSION['username']);

$smarty->display(_ROOT_PATH.'/app/dashboard.tpl');
