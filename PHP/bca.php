<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BCA Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Header & Footer -->
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <!-- BCA CSS -->
    <link rel="stylesheet" href="../CSS/bca.css">
</head>

<body>

<?php include 'header.php'; ?>

<!-- Banner -->
<section class="bca-banner text-center">
    <div class="container">
        <h1>Bachelor of Computer Applications (BCA)</h1>
        <p>Build Your Career in IT & Software Development</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">

        <!-- Overview -->
        <div class="text-center mb-5">
            <h2 class="section-title">Course Overview</h2>
            <p class="w-75 mx-auto">
                BCA is a 3-year undergraduate program focused on
                programming, database management, AI, cybersecurity,
                and full-stack development.
            </p>
        </div>

        <!-- Info Boxes -->
        <!--<div class="row text-center g-4 mb-5"> -->
            <div class="row text-center g-4 mb-5 align-items-stretch">

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
                    <p>12th Pass Mathematics,Statistics,Computer (Any Stream)</p>
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
                    <i class="bi bi-laptop"></i>
                    <h5>Internship</h5>
                    <p>Live Projects & Industry Training</p>
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
                <i class="bi bi-code-slash"></i>
                <h5>Programming</h5>
                <p>C, C++, Java, Python</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-globe"></i>
                <h5>Web Development</h5>
                <p>HTML, CSS, PHP, JavaScript</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-database"></i>
                <h5>Database & Cloud</h5>
                <p>DBMS, Cloud Computing</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-cpu"></i>
                <h5>Artificial Intelligence</h5>
                <p>Machine Learning Basics</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="subject-card">
                <i class="bi bi-shield-lock"></i>
                <h5>Cyber Security</h5>
                <p>Network & Data Protection</p>
            </div>
        </div>
        <div class="col-md-4">
    <div class="subject-card">
        <i class="bi bi-phone"></i>
        <h5>Mobile App Development</h5>
        <p>Android & App Development Basics</p>
    </div>
</div>
    </div>
</div>
        </div>

        <!-- Career -->
        <div class="text-center mb-5">
            <h2 class="section-title">Career Opportunities</h2>
            <p>
                Software Developer | Web Developer |
                Cloud Engineer | Cyber Security Analyst
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
                    <h5>BCA Syllabus</h5>
                    <a href="../PHP/SYLLABUS.php" class="btn btn-danger">
                    Download Syllabus
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="download-card text-center">
                    <i class="bi bi-file-earmark-text"></i>
                    <h5>BCA Brochure</h5>
                    <a href="pdfs/bca_brochure.pdf" download class="btn btn-primary">
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