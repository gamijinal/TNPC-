<?php
session_start();
if (($_SESSION['role'] ?? '') != 'student') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$rows = $conn->query("SELECT * FROM materials ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Study Materials</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="student.css">
</head>
<body>
<div class="topbar"><h3>Study Materials</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-4">
<table class="table table-bordered bg-white"><tr><th>Title</th><th>Course</th><th>File</th></tr>
<?php foreach ($rows as $m): ?>
<tr><td><?php echo htmlspecialchars($m['title']); ?></td><td><?php echo htmlspecialchars($m['course'] ?? 'All'); ?></td>
<td><?php echo $m['file'] ? '<a href="' . htmlspecialchars($m['file']) . '">Download</a>' : '<span class="text-muted">Available at office</span>'; ?></td></tr>
<?php endforeach; ?>
</table>
<?php if (!$rows): ?><div class="alert alert-warning">No materials uploaded yet.</div><?php endif; ?>
</div>
</body>
</html>
