<?php
// Teacher email login (uses shared PDO + users table)
session_start();
require __DIR__ . '/../Admin/db.php';

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND role = 'teacher'");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['email'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['role'] = 'teacher';

    header("Location: ../TEACHER/dashboard.php");
    exit();

} else {
    echo "Invalid Teacher Login";
}
?>
