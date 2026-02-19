<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/index.css">
    <title>Home</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Banner section starts -->
    <section class="slider">
        <div class="slides">
            <img src="/images/1.jpg" class="slide" alt="Slide 1">
            <img src="/images/2.jpg" class="slide" alt="Slide 2">
            <img src="/images/3.jpg" class="slide" alt="Slide 3">
        </div>
        <!-- Dots -->
        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <!-- Banner section ends -->

    <!-- Course Overview section starts -->
    <section class="course_section">

        <div class="section_title">
            <h2>Our Programs</h2>
            <p>Explore our professional undergraduate courses</p>
        </div>

        <div class="course_overview">
            <div class="course_card">
                <h3>BCA</h3>
                <p>
                    The Bachelor of Computer Applications (BCA) focuses on programming,
                    database management, web development, and software technologies.
                </p>
                <a href="#">Read More</a>
            </div>

            <div class="course_card">
                <h3>BBA</h3>
                <p>
                    The Bachelor of Business Administration (BBA) develops leadership,
                    management, marketing, and entrepreneurial skills.
                </p>
                <a href="#">Read More</a>
            </div>
        </div>

    </section>
    <!-- Course Overview section ends -->

    <!-- News section starts -->
    <section class="news_section">
        <div class="section_title">
            <h2>Latest News & Updates</h2>
            <p>Stay updated with our latest announcements and activities</p>
        </div>
        <div class="news_card">
            <div class="news_row">

                <div class="news_image">
                    <img src="images/news1.jpg" alt="News">
                </div>

                <h3 class="news_title">Annual Cultural Fest 2026</h3>

                <a href="#" class="read_btn">Read More</a>

            </div>
            <div class="news_row">

                <div class="news_image">
                    <img src="images/news1.jpg" alt="News">
                </div>

                <h3 class="news_title">Annual Cultural Fest 2026</h3>

                <a href="#" class="read_btn">Read More</a>

            </div>
        </div>

    </section>
    <!-- News section ends -->

    <script src="../JS/index.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>