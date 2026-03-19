<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Courses - TNPC Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <?php include "sidemenu.php"; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="topbar">
                <h1>Manage Courses</h1>
                <button type="button" class="custom-btn" onclick="openCourseAdd()">Add Course</button>
            </div>

            <!-- Courses Table -->
            <div class="table-container">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BCA</td>
                        <td>3 Years</td>
                        <td class="action-icons">
                            <i class="fa-solid fa-pen-to-square edit-icon" onclick="openCourseEdit(this)"></i>
                            <i class="fa-solid fa-trash delete-icon" onclick="deleteRow(this)"></i>
                        </td>
                    </tr>
                    
                </table>
            </div>
            <div id="courseModal" class="modal">

                <div class="modal-content">

                    <span class="close-btn" onclick="closeModal('courseModal')">&times;</span>

                    <h2 id="modalTitle">Add Course</h2>

                    <input type="hidden" id="editRowIndex">

                    <label>Course Name</label>
                    <input type="text" id="courseName">

                    <label>Duration</label>
                    <input type="text" id="courseDuration">

                    <button type="button" class="custom-btn" onclick="saveCourse()">Save Changes</button>

                </div>

            </div>
        </div>
    </div>
    <script src="model.js"></script>
</body>

</html>