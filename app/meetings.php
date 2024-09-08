<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

function getParams(&$form) {
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['password'] = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
}

function validate(&$form, &$msgs) {
    // Sprawdzenie, czy login i hasło zostały podane
    if (!isset($form['login']) || !isset($form['password'])) {
        $msgs[] = 'Nie podano loginu lub hasła.';
        return false;
    }

    // Sprawdzenie, czy pola nie są puste
    if ($form['login'] === '' || $form['password'] === '') {
        $msgs[] = 'Login i hasło są wymagane.';
        return false;
    }

    return true;
}

function process(&$form, &$infos, &$msgs) {
    global $pdo; // Dodanie globalnej zmiennej $pdo

    if (validate($form, $msgs)) {
        $login = $form['login'];
        $password = $form['password'];

        try {
            // Sprawdzenie, czy użytkownik istnieje w bazie danych
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :login");
            $stmt->execute(['login' => $login]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) { // Porównanie hasła bez hashowania
                // Zalogowanie użytkownika
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                $infos[] = 'Zalogowano pomyślnie. Przekierowanie na stronę główną...';

                header("Location: dashboard.php"); // Przekierowanie na stronę główną
                exit;
            } else {
                $msgs[] = 'Niepoprawny login lub hasło.';
            }
        } catch (PDOException $e) {
            $msgs[] = 'Błąd połączenia z bazą danych: ' . $e->getMessage();
        }
    }
}


$form = [];
$infos = [];
$msgs = [];

getParams($form);
process($form, $infos, $msgs);

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Projekt zaliczeniowy');
$smarty->assign('page_description', 'Organizator spotkań');
$smarty->assign('page_header', 'Szablony smarty');

$smarty->assign('form', $form);
$smarty->assign('messages', $msgs);
$smarty->assign('infos', $infos);

$smarty->display(_ROOT_PATH.'/app/meetings.tpl');
