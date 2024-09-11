<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$pending_invitations = 0;

// Połączenie z bazą danych
try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pobranie ID zalogowanego użytkownika
    $username = $_SESSION['username'];
    $stmt = $conn->prepare('SELECT id FROM users WHERE username = :username');
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];

    // Zapytanie do bazy: nadchodzące zaakceptowane spotkania
    $stmt = $conn->prepare("
        SELECT meetings.id, meetings.title, meetings.meeting_date 
        FROM meetings
        JOIN invitations ON meetings.id = invitations.meeting_id
        WHERE invitations.user_id = :user_id AND invitations.status = 'accepted' 
        AND meetings.meeting_date > NOW()
        ORDER BY meetings.meeting_date ASC
    ");
    $stmt->execute([':user_id' => $user_id]);
    $accepted_meetings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Zapytanie do bazy: liczba zaproszeń oczekujących na odpowiedź
    $stmt = $conn->prepare("
        SELECT COUNT(*) AS pending_invitations
        FROM invitations
        WHERE user_id = :user_id AND status = 'pending'
    ");
    $stmt->execute([':user_id' => $user_id]);
    $pending_invitations = $stmt->fetch(PDO::FETCH_ASSOC)['pending_invitations'];

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Przekazanie danych do szablonu Smarty
$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Panel główny');
$smarty->assign('username', $username);
$smarty->assign('accepted_meetings', $accepted_meetings);
$smarty->assign('pending_invitations', $pending_invitations);
$smarty->assign('page_header', 'Panel użytkownika');

// Wyświetlenie szablonu
$smarty->display(_ROOT_PATH.'/app/dashboard.tpl');
