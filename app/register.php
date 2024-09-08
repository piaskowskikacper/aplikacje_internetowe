<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

session_start();

$form = [];
$msgs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobieranie danych z formularza
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Walidacja formularza
    if (empty($username)) {
        $msgs[] = 'Nazwa użytkownika jest wymagana.';
    }
    if (empty($email)) {
        $msgs[] = 'Adres e-mail jest wymagany.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msgs[] = 'Nieprawidłowy format adresu e-mail.';
    }
    if (empty($password)) {
        $msgs[] = 'Hasło jest wymagane.';
    }
    if ($password !== $confirm_password) {
        $msgs[] = 'Hasła nie są zgodne.';
    }

    if (count($msgs) === 0) {
        try {
            global $pdo;

            // Sprawdzenie, czy użytkownik o tej nazwie lub adresie e-mail już istnieje
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username OR email = :email");
            $stmt->execute(['username' => $username, 'email' => $email]);
            $existing_user = $stmt->fetch();

            if ($existing_user) {
                $msgs[] = 'Użytkownik o tej nazwie lub adresie e-mail już istnieje.';
            } else {
                // Hashowanie hasła
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Wstawienie nowego użytkownika do bazy danych
                $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, 'user')");
                $stmt->execute([
                    'username' => $username,
                    'email' => $email,
                    'password' => $hashed_password,
                ]);

                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $pdo->lastInsertId();

                $msgs[] = 'Rejestracja przebiegła pomyślnie. Przekierowanie na stronę główną...';
                header('Location: dashboard.php');
                exit;
            }
        } catch (PDOException $e) {
            $msgs[] = 'Błąd połączenia z bazą danych: ' . $e->getMessage();
        }
    }
}

$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Rejestracja');
$smarty->assign('page_description', 'Zarejestruj się w systemie');
$smarty->assign('page_header', 'Rejestracja użytkownika');

$smarty->assign('messages', $msgs);

$smarty->display(_ROOT_PATH.'/app/register.tpl');
?>
