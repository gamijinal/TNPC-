<!DOCTYPE html>
<html lang="en">

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

<<<<<<< HEAD
                    </div>
=======
<li><a href="#">Slider Images</a></li>

<li><a href="logout.php">Logout</a></li>
</ul>

</div>
>>>>>>> 2fb91bf9b05562a6acf2fbc2a2fb2a5569190377


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

                            <p>35</p>

                        </div>


                        <div class="card">

                            <h3>Faculty Members</h3>

                            <p>12</p>

                        </div>

                        <a href="news_update.php" class="card-link">
                            <div class="card">

                                <h3>News Updates</h3>

                                <p>4</p>

                            </div>
                        </a>

                    </div>


                    <!-- Recent Activity Table -->

                    <div class="recent">

                        <h2>Recent Admissions</h2>

                        <table>

                            <tr>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Date</th>
                            </tr>

                            <tr>
                                <td>Rahul Patel</td>
                                <td>BCA</td>
                                <td>12 May 2026</td>
                            </tr>

                            <tr>
                                <td>Pooja Shah</td>
                                <td>BBA</td>
                                <td>10 May 2026</td>
                            </tr>

                            <tr>
                                <td>Amit Mehta</td>
                                <td>BCA</td>
                                <td>08 May 2026</td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

</body>

</html>