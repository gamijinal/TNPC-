<?php
include __DIR__ . '/../Admin/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="5">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TNPC Admin Dashboard</title>

    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">


</head>

<body>

    <div class="dashboard">

        <!-- Sidebar -->

        <?php include "sidemenu.php"; ?>

        <div class="main-content">

            <!-- Main Content -->

            <div class="main-content">

                <!-- Topbar -->

                <div class="topbar">

                    <h1>Dashboard</h1>

                    <div class="admin-info">
                        Admin Panel
                    </div>


                </div>


                <!-- Cards -->

                <div class="cards">

                    <a href="manage_course.php" class="card-link">

                        <div class="card">

                            <h3><i class="fa-solid fa-book"></i> Total Courses</h3>
                            <p>2</p>

                        </div>

                    </a>
                    <div class="card">
                        <h3>Total Enquiry</h3>

                        <?php
                        $stmt = $conn->query("SELECT COUNT(*) as total FROM inquiries");
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>

                        <p><?php echo $data['total']; ?></p>

                    </div>


                    <div class="card">

                        <h3>Faculty Members</h3>

                        <p>12</p>

                    </div>
<a href="news_update.php" class="card-link">
    <div class="card">

        <h3>News Updates</h3>

        <?php
        $stmt = $conn->query("SELECT COUNT(*) as total FROM news");
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <p><?php echo $data['total']; ?></p>

    </div>
</a>

                </div>


                <!-- Recent Activity Table -->

                <div class="recent">



                    <h2>All Inquiries</h2>

                    <table border="1" cellpadding="10" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Course</th>
                            <th>Qualification</th>
                            <th>Date</th>
                        </tr>

                        <?php
                        $stmt = $conn->query("SELECT * FROM inquiries ORDER BY id DESC");

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['course']; ?></td>
                                <td><?php echo $row['qualification']; ?></td>
                                <td><?php echo date("d M Y", strtotime($row['created_at'])); ?></td>
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

        </div>

    </div>

</body>

</html>