<?php
session_start();
if (($_SESSION['role'] ?? '') != 'student') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$enroll = $_SESSION['enrollment_no'] ?? 'S001';
$stmt = $conn->prepare("SELECT * FROM marks WHERE enrollment_no = ? ORDER BY subject");
$stmt->execute([$enroll]);
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Marks</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="student.css">
</head>
<body>
<div class="topbar"><h3>My Marks (<?php echo htmlspecialchars($enroll); ?>)</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-4">
<table class="table table-bordered bg-white"><tr><th>Subject</th><th>Marks</th></tr>
<?php foreach ($rows as $r): ?>
<tr><td><?php echo htmlspecialchars($r['subject']); ?></td><td><?php echo (int)$r['marks']; ?></td></tr>
<?php endforeach; ?>
</table>
<?php if (!$rows): ?><div class="alert alert-warning">No marks published yet.</div><?php endif; ?>
</div>
</body>
</html>
