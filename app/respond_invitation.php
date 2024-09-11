<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: meetigns.php');
    exit();
}

try {
    // Połączenie z bazą danych
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pobierz id zalogowanego użytkownika
    $username = $_SESSION['username'];
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch();
    $user_id = $user['id'];

    // Pobierz zaproszenia dla użytkownika z status 'pending'
    $stmt = $conn->prepare("
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
