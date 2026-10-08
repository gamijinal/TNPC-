<?php
session_start();
if (($_SESSION['role'] ?? '') != 'teacher') {
    header("Location: ../PHP/login.php");
    exit();
}
require __DIR__ . '/../Admin/db.php';
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO materials (course, title, file) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['course'], $_POST['title'], $_POST['file'] ?: null]);
    $msg = 'Material added.';
}
$rows = $conn->query("SELECT * FROM materials ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Study Materials</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="teacher.css">
</head>
<body>
<div class="main"><div class="topbar"><h3>Study Materials</h3><a href="dashboard.php" class="btn btn-light btn-sm">Back</a></div>
<div class="container mt-3" style="max-width:720px">
<?php if ($msg): ?><div class="alert alert-success"><?php echo $msg; ?></div><?php endif; ?>
<form method="post" class="card p-4 mb-3">
<div class="row"><div class="col"><label class="form-label">Course</label><select name="course" class="form-control"><option>BCA</option><option>BBA</option><option>All</option></select></div>
<div class="col"><label class="form-label">Title</label><input name="title" class="form-control" required></div></div>
<label class="form-label mt-2">File link (optional)</label><input name="file" class="form-control mb-3" placeholder="pdf/filename.pdf">
<button class="btn btn-primary">Add Material</button>
</form>
<table class="table table-bordered bg-white"><tr><th>Title</th><th>Course</th></tr>
<?php foreach ($rows as $m): ?><tr><td><?php echo htmlspecialchars($m['title']); ?></td><td><?php echo htmlspecialchars($m['course']); ?></td></tr><?php endforeach; ?>
</table>
</div></div>
</body>
</html>
