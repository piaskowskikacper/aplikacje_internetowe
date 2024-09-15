<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

// Połączenie z bazą danych
global $pdo;

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}

$pending_invitations = 0;

try {
     // Pobranie id zalogowanego użytkownika
    $username = $_SESSION['username'];
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch();
    $user_id = $user['id'];

    // Pobranie nadchodzących spotkań dla użytkownika
    $stmt = $pdo->prepare("
        SELECT meetings.id AS meeting_id, meetings.title AS meeting_title, meetings.meeting_date 
        FROM meetings
        JOIN invitations ON meetings.id = invitations.meeting_id
        WHERE invitations.user_id = :user_id
            AND invitations.status = 'accepted'
            AND meetings.meeting_date > NOW()
    ");
    $stmt->execute([':user_id' => $user_id]);
    $upcoming_meetings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Pobranie spotkań utworzonych przez użytkownika
    $stmt = $pdo->prepare("
        SELECT id AS meeting_id, title AS meeting_title, meeting_date 
        FROM meetings
        WHERE creator_id = :user_id
            AND meetings.meeting_date > NOW()
    ");
    $stmt->execute([':user_id' => $user_id]);
    $created_meetings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Pobranie liczby zaproszeń, na które użytkownik nie odpowiedział
    $stmt = $pdo->prepare("
        SELECT COUNT(*) AS pending_invitations 
        FROM invitations
        WHERE user_id = :user_id AND status = 'pending'
    ");
    $stmt->execute([':user_id' => $user_id]);
    $pending_invitations = $stmt->fetchColumn();

} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    die();
}

// Przekazanie danych do szablonu Smarty
$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Panel główny');
$smarty->assign('username', $username);
$smarty->assign('accepted_meetings', $accepted_meetings);
$smarty->assign('pending_invitations', $pending_invitations);
$smarty->assign('upcoming_meetings', $upcoming_meetings);
$smarty->assign('created_meetings', $created_meetings);
$smarty->assign('page_header', 'Panel użytkownika');

// Wyświetlenie szablonu
$smarty->display(_ROOT_PATH.'/app/dashboard.tpl');
