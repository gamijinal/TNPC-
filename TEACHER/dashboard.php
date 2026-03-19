<!-- ================= TEACHER DASHBOARD (teacher/dashboard.php) ================= -->
<?php
session_start();
if($_SESSION['role'] != 'teacher'){
    header("Location: ../teacher_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teacher Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="teacher.css">
</head>
<body>
<div class="sidebar">
<h2>TNPC Teacher</h2>
<a href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
<a href="add_student.php"><i class="bi bi-person-plus"></i> Add Student</a>
<a href="attendance.php"><i class="bi bi-calendar-check"></i> Attendance</a>
<a href="marks.php"><i class="bi bi-journal-text"></i> Marks</a>
<a href="material.php"><i class="bi bi-upload"></i> Material</a>
<a href="../logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<div class="main">
<div class="topbar">
<h3>Dashboard</h3>
<span>Welcome Teacher</span>
</div>

<div class="row g-4 mt-2">
<div class="col-md-3"><div class="card p-3"><h6>Total Students</h6><h2>120</h2></div></div>
<div class="col-md-3"><div class="card p-3"><h6>Classes Today</h6><h2>5</h2></div></div>
<div class="col-md-3"><div class="card p-3"><h6>Assignments</h6><h2>8</h2></div></div>
<div class="col-md-3"><div class="card p-3"><h6>Pending</h6><h2>2</h2></div></div>
</div>

<div class="table-box mt-4">
<h5>Recent Students</h5>
<table class="table">
<tr><th>Name</th><th>Course</th><th>Status</th></tr>
<tr><td>Rahul</td><td>BCA</td><td>Active</td></tr>
<tr><td>Pooja</td><td>BBA</td><td>Active</td></tr>
</table>
</div>
</div>
</body>
</html>
