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
                            <a href="about.php" class="custom-btn">Explore Courses</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="hero-slide slide2">
                        <div class="hero-content">
                            <h1>Admission Open 2026-27</h1>
                            <p>Enroll now for BCA & BBA programs with placement assistance.</p>
                            <a href="#" class="custom-btn">Apply Now</a>
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

            <!-- Section Heading -->
            <div class="text-center mb-5 section-heading">
                <span class="sub-title">OUR COURSES</span>
                <h2>Discover Your Path to Success</h2>
                <p>
                    Our industry-linked programs are designed in collaboration with experts
                    to match current market demands. Choose the path that shapes your career.
                </p>
            </div>

            <div class="row g-4">

                <!-- BCA Card -->
                <div class="col-lg-6">
                    <div class="course-card">

                        <div class="course-img blue-overlay">
                            <i class="bi bi-display"></i>
                        </div>

                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3>BCA</h3>
                                <span class="duration-badge blue-badge">3 Years / 6 Sem</span>
                            </div>

                            <h5>Bachelor of Computer Applications</h5>
                            <p>
                                Build the tech future. A degree focused on programming,
                                app development, AI, cybersecurity, and cloud computing.
                            </p>

                            <ul>
                                <li>Web & Mobile Dev (HTML, PHP, Android)</li>
                                <li>Programming (C, C++, Java, Python)</li>
                                <li>Database & Cloud Infrastructure</li>
                            </ul>
                            <a href="bca.php" class="course-btn">
                                View More Details
                            </a>
                        </div>

                    </div>
                </div>

                <!-- BBA Card -->
                <div class="col-lg-6">
                    <div class="course-card">

                        <div class="course-img orange-overlay">
                            <i class="bi bi-briefcase"></i>
                        </div>

                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3>BBA</h3>
                                <span class="duration-badge orange-badge">3 Years / 6 Sem</span>
                            </div>

                            <h5>Bachelor of Business Administration</h5>
                            <p>
                                Lead the business world. Equip yourself with knowledge
                                and leadership skills to stand out in corporate life.
                            </p>

                            <ul>
                                <li>Marketing & Finance Strategies</li>
                                <li>Entrepreneurship & Startup Skills</li>
                                <li>Soft Skills & Corporate Leadership</li>
                            </ul>
                            <a href="bba.php" class="course-btn">
                                View More Details
                            </a>
                        </div>

                    </div>
                </div>

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

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="news-card d-flex">
                        <div class="news-img">
                            <img src="/images/1.jpg" alt="">
                        </div>
                               <h4>Education Your Way</h4>
                            <p>There’s only one required course for undergraduates.</p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="news-card d-flex">
                        <div class="news-img">
                            <img src="/images/2.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <h4>Research is in Our DNA</h4>
                            <p>Students and faculty collaborate to make discoveries.</p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="news-card d-flex">
                        <div class="news-img">
                            <img src="/images/3.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <h4>The City We Call Home</h4>
                            <p>We’re nestled between the river and downtown life.</p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6">
                    <div class="news-card d-flex">
                        <div class="news-img">
                            <img src="/images/4.jpg" alt="">
                        </div>
                        <div class="news-content">
                            <h4>Amazing Value</h4>
                            <p>Top rankings based on quality education and value.</p>
                            <a href="#" class="read-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
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