<?php include 'header.php'; ?>

<section class="course_page">
    <link rel="stylesheet" href="../CSS/courses_css.css">

    <div class="section_title">
        <h2>Our Courses</h2>
        <p>Explore detailed information about our programs</p>
    </div>

    <?php
    // GET parameter thi course check karo
    $course = isset($_GET['course']) ? $_GET['course'] : '';

    // === BCA Section ===
    if($course == 'bca') { // Default BCA show if no parameter
    ?>
        <div class="course_detail">
            <h3>Bachelor of Computer Applications (BCA)</h3>

            <p><strong>Duration:</strong> 3 Years (6 Semesters)</p>

            <p><strong>Eligibility Criteria:</strong><br>
            • 12th Pass (Any Stream)<br>
            • Minimum 45% Marks<br>
            • Basic Computer Knowledge Preferred
            </p>

            <p><strong>Course Highlights:</strong><br>
            • Programming (C, C++, Java, Python)<br>
            • Web Development<br>
            • Database Management<br>
            • Software Engineering
            </p>

            <div class="course_buttons">
                <a href="contact.php" class="btn_inquiry">Inquiry</a>
                <a href="admission.php" class="btn_apply">Apply Now</a>
            </div>
        </div>
    <?php
    }

    // === BBA Section ===
    if($course == 'bba') { // Show only if ?course=bba
    ?>
        <div class="course_detail">
            <h3>Bachelor of Business Administration (BBA)</h3>

            <p><strong>Duration:</strong> 3 Years (6 Semesters)</p>

            <p><strong>Eligibility Criteria:</strong><br>
            • 12th Pass (Any Stream)<br>
            • Minimum 45% Marks
            </p>

            <p><strong>Course Highlights:</strong><br>
            • Business Management<br>
            • Marketing & Finance<br>
            • Human Resource Management<br>
            • Entrepreneurship Development
            </p>

            <div class="course_buttons">
                <a href="contact.php" class="btn_inquiry">Inquiry</a>
                <a href="admission.php" class="btn_apply">Apply Now</a>
            </div>
        </div>
    <?php
    }

    // === If invalid parameter ===
    if($course != 'bca' && $course != 'bba' && $course != '') {
        echo "<p>Course not found. Please go back to the <a href='index.php'>Home Page</a>.</p>";
    }
    ?>

</section>

<?php include 'footer.php'; ?>