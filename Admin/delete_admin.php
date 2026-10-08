<?php

include "db.php";

$id = (int)($_GET['id'] ?? 0);

$stmt = $conn->prepare("DELETE FROM admin WHERE id = ?");
$stmt->execute([$id]);

header("Location: manage_admin.php");
exit();

?>
