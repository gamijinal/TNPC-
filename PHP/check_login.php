<?php
// Role login: admin / teacher / student (tables: admin, teacher, student)
session_start(); // Must be at top, before any output

// Include DB connection (shared PDO)
include __DIR__ . '/../Admin/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get form data
    $role = $_POST['role'] ?? ''; // admin/teacher/student
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validate role
    $allowed_roles = ['admin', 'teacher', 'student'];
    if (!in_array($role, $allowed_roles)) {
        die("Invalid role selected.");
    }

    // Table name matches role (safe: validated above)
    $table = $role;

    // Prepare query safely
    $stmt = $conn->prepare("SELECT * FROM $table WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'] ?? $user['username'];
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role === 'admin') {
            header("Location: ../Admin/index.php");
            exit();
        } elseif ($role === 'teacher') {
            header("Location: ../TEACHER/dashboard.php");
            exit();
        } else {
            header("Location: ../STUDENT/dashboard.php");
            exit();
        }
    } else {
        echo "<script>alert('Invalid username or password'); window.location='login.php';</script>";
    }
}
?>
