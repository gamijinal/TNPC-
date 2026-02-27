<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BBA Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Header & Footer -->
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <!-- BBA CSS -->
    <link rel="stylesheet" href="../CSS/bba.css">
</head>

<body>

<?php include 'header.php'; ?>

<!-- Banner -->
<section class="bba-banner text-center">
    <div class="container">
        <h1>Bachelor of Business Administration (BBA)</h1>
        <p>Build Leadership & Business Excellence</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">

        <!-- Overview -->
        <div class="text-center mb-5">
            <h2 class="section-title">Course Overview</h2>
            <p class="w-75 mx-auto">
                BBA is a 3-year undergraduate management program designed
                to develop leadership, financial, and entrepreneurial skills.
            </p>
        </div>

        <!-- Info Boxes -->
        <div class="row text-center g-4 mb-5">

            <div class="col-md-3">
                <div class="info-box">
                    <i class="bi bi-calendar-event"></i>
                    <h5>Duration</h5>
                    <p>3 Years / 6 Semesters</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-box">
                    <i class="bi bi-mortarboard"></i>
                    <h5>Eligibility</h5>
                    <p>12th Pass (Any Stream)</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-box">
                    <i class="bi bi-people"></i>
                    <h5>Intake</h5>
                    <p>60 Students</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="info-box">
                    <i class="bi bi-briefcase"></i>
                    <h5>Internship</h5>
                    <p>Corporate Training Included</p>
                </div>
            </div>

        </div>

        <!-- Subjects -->
        <div class="mb-5">
           <!-- Subjects -->
<div class="mb-5">
    <h2 class="section-title text-center mb-4">Major Subjects</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-megaphone"></i>
                <h5>Marketing Management</h5>
                <p>Advertising, Branding & Market Strategy</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-cash-stack"></i>
                <h5>Financial Accounting</h5>
                <p>Financial Reports & Business Accounting</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-people"></i>
                <h5>Human Resource Management</h5>
                <p>Recruitment, Training & Workforce Planning</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-chat-dots"></i>
                <h5>Business Communication</h5>
                <p>Corporate Communication & Soft Skills</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-lightbulb"></i>
                <h5>Entrepreneurship</h5>
                <p>Startup Planning & Business Innovation</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-bank"></i>
                <h5>Business Law</h5>
                <p>Corporate & Commercial Legal Framework</p>
            </div>
        </div>

    </div>
</div>
        </div>

        <!-- Career -->
        <div class="text-center mb-5">
            <h2 class="section-title">Career Opportunities</h2>
            <p>
                Marketing Executive | HR Manager | Financial Analyst |
                Business Consultant | Entrepreneur
            </p>
        </div>

        <!-- Downloads -->
        <div class="text-center mb-4">
            <h2 class="section-title">Downloads</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="download-card text-center">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <h5>BBA Syllabus</h5>
                    <a href="../PHP/BBA_SYLLABUS.php" class="btn btn-danger">
    Download Syllabus</a>            </div>
            </div>

            <div class="col-md-6">
                <div class="download-card text-center">
                    <i class="bi bi-file-earmark-text"></i>
                    <h5>BBA Brochure</h5>
                    <a href="pdfs/bba_brochure.pdf" download class="btn btn-primary">
                        Download Brochure
                    </a>
                </div>
            </div>

        </div>

        <!-- Buttons -->
        <div class="text-center mt-5">
            <a href="inquiry.php" class="btn btn-primary btn-lg me-2">
                Inquiry Now
            </a>
            <a href="https://admissions.gtu.ac.in/" target="_blank"
               class="btn btn-success btn-lg">
               Apply Now
            </a>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>