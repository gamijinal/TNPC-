<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Careers | TNPC</title>
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

    <style>
        .career-hero {
            background: linear-gradient(rgba(13, 59, 102, 0.9), rgba(13, 59, 102, 0.9)), url('../images/slider1.png') center/cover;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .job-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-left: 5px solid var(--secondary_color);
            margin-bottom: 20px;
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        .badge-type {
            background: rgba(242, 100, 25, 0.1);
            color: var(--secondary_color);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<section class="career-hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Join Our Team</h1>
        <p class="lead">Shape the future of education with TNPC. Explore current openings.</p>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Current Openings</h2>
        <p class="text-muted">We are always looking for passionate individuals to join our academic and administrative staff.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <!-- Job 1 -->
            <div class="job-card d-md-flex justify-content-between align-items-center">
                <div>
                    <span class="badge-type">Full-Time</span>
                    <h4 class="mt-2 fw-bold">Assistant Professor - Computer Science</h4>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt me-2"></i>Mehsana, Gujarat | <i class="bi bi-briefcase me-2"></i>3+ Years Exp.</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <button class="custom-btn">Apply Now</button>
                </div>
            </div>

            <!-- Job 2 -->
            <div class="job-card d-md-flex justify-content-between align-items-center">
                <div>
                    <span class="badge-type">Full-Time</span>
                    <h4 class="mt-2 fw-bold">Administrative Officer</h4>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt me-2"></i>Mehsana, Gujarat | <i class="bi bi-briefcase me-2"></i>2+ Years Exp.</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <button class="custom-btn">Apply Now</button>
                </div>
            </div>

            <div class="text-center mt-5">
                <p>Don't see a position that fits? Send your resume to <a href="mailto:info@tnpc.edu.in" class="text-decoration-none fw-bold">info@tnpc.edu.in</a></p>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
