<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="../CSS/aboutcss.css">
</head>

<body>

<?php include 'header.php'; ?>

<div class="about-page">

    <!-- Page Title -->
    <!-- <div class="about-hero text-center py-4">
        <h1>ABOUT US</h1>
    </div> -->

    <!-- ================= TNPC SECTION ================= -->
    <section class="container py-5">

        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
            <img src="../images/tnpc_logo.png" alt="TNPC Logo" class="about-logo">
            <h2 class="mb-0">About Our College</h2>
        </div>

        <p class="about-text">
            With over 91 years of educational excellence in Mehsana, our institution is affiliated with Gujarat Technological University (GTU) and committed to delivering quality education with modern facilities.
            We offer career-focused programs like BCA and BBA, along with placement assistance, internship opportunities, and professional skill development. Our campus includes a well-equipped library and air-conditioned computer labs with internet access.
            Special training in soft skills, communication, leadership, and guidance for competitive exams like UPSC, GPSC, and IBPS ensures the overall development and career readiness of our students.
            During vacation periods, students are provided special CCC computer course facilities.
            Along with academic excellence, students are also given professional training with Placement Assistance and Internship Opportunities.
        </p>

    </section>


    <!-- ================= VISION & MISSION ================= -->
    <section class="highlight-section py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-md-6 col-lg-5">
                    <div class="vm-box text-center h-100">
                        <div class="vm-icon mb-3">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h4>Our Vision</h4>
                        <p>
                            To Empower students with knowledge and values, shaping them into confident leaders for a dynamic world.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5">
                    <div class="vm-box text-center h-100">
                        <div class="vm-icon mb-3">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <h4>Our Mission</h4>
                        <p>
                            Our Mission is to provide quality education with modern technology, foster creativity and teamwork, and prepare students for global opportunities through holistic development.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= SWARRNIM SECTION ================= -->
    <section class="container py-5">

        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
            <img src="../images/swarnim_logo.png" alt="Swarrnim Trust Logo" class="about-logo">
            <h2 class="mb-0">About Swarnim Trust</h2>
        </div>

        <p class="about-text">
            Swarnim India Charitable Foundation is a reputed non-profit (section 8) company having its basic instinct to cater student community by providing the best technology education and Management education with the help of experts.
            We have a team of experts having knowledge in web and mobile app development, cloud computing, cyber security, animation VFX and game design, IoT and Industry 4.0, Data Analytics.
            There is a shortage of employable talent, while industry demand is high. Our team, in consultation with industry, has designed programs to equip candidates with the required skills.
            We collaborate with various Gujarat Universities to deliver industry-oriented knowledge.
        </p>

    </section>


    <!-- ================= FACILITIES ================= -->
    <section class="container py-5">

        <h2 class="text-center mb-5">Our Facilities</h2>

        <div class="row g-4">

            <div class="col-sm-6 col-lg-3">
                <div class="facility-card text-center h-100">
                    <i class="fa-solid fa-briefcase icon"></i>
                    <h5>Placement Support</h5>
                    <p>Dedicated placement cell, internships and career guidance.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="facility-card text-center h-100">
                    <i class="fa-solid fa-chalkboard-user icon"></i>
                    <h5>Smart Classrooms</h5>
                    <p>Digital classrooms with projectors and modern seating.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="facility-card text-center h-100">
                    <i class="fa-solid fa-book icon"></i>
                    <h5>Library Facility</h5>
                    <p>Well-stocked library with academic and digital resources.</p>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="facility-card text-center h-100">
                    <i class="fa-solid fa-file-lines icon"></i>
                    <h5>Study Material</h5>
                    <p>Updated notes and practical-based learning resources.</p>
                </div>
            </div>

        </div>
    </section>

</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>