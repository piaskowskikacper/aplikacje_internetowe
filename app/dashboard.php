<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['user_id'])) {
    header("Location: meetings.php"); // Przekierowanie na stronę logowania, jeśli użytkownik nie jest zalogowany
    exit;
}

// Pobieranie informacji o zalogowanym użytkowniku
$username = $_SESSION['username'];

// Przykładowa logika - wyświetlanie informacji dla zalogowanego użytkownika
$welcomeMessage = "Witaj, $username! Jesteś zalogowany w systemie.";

// Przykładowe dane do wyświetlenia na stronie dashboard
$upcomingMeetings = [
    ['date' => '2024-08-25', 'topic' => 'Projektowanie aplikacji PHP'],
    ['date' => '2024-08-26', 'topic' => 'Bezpieczeństwo w aplikacjach webowych'],
    ['date' => '2024-08-27', 'topic' => 'Integracja z bazami danych'],
];

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Panel główny');
$smarty->assign('page_description', 'Strona główna po zalogowaniu');
$smarty->assign('page_header', 'Dashboard');

$smarty->assign('welcomeMessage', $welcomeMessage);
$smarty->assign('upcomingMeetings', $upcomingMeetings);

$smarty->display(_ROOT_PATH.'/app/dashboard.tpl');
?>
