<?php
require_once dirname(__FILE__).'/../config.php';

// Połączenie z bazą danych
global $pdo;

session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    header('Location: meetings.php');
    exit();
}

try {
    // Pobranie danych z formularza
    $meeting_id = isset($_POST['meeting_id']) ? $_POST['meeting_id'] : null;
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;

    // Sprawdzenie, czy podano meeting_id i user_id
    if ($meeting_id && $user_id) {

        // Sprawdzenie, czy zaproszenie już istnieje
        $stmt = $pdo->prepare("SELECT * FROM invitations WHERE meeting_id = :meeting_id AND user_id = :user_id");
        $stmt->execute([':meeting_id' => $meeting_id, ':user_id' => $user_id]);
        $existing_invitation = $stmt->fetch();

        if ($existing_invitation) {
            // Jeśli zaproszenie już istnieje
            echo "<h2>Zaproszenie dla tego użytkownika na to spotkanie zostało już wcześniej wysłane!</h2>";
            echo "<p>Za chwilę nastąpi przekierowanie do dashboardu...</p>";
            echo "<a href='dashboard.php'>Kliknij tutaj, aby powrócić do dashboardu.</a>";
            
            // Przekierowanie do dashboardu po 3 sekundach
            header("refresh:3;url=dashboard.php");
            exit();
        } else {
            // Jeśli zaproszenie nie istnieje, wysyłamy nowe
            $stmt = $pdo->prepare("INSERT INTO invitations (meeting_id, user_id, status) VALUES (:meeting_id, :user_id, 'pending')");
            $stmt->execute([':meeting_id' => $meeting_id, ':user_id' => $user_id]);

            // Wyświetlenie komunikatu o sukcesie i przekierowanie
            echo "<h2>Zaproszenie zostało wysłane pomyślnie!</h2>";
            echo "<p>Za chwilę nastąpi przekierowanie do dashboardu...</p>";
            echo "<a href='dashboard.php'>Kliknij tutaj, aby powrócić do dashboardu.</a>";

            // Przekierowanie do dashboardu po 3 sekundach
            header("refresh:3;url=dashboard.php");
            exit();
        }
    } else {
        echo "<p>Wystąpił błąd. Proszę spróbować ponownie.</p>";
        echo "<a href='invite.php'>Powrót do formularza zaproszenia</a>";
    }

} catch (PDOException $e) {
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
    die();
}
