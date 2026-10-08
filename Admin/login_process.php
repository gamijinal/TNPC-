<?php

session_start();

include "db.php";

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->execute([$username]);
$admin = $stmt->fetch();

if ($admin && password_verify($password, $admin['password'])) {

    $_SESSION['admin'] = $username;
    $_SESSION['user_id'] = $admin['id'];
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin';

    header("Location: index.php");
    exit();

} else {

    echo "Invalid Login";

}

?>
