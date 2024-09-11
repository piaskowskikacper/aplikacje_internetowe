<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}



try {
    // Połączenie z bazą danych
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pobranie ID zalogowanego użytkownika
    $username = $_SESSION['username'];
    $stmt = $conn->prepare('SELECT id FROM users WHERE username = :username');
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];

    // Pobranie listy spotkań stworzonych przez użytkownika
    $stmt = $conn->prepare("SELECT id, title FROM meetings WHERE creator_id = :user_id AND meeting_date > NOW() " );
    $stmt->execute([':user_id' => $user_id]);
    $meetings = $stmt->fetchAll(PDO::FETCH_ASSOC);



    // Pobranie listy wszystkich użytkowników oprócz zalogowanego
    $stmt = $conn->prepare("SELECT id, username FROM users WHERE id != :user_id");
    $stmt->execute([':user_id' => $user_id]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Debugowanie: Sprawdź, czy listy są poprawnie pobrane
    if (!$meetings) {
       
        echo "Brak spotkań.";
    }
    if (!$users) {
        
        echo "Brak użytkowników.";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



// Przekazanie danych do szablonu Smarty
$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Wyślij zaproszenie');
$smarty->assign('meetings', $meetings);
$smarty->assign('users', $users);
$smarty->assign('page_header', 'Wyślij zaproszenie');

// Wyświetlenie szablonu
$smarty->display(_ROOT_PATH.'/app/invite.tpl');
