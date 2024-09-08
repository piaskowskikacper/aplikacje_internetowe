<?php
session_start();
session_unset(); // Usunięcie wszystkich zmiennych sesji
session_destroy(); // Zniszczenie sesji

// Przekierowanie użytkownika na stronę logowania
header('Location: meetings.php');
exit();