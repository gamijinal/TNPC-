<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us - TNPC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="contact-page">

        <!-- Page Title -->
        <div class="contact-hero text-center py-4">
            <h1>Contact TNPC</h1>
        </div>

        <!-- Contact Section -->
        <section class="container py-5">

            <div class="row shadow-lg rounded-4 overflow-hidden">

                <!-- LEFT SIDE (FORM) -->
                <div class="col-lg-6 p-5 bg-white">
                    <h3 class="mb-4 text-center contact-heading">Get In Touch</h3>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="contact-btn">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- RIGHT SIDE (INFO) -->
                <div class="col-lg-6 p-5 contact-info text-center">
                    <h3 class="mb-4">Contact Information</h3>

                    <p>📍 <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.9446285889003!2d72.39258927478757!3d23.6063186942936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c423000000007%3A0xd0e26b0c2022758d!2sThe%20New%20Progressive%20College%20Of%20Computer%20%26%20Management%20Studies%20(TNPC)!5e0!3m2!1sen!2sin!4v1770977515616!5m2!1sen!2sinloading="lazy">
                    Mehsana - 384001, Gujarat </a></p>
                    
                    <p>
                            📞 
                            <a href="tel:+919876543210" style="text-decoration:none; color:inherit;">
                                +91 9876543210
                            </a>
                        </p>

                        <p>
                            📧 
                            <a href="mailto:info@thenewprogressivecollege.ac.in" 
                            style="text-decoration:none; color:inherit;">
                                info@thenewprogressivecollege.ac.in
                            </a>
                        </p>
                    <p>🕒 Mon - Sat : 9AM - 5PM</p>
                </div>

            </div>

        </section>

        <!-- Map -->
        <section class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.9446285889003!2d72.39258927478757!3d23.6063186942936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c423000000007%3A0xd0e26b0c2022758d!2sThe%20New%20Progressive%20College%20Of%20Computer%20%26%20Management%20Studies%20(TNPC)!5e0!3m2!1sen!2sin!4v1770977515616!5m2!1sen!2sin"
                loading="lazy">
            </iframe>
        </section>

    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>