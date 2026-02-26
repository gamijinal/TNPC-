<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBA - TNPC</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<link rel="stylesheet" href="CSS/header.css">
<link rel="stylesheet" href="/CSS/footer.css">
</head>

<body>

<!-- HEADER -->
<?php include 'header.php'; ?>

<!-- Banner Section -->
<section class="text-white text-center d-flex align-items-center"
    style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('../images/2.jpg') center/cover;height:320px;">
    <div class="container">
        <h1 class="fw-bold">Bachelor of Business Administration (BBA)</h1>
        <p>Lead the Future of Business & Management</p>
    </div>
</section>

<!-- Main Content -->
<section class="container py-5">

    <div class="mb-4">
        <h2 class="fw-bold">Course Overview</h2>
        <p>
            BBA is a 3-year management program focused on leadership,
            entrepreneurship, finance, marketing, and corporate strategy.
        </p>
    </div>

    <div class="mb-4">
        <h2 class="fw-bold">Course Highlights</h2>
        <ul class="list-group">
            <li class="list-group-item">Marketing & Finance</li>
            <li class="list-group-item">Human Resource Management</li>
            <li class="list-group-item">Entrepreneurship Development</li>
            <li class="list-group-item">Business Communication</li>
            <li class="list-group-item">Corporate Internships</li>
        </ul>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <h5 class="fw-bold">Eligibility</h5>
            <p>12th Pass (Any Stream) – Minimum 45%</p>
        </div>
        <div class="col-md-6">
            <h5 class="fw-bold">Duration</h5>
            <p>3 Years (6 Semesters)</p>
        </div>
    </div>

    <div class="mb-4">
        <h2 class="fw-bold">Career Opportunities</h2>
        <ul>
            <li>Marketing Executive</li>
            <li>HR Manager</li>
            <li>Financial Analyst</li>
            <li>Entrepreneur</li>
        </ul>
    </div>

    <!-- Buttons -->
    <div class="text-center mt-5">

        <a href="inquiry.php" class="btn btn-primary btn-lg me-2">
            Inquiry Now
        </a>

        <a href="https://admissions.gtu.ac.in/" target="_blank"
           class="btn btn-success btn-lg me-2">
           Apply Now
        </a>

        <a href="pdfs/bba_brochure.pdf" download
           class="btn btn-warning btn-lg me-2">
           Download Brochure
        </a>

        <a href="pdfs/bba_syllabus.pdf" download
           class="btn btn-dark btn-lg">
           Download Syllabus
        </a>

    </div>

</section>

<!-- FOOTER -->
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>