<?php
// Student email login (uses shared PDO + users table)
session_start();
require __DIR__ . '/../Admin/db.php';

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND role = 'student'");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['email'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['role'] = 'student';
    $_SESSION['enrollment_no'] = $user['enrollment_no'];

    header("Location: ../STUDENT/dashboard.php");
    exit();

} else {
    echo "Invalid Student Login";
}
?>
