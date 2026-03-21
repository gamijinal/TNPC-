
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

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Inquiry - TNPC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- YOUR EXISTING CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <!-- INQUIRY CSS -->
    <link rel="stylesheet" href="../CSS/inquiry.css">
</head>

<body>

<?php include 'header.php'; ?>

<!-- PAGE HEADER -->
 <header class="main-header text-center mt-4">
    <h1>Admission Inquiry</h1>
</header>

<!-- INQUIRY SECTION -->
<section class="inquiry-section py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <div class="card shadow p-4 border-0">
                    <h4 class="text-center mb-4">Fill Your Details</h4>

                    <form method="POST" id="inquiryForm"</form>

                        <div class="mb-3">
                        <input type="text" name="name" id="name" class="form-control" required 
       pattern="[A-Za-z ]{3,}" 
       onkeypress="return onlyLetters(event)">        
                    </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile Number *</label>
                            <input type="tel" name="phone" class="form-control" required pattern="[0-9]{10}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">City *</label>
                            <input type="text" name="city" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Course Interested *</label>
                            <select name="course" class="form-select" required>
                                <option value="">Select Course</option>
                                <option>BBA</option>
                                <option>BCA</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Qualification</label>
                            <select name="qualification" class="form-select">
                                <option value="">Select Qualification</option>
                                <option>12th Pass</option>
                                <option>Graduate</option>
                                <option>Post Graduate</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-check mt-2">
                         <input class="form-check-input" type="checkbox" id="agree" required>
    
                             <label class="form-check-label small" for="agree">
                                I agree to receive updates from TNPC College via Email, SMS, WhatsApp, or calls as per the 
                                    <a href="#" class="text-primary text-decoration-none">Privacy Policy</a>.
                            </label>
                        </div>
                        <p class="small text-muted text-center">
                            We respect your privacy. Your details will not be shared.
                        </p>

                                        <button type="submit" name="submit" class="btn btn-primary w-100">
                                        Submit Inquiry
                                    </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔥 YAHAN ADD KARO -->
<script>
document.getElementById("inquiryForm").addEventListener("submit", function(e){
    e.preventDefault();

    let formData = new FormData(this);

    fetch("save_inquiry.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if(data === "success"){
            alert("Submitted Successfully");
            document.getElementById("inquiryForm").reset();
        }
    });
});
</script>


</body>
</html>