<?php
session_start();
// require_once '../config/db.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
//     $stmt->execute(['username' => $username]);
//     $user = $stmt->fetch();

//     if ($user && password_verify($password, $user['password'])) {
//         $_SESSION['user_id'] = $user['id'];
//         header("Location: dashboard.php");
//         exit;
//     } else {
//         $error = "Invalid username or password";
//     }
// }
// ?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>