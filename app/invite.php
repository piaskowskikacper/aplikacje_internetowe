<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

$form = [];
$msgs = [];

if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meeting_id = intval($_POST['meeting_id']);
    $user_id = intval($_POST['user_id']);

    try {
        global $pdo;

        // Sprawdzenie, czy użytkownik już otrzymał zaproszenie
        $stmt = $pdo->prepare("SELECT id FROM invitations WHERE meeting_id = :meeting_id AND user_id = :user_id");
        $stmt->execute(['meeting_id' => $meeting_id, 'user_id' => $user_id]);

        if ($stmt->rowCount() > 0) {
            $msgs[] = 'Użytkownik już otrzymał zaproszenie na to spotkanie.';
        } else {
            // Wstawienie zaproszenia do bazy danych
            $stmt = $pdo->prepare("INSERT INTO invitations (meeting_id, user_id) VALUES (:meeting_id, :user_id)");
            $stmt->execute([
                'meeting_id' => $meeting_id,
                'user_id' => $user_id
            ]);

            $msgs[] = 'Zaproszenie zostało wysłane.';
        }
    } catch (PDOException $e) {
        $msgs[] = 'Błąd połączenia z bazą danych: ' . $e->getMessage();
    }
}

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Wysyłanie zaproszeń');
$smarty->assign('page_description', 'Wyślij zaproszenie na spotkanie');
$smarty->assign('page_header', 'Wysyłanie zaproszeń');

$smarty->assign('messages', $msgs);
$smarty->display(_ROOT_PATH.'/app/invite.tpl');
