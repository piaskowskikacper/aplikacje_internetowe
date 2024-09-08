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
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $meeting_date = trim($_POST['meeting_date']);

    if (empty($title)) {
        $msgs[] = 'Tytuł spotkania jest wymagany.';
    }
    if (empty($meeting_date)) {
        $msgs[] = 'Data spotkania jest wymagana.';
    }

    if (count($msgs) === 0) {
        try {
            global $pdo;
            
            $stmt = $pdo->prepare("INSERT INTO meetings (creator_id, title, description, meeting_date) VALUES (:creator_id, :title, :description, :meeting_date)");
            $stmt->execute([
                'creator_id' => $_SESSION['user_id'],
                'title' => $title,
                'description' => $description,
                'meeting_date' => $meeting_date,
            ]);

            $msgs[] = 'Spotkanie zostało pomyślnie utworzone.';
        } catch (PDOException $e) {
            $msgs[] = 'Błąd połączenia z bazą danych: ' . $e->getMessage();
        }
    }
}

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Tworzenie spotkania');
$smarty->assign('page_description', 'Utwórz nowe spotkanie');
$smarty->assign('page_header', 'Tworzenie spotkania');

$smarty->assign('messages', $msgs);
$smarty->display(_ROOT_PATH.'/app/create_meeting.tpl');
