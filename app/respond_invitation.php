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

try {
    // Pobierz id zalogowanego użytkownika
    $username = $_SESSION['username'];
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch();
    $user_id = $user['id'];

    // Pobierz zaproszenia dla użytkownika z status 'pending'
    $stmt = $pdo->prepare("
        SELECT invitations.id AS invitation_id, meetings.title AS meeting_title, meetings.meeting_date 
        FROM invitations 
        JOIN meetings ON invitations.meeting_id = meetings.id
        WHERE invitations.user_id = :user_id AND invitations.status = 'pending'
    ");
    $stmt->execute([':user_id' => $user_id]);
    $invitations = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    die();
}


$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Odpowiedź na zaproszenie');
$smarty->assign('page_description', 'Odpowiedz na zaproszenie na spotkanie');
$smarty->assign('page_header', 'Odpowiedź na zaproszenie');

$smarty->assign('messages', $msgs);
$smarty->assign('invitations', $invitations);
$smarty->display(_ROOT_PATH.'/app/respond_invitation.tpl');
