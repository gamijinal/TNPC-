<?php
session_start();
if (($_SESSION['role'] ?? '') != 'teacher') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO users (role, enrollment_no, email, password, name) VALUES ('student', ?, ?, ?, ?)");
    $stmt->execute([$_POST['enrollment_no'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['name']]);
    $uid = $conn->lastInsertId();
    $stmt = $conn->prepare("INSERT INTO students (user_id, enrollment_no, course, semester) VALUES (?, ?, ?, ?)");
    $stmt->execute([$uid, $_POST['enrollment_no'], $_POST['course'], $_POST['semester']]);
    $msg = 'Student added successfully.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="teacher.css">
</head>
<body>
<div class="main"><div class="topbar"><h3>Add Student</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-3" style="max-width:560px">
<?php if ($msg): ?><div class="alert alert-success"><?php echo $msg; ?></div><?php endif; ?>
<form method="post" class="card p-4">
<label class="form-label">Name</label><input name="name" class="form-control mb-2" required>
<label class="form-label">Email</label><input type="email" name="email" class="form-control mb-2" required>
<label class="form-label">Password</label><input name="password" class="form-control mb-2" required>
<label class="form-label">Enrollment No</label><input name="enrollment_no" class="form-control mb-2" required>
<label class="form-label">Course</label><select name="course" class="form-control mb-2"><option>BCA</option><option>BBA</option></select>
<label class="form-label">Semester</label><input type="number" name="semester" class="form-control mb-3" value="1" min="1" max="6">
<button class="btn btn-primary">Add Student</button>
</form>
</div></div>
</body>
</html>
