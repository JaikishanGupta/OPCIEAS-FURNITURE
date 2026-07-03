<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .footer-section {
            background: linear-gradient(135deg, #07152f, #0b1f44);
            color: #fff;
            padding: 80px 0 25px;
        }

        .footer-box h3 {
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #ff7a00;
        }

        .footer-box h4 {
            font-size: 22px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-box h4::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 45px;
            height: 3px;
            background: #ff7a00;
        }

        .footer-box p {
            color: #c9d3e0;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .footer-box ul {
            list-style: none;
            padding: 0;
        }

        .footer-box ul li {
            margin-bottom: 14px;
        }

        .footer-box ul li a {
            text-decoration: none;
            color: #c9d3e0;
            transition: .3s;
        }

        .footer-box ul li a:hover {
            color: #ff7a00;
            padding-left: 6px;
        }

        .contact-info li {
            color: #c9d3e0;
        }

        .contact-info i {
            color: #ff7a00;
            margin-right: 10px;
        }

        .social-icons {
            display: flex;
            gap: 12px;
        }

        .social-icons a {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .08);
            color: #fff;
            text-decoration: none;
            transition: .4s;
        }

        .social-icons a:hover {
            background: #ff7a00;
            transform: translateY(-5px);
        }

        .footer-bottom {
            margin-top: 45px;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, .12);
            text-align: center;
        }

        .footer-bottom p {
            margin: 0;
            color: #b8c3d1;
        }

        
        @media(max-width:992px) {
            .footer-section {
                padding: 60px 0 20px;
            }
        }

        
        @media(max-width:576px) {
            .footer-box h3 {
                font-size: 28px;
            }

            .footer-box h4 {
                font-size: 20px;
            }

            .footer-bottom p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <footer class="footer-section" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">

               
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-box">
                        <h3>OPCIEAS</h3>
                        <p>
                            Premium furniture solutions for office, home,
                            hospital, hotel and industrial spaces with modern designs.
                        </p>

                        <div class="social-icons">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="footer-box">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="footer-box">
                        <h4>Products</h4>
                        <ul>
                            <li><a href="#">Office Chair</a></li>
                            <li><a href="#">Workstation</a></li>
                            <li><a href="#">Conference Table</a></li>
                            <li><a href="#">Sofa Set</a></li>
                        </ul>
                    </div>
                </div>

              
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <h4>Contact Info</h4>
                        <ul class="contact-info">
                            <li><i class="fa-solid fa-location-dot"></i> Delhi, India</li>
                            <li><i class="fa-solid fa-phone"></i> +91 9876543210</li>
                            <li><i class="fa-solid fa-envelope"></i> info@furniture.com</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p>© 2026 OPCIEAS Furniture. All Rights Reserved.</p>
            </div> 
        </div> 
    </footer>
</body>

</html>