
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/placement.css">
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

        <?php
        // 5 hero slides: har slide ki apni image + apna text.
        // Upar tumne jo 5 photos bheji hai unko is naam se save karo:
        //   images/hero1.jpg (college gate)
        //   images/hero2.jpg (classroom group / Brain Battle)
        //   images/hero3.jpg (Independence Day stage)
        //   images/hero4.jpg (Computer Lab / Teacher's Day)
        //   images/hero5.jpg (Unity & Pride)
        // Same ratio me crop karo (1920x800) taaki slider jump na kare.
        // Jab tak hero images nahi dali, purani demo images dikhengi.
        $defaultHero = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', 'slider1.png'];
        $heroImgs = [];
        for ($i = 1; $i <= 5; $i++) {
            $found = '';
            foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
                if (file_exists(__DIR__ . "/../images/hero{$i}.{$ext}")) {
                    $found = "../images/hero{$i}.{$ext}";
                    break;
                }
            }
            if ($found === '') {
                $found = "../images/" . $defaultHero[$i - 1];
            }
            $heroImgs[] = $found;
        }

        $gcas = "https://gcasadmin.gujgov.edu.in/";
        $heroSlides = [
            [
                'img'    => $heroImgs[0],
                'alt'    => 'TNPC College Campus - Admissions Open 2026-27',
                'badge'  => 'Admissions Open 2026–27',
                'title'  => 'Empowering Future <span class="text-orange">Tech & Business</span> Leaders',
                'sub'    => 'Admissions Open 2026–27 — BCA & BBA programs with industry-ready skills, modern infrastructure and 100% placement assistance.',
                'btn1'   => 'Apply Now',
                'btn1_link' => $gcas,
                'btn1_blank' => true,
                'btn2'   => 'Explore BCA & BBA',
                'btn2_link' => '#courses',
            ],
            [
                'img'    => $heroImgs[1],
                'alt'    => 'Brain Battle Quiz and Technical Competitions',
                'badge'  => 'Beyond Classrooms',
                'title'  => 'Fostering <span class="text-orange">Innovation</span> & Critical Thinking',
                'sub'    => 'Annual Quiz Competitions, Debates & Technical Challenges — Brain Battle and beyond.',
                'btn1'   => 'Explore Activities',
                'btn1_link' => 'about.php',
                'btn2'   => 'Apply Now',
                'btn2_link' => $gcas,
                'btn2_blank' => true,
            ],
            [
                'img'    => $heroImgs[2],
                'alt'    => 'Independence Day Celebration at Campus',
                'badge'  => 'Celebrating Unity & Pride at Campus',
                'title'  => 'Instilling Values, <span class="text-orange">Leadership</span> & Patriotism',
                'sub'    => "Independence Day Celebrations — Empowering the youth to build tomorrow's nation.",
                'btn1'   => 'View Campus Life',
                'btn1_link' => 'about.php',
                'btn2'   => 'Explore Activities',
                'btn2_link' => '#courses',
            ],
            [
                'img'    => $heroImgs[3],
                'alt'    => "Teacher's Day and Cultural Celebrations",
                'badge'  => 'Vibrant Campus Life',
                'title'  => 'Cherished <span class="text-orange">Traditions</span> & Celebrations',
                'sub'    => "Teacher's Day & Youth Fest — Celebrating guidance, talent, and creativity together.",
                'btn1'   => 'View Campus Life',
                'btn1_link' => 'about.php',
                'btn2'   => 'Apply Now',
                'btn2_link' => $gcas,
                'btn2_blank' => true,
            ],
            [
                'img'    => $heroImgs[4],
                'alt'    => 'Unity and Pride at TNPC Campus',
                'badge'  => 'Unity & Pride',
                'title'  => 'Celebrating <span class="text-orange">Unity</span> & Pride at Campus',
                'sub'    => "Independence Day Celebrations — Empowering the youth to build tomorrow's nation.",
                'btn1'   => 'Explore Activities',
                'btn1_link' => 'about.php',
                'btn2'   => 'Apply Now',
                'btn2_link' => $gcas,
                'btn2_blank' => true,
            ],
        ];
        ?>

        <div id="mainHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">

            <!-- Indicators : 5 dots, one by one -->
            <div class="carousel-indicators hero-dots">
                <?php foreach ($heroSlides as $idx => $s) { ?>
                    <button type="button" data-bs-target="#mainHeroCarousel" data-bs-slide-to="<?php echo $idx; ?>" class="<?php echo $idx === 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $idx + 1; ?>"></button>
                <?php } ?>
            </div>

            <!-- Slides : har slide me apni image + apna text -->
            <div class="carousel-inner hero-carousel-inner">
                <?php foreach ($heroSlides as $idx => $s) { ?>
                    <div class="carousel-item <?php echo $idx === 0 ? 'active' : ''; ?>">
                        <img src="<?php echo $s['img']; ?>" class="d-block w-100 hero-bg-img" alt="<?php echo htmlspecialchars($s['alt']); ?>">
                        <div class="hero-overlay"></div>
                        <div class="hero-content-wrap">
                            <div class="hero-content">
                                <span class="hero-badge"><?php echo $s['badge']; ?></span>
                                <h1><?php echo $s['title']; ?></h1>
                                <p><?php echo $s['sub']; ?></p>
                                <div class="hero-btns">
                                    <a href="<?php echo $s['btn1_link']; ?>" <?php echo !empty($s['btn1_blank']) ? 'target="_blank"' : ''; ?> class="btn-explore"><?php echo $s['btn1']; ?></a>
                                    <a href="<?php echo $s['btn2_link']; ?>" <?php echo !empty($s['btn2_blank']) ? 'target="_blank"' : ''; ?> class="btn-apply-outline"><?php echo $s['btn2']; ?></a>
                                </div>
                                <div class="hero-stats">
                                    <div class="hero-stat">
                                        <strong>91+</strong>
                                        <span>Years Legacy</span>
                                    </div>
                                    <div class="hero-stat">
                                        <strong>2</strong>
                                        <span>Programs</span>
                                    </div>
                                    <div class="hero-stat">
                                        <strong>60</strong>
                                        <span>Seats Per Program</span>
                                    </div>
                                    <div class="hero-stat">
                                        <strong>100%</strong>
                                        <span>Placement Assistance</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Prev / Next arrows -->
            <button class="carousel-control-prev hero-arrow" type="button" data-bs-target="#mainHeroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next hero-arrow" type="button" data-bs-target="#mainHeroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

    </section>

    <!-- Course section starts -->
    <section class="course-section py-5" id="courses">
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

    <!-- ===== RECRUITING PARTNERS | Placement Companies ===== -->
    <section class="recruiting-wrapper">
        <div class="recruiting-arch">
            <!-- floating badges – only our recruiters -->
            <div class="recruit-float f1 c-tcs">tcs</div>
            <div class="recruit-float f2 c-infosys">Infosys</div>
            <div class="recruit-float f3">amazon</div>
            <div class="recruit-float f4 c-tatva">TatvaSoft</div>
            <div class="recruit-float f5 c-hdfc">HDFC BANK</div>
            <div class="recruit-float f6 c-cipla">Cipla</div>

            <h2 class="recruiting-title">Recruiting Partners</h2>
            <p class="recruiting-sub">Our students get placement assistance & internship opportunities with leading IT, banking, pharma and consulting companies.</p>

            <!-- Row 1: Top 12 – Tech / Skill partners (total 29 me se 12) -->
            <div class="placement-marquee">
                <div class="marquee-row">
                    <div class="company-card c-adobe">Adobe</div>
                    <div class="company-card c-aws">amazon <small>web services</small></div>
                    <div class="company-card c-autodesk">AUTODESK</div>
                    <div class="company-card">Microsoft</div>
                    <div class="company-card c-ecc">EC-Council</div>
                    <div class="company-card c-comptia">CompTIA</div>
                    <div class="company-card c-gcloud">Google Cloud</div>
                    <div class="company-card c-ibm">IBM</div>
                    <div class="company-card c-mile">mile</div>
                    <div class="company-card c-vmware">vmware</div>
                    <div class="company-card c-linux">Red Hat Linux</div>
                    <div class="company-card c-cisco">CISCO</div>
                    <!-- duplicate for loop -->
                    <div class="company-card c-adobe">Adobe</div>
                    <div class="company-card c-aws">amazon <small>web services</small></div>
                    <div class="company-card c-autodesk">AUTODESK</div>
                    <div class="company-card">Microsoft</div>
                    <div class="company-card c-ecc">EC-Council</div>
                    <div class="company-card c-comptia">CompTIA</div>
                    <div class="company-card c-gcloud">Google Cloud</div>
                    <div class="company-card c-ibm">IBM</div>
                    <div class="company-card c-mile">mile</div>
                    <div class="company-card c-vmware">vmware</div>
                    <div class="company-card c-linux">Red Hat Linux</div>
                    <div class="company-card c-cisco">CISCO</div>
                </div>
                <!-- Row 2: Placement companies -->
                <div class="marquee-row reverse">
                    <div class="company-card c-growexx">GROWEXX</div>
                    <div class="company-card">amazon</div>
                    <div class="company-card c-argu">argu soft</div>
                    <div class="company-card c-byjus">BYJU'S</div>
                    <div class="company-card c-cipla">Cipla</div>
                    <div class="company-card c-hdfc">HDFC BANK</div>
                    <div class="company-card c-ibm">IBM</div>
                    <div class="company-card c-indus">IndusInd Bank</div>
                    <div class="company-card c-infosys">Infosys</div>
                    <div class="company-card c-odoo">odoo</div>
                    <div class="company-card c-rawwell">RAWWELL STUDIO</div>
                    <div class="company-card c-simform">SIMFORM</div>
                    <div class="company-card c-tata">TATA</div>
                    <div class="company-card c-tcs">tcs</div>
                    <div class="company-card c-tatva">TatvaSoft</div>
                    <div class="company-card c-wish">Wishtree Technologies</div>
                    <div class="company-card c-zydus">zydus</div>
                    <!-- duplicate for loop -->
                    <div class="company-card c-growexx">GROWEXX</div>
                    <div class="company-card">amazon</div>
                    <div class="company-card c-argu">argu soft</div>
                    <div class="company-card c-byjus">BYJU'S</div>
                    <div class="company-card c-cipla">Cipla</div>
                    <div class="company-card c-hdfc">HDFC BANK</div>
                    <div class="company-card c-ibm">IBM</div>
                    <div class="company-card c-indus">IndusInd Bank</div>
                    <div class="company-card c-infosys">Infosys</div>
                    <div class="company-card c-odoo">odoo</div>
                    <div class="company-card c-rawwell">RAWWELL STUDIO</div>
                    <div class="company-card c-simform">SIMFORM</div>
                    <div class="company-card c-tata">TATA</div>
                    <div class="company-card c-tcs">tcs</div>
                    <div class="company-card c-tatva">TatvaSoft</div>
                    <div class="company-card c-wish">Wishtree Technologies</div>
                    <div class="company-card c-zydus">zydus</div>
                </div>
            </div>
        </div>

        <!-- Placement overview bar -->
        <div class="placement-overview">
            <div class="overview-heading"><h2>PLACEMENT OVERVIEW</h2></div>
            <div class="overview-stats">
                <div class="stat-box">
                    <div class="stat-num">29<small>+</small></div>
                    <div class="stat-label">Recruiting Partners</div>
                </div>
                <div class="stat-box">
                    <div class="stat-num">100<small>%</small></div>
                    <div class="stat-label">Placement Assistance</div>
                </div>
                <div class="stat-box">
                    <div class="stat-num">12 <small>LPA</small></div>
                    <div class="stat-label">Highest Package</div>
                </div>
                <div class="stat-box">
                    <div class="stat-num">50<small>+</small></div>
                    <div class="stat-label">Internship Tie-ups</div>
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

       <div class="row">

<?php

$stmt = $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT 4");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>

<div class="col-md-6 mb-4">

    <a href="<?php echo $row['link']; ?>" class="news-link">

        <div class="news-card d-flex">

            <div class="news-img">
                <img src="../images/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" width="120">
            </div>

            <div class="news-content">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo substr($row['description'], 0, 80); ?>...</p>
            </div>

        </div>

    </a>

</div>

<?php } ?>

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