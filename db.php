<?php
$host = 'localhost';       
$dbname = 'meeting_management'; 
$user = 'root';            
$pass = '';                

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "Connected successfully"; 
} catch (PDOException $e) {
    // Jeśli połączenie nie powiedzie się, zakończ skrypt i wyświetl komunikat błędu
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
