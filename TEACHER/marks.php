<?php
session_start();
if (($_SESSION['role'] ?? '') != 'teacher') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO marks (enrollment_no, subject, marks) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['enrollment_no'], $_POST['subject'], $_POST['marks']]);
    $msg = 'Marks saved.';
}
$students = $conn->query("SELECT enrollment_no FROM students ORDER BY enrollment_no")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Marks</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="teacher.css">
</head>
<body>
<div class="main"><div class="topbar"><h3>Add Marks</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-3" style="max-width:560px">
<?php if ($msg): ?><div class="alert alert-success"><?php echo $msg; ?></div><?php endif; ?>
<form method="post" class="card p-4">
<label class="form-label">Student</label>
<select name="enrollment_no" class="form-control mb-2"><?php foreach ($students as $s): ?><option><?php echo htmlspecialchars($s['enrollment_no']); ?></option><?php endforeach; ?></select>
<label class="form-label">Subject</label><input name="subject" class="form-control mb-2" required>
<label class="form-label">Marks</label><input type="number" name="marks" class="form-control mb-3" min="0" max="100" required>
<button class="btn btn-primary">Save</button>
</form>
</div></div>
</body>
</html>
