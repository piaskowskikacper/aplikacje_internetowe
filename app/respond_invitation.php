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
    $invitation_id = intval($_POST['invitation_id']);
    $action = $_POST['action']; // 'accept' or 'decline'

    try {
        global $pdo;

        // Aktualizacja statusu zaproszenia
        if ($action === 'accept') {
            $status = 'accepted';
        } else {
            $status = 'declined';
        }

        $stmt = $pdo->prepare("UPDATE invitations SET status = :status WHERE id = :invitation_id AND user_id = :user_id");
        $stmt->execute([
            'status' => $status,
            'invitation_id' => $invitation_id,
            'user_id' => $_SESSION['user_id']
        ]);

        $msgs[] = 'Zaproszenie zostało ' . ($action === 'accept' ? 'zaakceptowane.' : 'odrzucone.');
    } catch (PDOException $e) {
        $msgs[] = 'Błąd połączenia z bazą danych: ' . $e->getMessage();
    }
}

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Odpowiedź na zaproszenie');
$smarty->assign('page_description', 'Odpowiedz na zaproszenie na spotkanie');
$smarty->assign('page_header', 'Odpowiedź na zaproszenie');

$smarty->assign('messages', $msgs);
$smarty->display(_ROOT_PATH.'/app/respond_invitation.tpl');
