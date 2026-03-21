<?php
// Start session at the very top
session_start();

// Include database connection
include __DIR__ . '/db.php';

// Handle form submission
$success = '';
if (isset($_POST['add_course'])) {
    $name = $_POST['name'];
    $short_name = $_POST['short_name'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];
    $features = $_POST['features']; // comma separated
    $icon_class = $_POST['icon_class'];
    $overlay_class = $_POST['overlay_class'];
    $link = $_POST['link'];

    // Prepare and execute insert query
    $stmt = $conn->prepare("INSERT INTO courses 
        (name, short_name, duration, description, features, icon_class, overlay_class, link) 
        VALUES (:name, :short_name, :duration, :description, :features, :icon_class, :overlay_class, :link)");

    $stmt->execute([
        ':name' => $name,
        ':short_name' => $short_name,
        ':duration' => $duration,
        ':description' => $description,
        ':features' => $features,
        ':icon_class' => $icon_class,
        ':overlay_class' => $overlay_class,
        ':link' => $link
    ]);

    $success = "Course added successfully!";
}

// Fetch all courses
$courses = $conn->query("SELECT * FROM courses ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Courses</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        /* Optional quick styling */
        body { font-family: Arial, sans-serif; margin: 20px; }
        input, textarea, button { display: block; margin: 10px 0; padding: 8px; width: 300px; }
        table { border-collapse: collapse; margin-top: 20px; width: 100%; }
        table, th, td { border: 1px solid #aaa; }
        th, td { padding: 8px; text-align: left; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Manage Courses</h2>

    <?php if ($success): ?>
        <p class="success"><?= $success ?></p>
    <?php endif; ?>

    <!-- Add New Course Form -->
    <form method="POST">
        <h3>Add New Course</h3>
        <input type="text" name="name" placeholder="Course Name" required>
        <input type="text" name="short_name" placeholder="Short Name (Badge)" required>
        <input type="text" name="duration" placeholder="Duration" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="features" placeholder="Features (comma separated)">
        <input type="text" name="icon_class" placeholder="Icon Class (e.g., bi-display)">
        <input type="text" name="overlay_class" placeholder="Overlay Class (e.g., blue-overlay)">
        <input type="text" name="link" placeholder="Course Detail Page Link (e.g., bca.php)">
        <button type="submit" name="add_course">Add Course</button>
    </form>

    <!-- Existing Courses Table -->
    <h3>Existing Courses</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Short Name</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($courses)): ?>
            <?php foreach ($courses as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['name'] ?></td>
                <td><?= $c['short_name'] ?></td>
                <td><?= $c['duration'] ?></td>
                <td>
                    <a href="edit_course.php?id=<?= $c['id'] ?>">Edit</a> |
                    <a href="delete_course.php?id=<?= $c['id'] ?>" onclick="return confirm('Delete this course?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No courses found.</td></tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>