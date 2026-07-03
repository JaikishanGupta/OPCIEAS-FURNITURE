<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Furniture Store</title>
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
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 mb-3">About Our Company</h1>
                <p class="lead">We are a leading furniture manufacturer and exporter with 25+ years of experience.</p>
                <p>Our mission is to deliver premium furniture solutions that combine comfort, durability, and elegance for offices, institutions, hospitals, hotels, and homes across India and the globe.</p>
            </div>
            <div class="col-lg-6">
                <img src="./assets/images/Product/pro.jpg" class="img-fluid rounded" alt="About Us">
            </div>
        </div>

        <!-- Company Stats -->
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0 bg-light">
                    <div class="card-body">
                        <h3 class="text-warning">25+</h3>
                        <p class="card-text">Years of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0 bg-light">
                    <div class="card-body">
                        <h3 class="text-warning">5000+</h3>
                        <p class="card-text">Happy Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0 bg-light">
                    <div class="card-body">
                        <h3 class="text-warning">3000+</h3>
                        <p class="card-text">Products</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0 bg-light">
                    <div class="card-body">
                        <h3 class="text-warning">20+</h3>
                        <p class="card-text">Countries Served</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values -->
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-star fa-2x text-warning mb-3"></i>
                        <h5 class="card-title">Quality</h5>
                        <p class="card-text">We maintain the highest standards of quality in all our products through rigorous testing and ISO 9001:2015 certification.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-truck fa-2x text-warning mb-3"></i>
                        <h5 class="card-title">Delivery</h5>
                        <p class="card-text">Fast and reliable delivery across India with pan-India reach and professional installation services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-handshake fa-2x text-warning mb-3"></i>
                        <h5 class="card-title">Support</h5>
                        <p class="card-text">Dedicated customer support team ready to assist with queries, customization needs, and after-sales service.</p>
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
