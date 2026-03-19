<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include DB connection
include '../admin/db.php';
session_start(); // Must be at top, before any output

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get form data
    $role = $_POST['role']; // admin/teacher/student
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate role
    $allowed_roles = ['admin', 'teacher', 'student'];
    if (!in_array($role, $allowed_roles)) {
        die("Invalid role selected.");
    }

    // Table name matches role
    $table = $role;

    // Prepare query safely
    $stmt = $conn->prepare("SELECT * FROM $table WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user) {
        // Plain-text password check
        if ($password === trim($user['password'])) {
            // Set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $role;

            // Redirect based on role
            if ($role === 'admin') {
    header("Location: ../Admin/index.php"); // correct path based on your structure
                exit();
            } elseif ($role === 'teacher') {
                header("Location: teacher_dashboard.php");
                exit();
            } else {
                header("Location: student_dashboard.php");
                exit();
            }
        } else {
            echo "<script>alert('Incorrect password'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location='login.php';</script>";
    }
}
?>