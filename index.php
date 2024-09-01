<!-- 
// require_once dirname(__FILE__).'/config.php';

// require_once _ROOT_PATH.'/app/meetings.php';

// include _ROOT_PATH.'/app/meetings.tpl'; -->


<?php
// Dołączenie pliku konfiguracyjnego z połączeniem do bazy danych
require_once './db.php';

// Proste zapytanie do bazy danych
try {
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll();

    if ($users) {
        echo "Połączenie z bazą danych działa poprawnie. Liczba użytkowników: " . count($users);
    } else {
        echo "Połączenie z bazą danych działa, ale tabela 'users' jest pusta.";
    }
} catch (PDOException $e) {
    echo "Błąd: " . $e->getMessage();
}
?>
