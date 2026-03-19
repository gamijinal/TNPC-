<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News & Updates - TNPC Admin</title>

    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>

    <div class="dashboard">

        <!-- Sidebar -->

        <?php include "sidemenu.php"; ?>


        <!-- Main Content -->

        <div class="main-content">

            <div class="topbar">

                <h1>News & Updates</h1>

                <button class="custom-btn" onclick="openAddModal()">Add News</button>

            </div>


            <!-- News Table -->

            <div class="table-container">

                <table>

                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>


                    <tr>
                        <td>1</td>
                        <td>Admissions Open 2026</td>
                        <td>12 May 2026</td>

                        <td class="action-icons">

                            <i class="fa-solid fa-pen-to-square edit-icon" onclick="openEditModal(this)"></i>

                            <i class="fa-solid fa-trash delete-icon" onclick="deleteRow(this)"></i>

                        </td>

                    </tr>

                </table>


            </div>

            <!-- Edit Modal -->
            <div id="editModal" class="modal">

                <div class="modal-content">

                    <span class="close-btn" onclick="closeModal()">&times;</span>

                    <h2 id="modalTitle">Edit News</h2>

                    <form id="editForm">

                        <input type="hidden" id="editRowIndex">

                        <label>Title</label>
                        <input type="text" id="editTitle">

                        <label>Date</label>
                        <input type="date" id="editDate">

                        <label>Image</label>
                        <input type="file" id="editImage">

                        <button type="button" class="custom-btn" onclick="saveData()">Save Changes</button>

                    </form>

                </div>

            </div>
        </div>

    </div>

   <script src="model.js"></script>
</body>

</html>