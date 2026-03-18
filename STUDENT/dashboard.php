<?php
session_start();
if($_SESSION['role'] != 'student'){
    header("Location: ../student_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="student.css">
</head>
<body>
<div class="topbar">
<h3>TNPC Student Panel</h3>
<a href="../logout.php" class="btn btn-light btn-sm">Logout</a>
</div>

<div class="container mt-4">
<h4>Welcome Student</h4>

<div class="row g-4 mt-3">
<div class="col-md-4"><div class="card p-4 text-center"><i class="bi bi-journal-text fs-1"></i><h5 class="mt-2">My Marks</h5><a href="view_marks.php" class="btn btn-primary mt-2">View</a></div></div>
<div class="col-md-4"><div class="card p-4 text-center"><i class="bi bi-calendar-check fs-1"></i><h5 class="mt-2">Attendance</h5><a href="view_attendance.php" class="btn btn-primary mt-2">View</a></div></div>
<div class="col-md-4"><div class="card p-4 text-center"><i class="bi bi-folder fs-1"></i><h5 class="mt-2">Materials</h5><a href="materials.php" class="btn btn-primary mt-2">View</a></div></div>
</div>
</div>
</body>
</html>


/* ================= TEACHER CSS ================= */
