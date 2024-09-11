<?php
require_once dirname(__FILE__).'/../config.php';

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}

try {
    // Połączenie z bazą danych
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pobranie danych z formularza
    if (isset($_POST['invitation_id']) && isset($_POST['action'])) {
        $invitation_id = $_POST['invitation_id'];
        $action = $_POST['action'];

        // Ustawienie statusu na 'accepted' lub 'rejected'
        if ($action === 'accept') {
            $status = 'accepted';
        } elseif ($action === 'reject') {
            $status = 'rejected';
        } else {
            header('Location: respond_invitations.php');
            exit();
        }

        // Aktualizacja statusu zaproszenia
        $stmt = $conn->prepare("UPDATE invitations SET status = :status WHERE id = :invitation_id");
        $stmt->execute([':status' => $status, ':invitation_id' => $invitation_id]);

        // Przekierowanie z powrotem na stronę zaproszeń
        header('Location: respond_invitation.php');
        exit();
    }

} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    die();
}
?>
