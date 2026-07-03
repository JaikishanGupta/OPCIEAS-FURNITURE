<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Furniture Store</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include("./includes/header.php"); ?>

    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-3">Contact Us</h1>
                <p class="lead">Get in touch with our team for inquiries and custom furniture solutions</p>
            </div>
        </div>

        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <h3 class="mb-4">Send us a Message</h3>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <h3 class="mb-4">Contact Information</h3>

                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-map-marker-alt fa-2x text-warning me-4"></i>
                        <div>
                            <h5>Address</h5>
                            <p>123 Furniture Street<br>Industrial Area<br>City, State 12345<br>India</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone fa-2x text-warning me-4"></i>
                        <div>
                            <h5>Phone</h5>
                            <p>+91-XXXX-XXXX-XX<br>+91-XXXX-XXXX-XX</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope fa-2x text-warning me-4"></i>
                        <div>
                            <h5>Email</h5>
                            <p>info@furniture.com<br>sales@furniture.com</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <i class="fas fa-clock fa-2x text-warning me-4"></i>
                        <div>
                            <h5>Business Hours</h5>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <?php include("./includes/footer.php"); ?>
</body>
</html>
