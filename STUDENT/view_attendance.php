<?php
session_start();
if (($_SESSION['role'] ?? '') != 'student') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$enroll = $_SESSION['enrollment_no'] ?? 'S001';
$stmt = $conn->prepare("SELECT * FROM attendance WHERE enrollment_no = ? ORDER BY att_date DESC");
$stmt->execute([$enroll]);
$rows = $stmt->fetchAll();
$total = count($rows);
$present = count(array_filter($rows, fn($r) => strtolower($r['status']) === 'present'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Attendance</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="student.css">
</head>
<body>
<div class="topbar"><h3>My Attendance (<?php echo htmlspecialchars($enroll); ?>)</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-4">
<?php if ($total): ?><p><strong>Present:</strong> <?php echo $present; ?> / <?php echo $total; ?> days</p><?php endif; ?>
<table class="table table-bordered bg-white"><tr><th>Date</th><th>Status</th></tr>
<?php foreach ($rows as $r): ?>
<tr><td><?php echo htmlspecialchars($r['att_date']); ?></td><td><?php echo htmlspecialchars($r['status']); ?></td></tr>
<?php endforeach; ?>
</table>
<?php if (!$rows): ?><div class="alert alert-warning">No attendance records yet.</div><?php endif; ?>
</div>
</body>
</html>
