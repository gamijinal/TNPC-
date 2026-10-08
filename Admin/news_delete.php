<?php
include 'db.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT image FROM news WHERE id=?");
$stmt->execute([$id]);
$row = $stmt->fetch();

if($row){
    unlink("uploads/" . $row['image']);
}

$stmt = $conn->prepare("DELETE FROM news WHERE id=?");
$stmt->execute([$id]);

header("Location: news_update.php");
?>