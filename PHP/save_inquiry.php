<?php
include __DIR__ . '/../admin/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $stmt = $conn->prepare("INSERT INTO inquiries (name, phone, email, city, course, qualification)
                           VALUES (:name, :phone, :email, :city, :course, :qualification)");

    $stmt->execute([
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
        ':city' => $_POST['city'],
        ':course' => $_POST['course'],
        ':qualification' => $_POST['qualification']
    ]);

    echo "success";
}
?>