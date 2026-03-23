
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">

    <title>HOME</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <a href="inquiry_submit.php" class="enquiry-btn">Enquire Now</a>
    <!-- <section class="hero-slider">
        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Indicators --
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
            </div>

            <!-- Slides --
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="/images/1.jpg" class="d-block w-100 hero-img" alt="Slide 1">
                </div>

                <div class="carousel-item">
                    <img src="/images/2.jpg" class="d-block w-100 hero-img" alt="Slide 2">
                </div>

                <div class="carousel-item">
                    <img src="/images/3.jpg" class="d-block w-100 hero-img" alt="Slide 3">
                </div>

            </div>

        </div>
    </section> -->
    <section class="hero-slider">

        <div id="mainHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainHeroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainHeroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainHeroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="hero-slide slide1">
                        <div class="hero-content">
                            <h1>Welcome to TNPC</h1>
                            <p>Empowering students with knowledge, innovation and leadership.</p>
                            <a href="about.php" class="custom-btn">Explore More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="hero-slide slide2">
                        <div class="hero-content">
                            <h1>Admission Open 2026-27</h1>
                            <p>Enroll now for BCA & BBA programs with placement assistance.</p>
    <a href="https://gcasadmin.gujgov.edu.in/" target="_blank" class="btn btn-warning">
    Apply Now
</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="hero-slide slide3">
                        <div class="hero-content">
                            <h1>Annual Tech Fest 2026</h1>
                            <p>A Grand Success Event</p>
                            <a href="#" class="custom-btn">View Gallery</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Course section starts -->
    <section class="course-section py-5">
    <div class="container">

        <div class="text-center mb-5 section-heading">
            <span class="sub-title">OUR COURSES</span>
            <h2>Discover Your Path to Success</h2>
            <p>
                Our industry-linked programs are designed in collaboration with experts
                to match current market demands. Choose the path that shapes your career.
            </p>
        </div>

        <div class="row g-4">
            <?php
            include '../Admin/db.php'; // DB connection

            $stmt = $conn->query("SELECT * FROM courses ORDER BY id ASC");
            while($course = $stmt->fetch(PDO::FETCH_ASSOC)){
                $features = explode(',', $course['features']); // convert features to array
            ?>
            <div class="col-lg-6">
                <div class="course-card">
                    <div class="course-img <?php echo $course['overlay_class']; ?>">
    <i class="bi <?php echo $course['icon_class']; ?>"></i>
</div>
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3><?php echo $course['short_name']; ?></h3>
                            <span class="duration-badge <?php echo $course['overlay_class']; ?>"><?php echo $course['duration']; ?></span>
                        </div>

                        <h5><?php echo $course['name']; ?></h5>
                        <p><?php echo $course['description']; ?></p>

                        <ul>
                            <?php foreach($features as $feature){ ?>
                                <li><?php echo trim($feature); ?></li>
                            <?php } ?>
                        </ul>

                        <a href="<?php echo $course['link']; ?>" class="course-btn">View More Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

    <!-- news and updation seciton  -->
    <section class="news-section py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5 section-heading">
                <span class="sub-title">NEWS & UPDATES</span>
                <h2>Stay Informed, Stay Ahead</h2>
                <p>
                    Explore the latest events, achievements, campus activities,
                    and important announcements from our college community.
                </p>
            </div>

            <div class="row">

                <!-- Card 1 -->
                <a href="news-details.php" class="news-link">
                    <div class="news-card d-flex">

                        <div class="news-img">
                            <img src="/images/1.jpg" alt="">
                        </div>

                        <div class="news-content">
                            <h4>Education Your Way</h4>
                            <p>There’s only one required course for undergraduates.</p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="news.php" class="news-btn">
                View All News & Updates
            </a>
        </div>
    </section>


    <!-- Admission Popup Modal -->
    <div class="modal fade" id="admissionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 position-relative">

                <!-- Close Button -->
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>

                <!-- Banner Image -->
                <img src="../images/add.png" alt="Admission Open 2026-27" class="img-fluid rounded">

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var admissionModal = new bootstrap.Modal(document.getElementById('admissionModal'));
            admissionModal.show();
        });
    </script>


    <!-- <script src="bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>