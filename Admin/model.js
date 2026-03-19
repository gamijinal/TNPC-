// Open Modal
function openEditModal(el) {

    isEdit = true;
    let row = el.closest("tr");

    let title = row.children[1].innerText;
    let date = row.children[2].innerText;

    document.getElementById("editTitle").value = title;
    document.getElementById("editDate").value = date;
    document.getElementById("editRowIndex").value = row.rowIndex;

    document.getElementById("editModal").style.display = "flex";
}

// Close Modal
function closeModal() {
    document.getElementById("editModal").style.display = "none";
}

// Save Changes
function saveData() {

    let title = document.getElementById("editTitle").value;
    let date = document.getElementById("editDate").value;

    let table = document.querySelector("table");

    if (isEdit) {

        let index = document.getElementById("editRowIndex").value;

        table.rows[index].cells[1].innerText = title;
        table.rows[index].cells[2].innerText = date;

    } else {

        let rowCount = table.rows.length;

        let newRow = table.insertRow();

        newRow.innerHTML = `
        <td>${rowCount}</td>
        <td>${title}</td>
        <td>${date}</td>
        <td class="action-icons">
            <i class="fa-solid fa-pen-to-square edit-icon" onclick="openEditModal(this)"></i>
            <i class="fa-solid fa-trash delete-icon" onclick="deleteRow(this)"></i>
        </td>
        `;
    }

    closeModal();
}

// Delete Row
function deleteRow(el) {

    let row = el.closest("tr");
    row.remove();

    updateIDs();
}

// Auto Update IDs
function updateIDs() {

    let table = document.querySelector("table");

    for (let i = 1; i < table.rows.length; i++) {
        table.rows[i].cells[0].innerText = i;
    }
}

let isEdit = false;

// ADD NEWS
function openAddModal() {

    isEdit = false;

    document.getElementById("modalTitle").innerText = "Add News";

    document.getElementById("editTitle").value = "";
    document.getElementById("editDate").value = "";

    document.getElementById("editModal").style.display = "flex";
}



// ADD COURSE
function openCourseAdd() {

    isEdit = false;

    document.getElementById("modalTitle").innerText = "Add Course";

    document.getElementById("courseName").value = "";
    document.getElementById("courseDuration").value = "";

    document.getElementById("courseModal").style.display = "flex";
}

// EDIT COURSE
function openCourseEdit(el) {

    isEdit = true;

    let row = el.closest("tr");

    let name = row.children[1].innerText;
    let duration = row.children[2].innerText;

    document.getElementById("modalTitle").innerText = "Edit Course";

    document.getElementById("courseName").value = name;
    document.getElementById("courseDuration").value = duration;

    document.getElementById("editRowIndex").value = row.rowIndex;

    document.getElementById("courseModal").style.display = "flex";
}

// SAVE COURSE
function saveCourse() {

    let name = document.getElementById("courseName").value;
    let duration = document.getElementById("courseDuration").value;

    let table = document.querySelector("table");

    if (isEdit) {

        let index = document.getElementById("editRowIndex").value;

        table.rows[index].cells[1].innerText = name;
        table.rows[index].cells[2].innerText = duration;

    } else {

        let rowCount = table.rows.length;

        let newRow = table.insertRow();

        newRow.innerHTML = `
        <td>${rowCount}</td>
        <td>${name}</td>
        <td>${duration}</td>
        <td class="action-icons">
            <i class="fa-solid fa-pen-to-square edit-icon" onclick="openCourseEdit(this)"></i>
            <i class="fa-solid fa-trash delete-icon" onclick="deleteRow(this)"></i>
        </td>
        `;
    }

    function closeModal(id) {
        document.getElementById(id).style.display = "none";
    }

    closeModal('courseModal');
}