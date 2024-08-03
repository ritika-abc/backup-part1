<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Labsky - Laboratory HTML Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="text-capitalize">
                    <marquee behavior="" direction="">
                        <small class="me-3"><i class="fa fa-map-marker-alt me-2   "></i> 238b/15 south
                            street,chatrapatti factory: 294-h, arumugathevar nagar,ayyanapuram,chatraptti, rajapalayam ,
                            tamilnadu , india-626102

                        </small>
                    </marquee>

                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span><a href="tel:9028955202" class="text-white">+91 9028955202</a></span>
                    </div>
                </div>
                <a href="index.php" class="h1 text-white mb-0"><img src="img/logo/logo.jpg" height="100px" width="100px" alt=""></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span><a href="mailto:globalsurgicareindia@gmail.com" class="text-white">globalsurgicareindia@gmail.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/logo/logo.jpg" height="100px" width="100px" alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                         
                        <div class="nav-item dropdown">
                            <a href="product.php" class="nav-link dropdown-toggle  " >Product</a>
                            <div class="dropdown-menu bg-light m-0">
                                <?php
                                include "db.php";

                                $sel = "SELECT * FROM `pro`";
                                $q = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($q)) {

                                ?>
                                    <a href="single-product.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item"><?php echo $row['pro_name'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                    <img class="img-fluid" src="img/product/3.jpg">


                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Welcome to <strong class="text-primary">GLOBAL SURGICARE</strong></h1>
                    <p class="mb-4">We are manufacturing Surgical disposables that are made from high quality raw
                        materials such as natural virgin material. All products are packed in Air clean room.
                    </p>
                    <ul class="border-end border-primary border-5">
                        <li>100% virgin raw material</li>
                        <li>Available in customized Packaging Facility</li>
                        <li>10 Years Experience</li>
                        <li>We are ISO 13485:2016 certified</li>
                    </ul>


                    <!-- <table class="table table-hover mt-4">
                    <tr>
                        <td>text</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>text</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>text</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>text</td>
                        <td>text</td>
                    </tr>
                  </table> -->
                </div>
            </div>
            <div class="row mt-5">
            <div class="col-12">
                <p>At <strong>GLOBAL SURGICARE</strong>, we're dedicated to advancing healthcare by providing top-quality surgical equipment and supplies to medical professionals worldwide. With a commitment to innovation, precision, and reliability, we strive to enhance patient outcomes and streamline surgical procedures.</p>
            </div>
            <p><strong>Our Mission</strong>

                Our mission is to empower healthcare providers with the tools they need to deliver exceptional care. We aim to be a trusted partner, offering a comprehensive range of surgical instruments, devices, and accessories that meet the highest standards of quality and performance.</p>
            <p>
                <strong> Quality Assurance</strong>

                Quality is at the core of everything we do. We adhere to stringent quality control measures throughout the manufacturing process to ensure that every product meets or exceeds industry standards. From design to delivery, we prioritize precision and reliability to inspire confidence in our customers.
            </p>
            <p><strong>Innovation</strong>

                We are committed to driving innovation in the field of surgical equipment. Through ongoing research and development, we continuously seek to improve existing products and introduce new solutions that address the evolving needs of healthcare providers. Our team of engineers and medical experts collaborate closely to develop cutting-edge technologies that enhance surgical outcomes and patient safety.</p>
        </div>
        </div>
        
    </div>
    <!-- About End -->


    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="h1 text-primary mb-0"><img src="img/logo/logo.jpg" height="100px" width="100px" alt="logo"></h1>
                    </a>
                    <p class="fs-5 mb-4">We are manufacturing Surgical disposables that are made from high quality raw materials such as natural virgin material. All products are packed in Air clean room.</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>2 238b/15 south
                            street,chatrapatti factory: 294-h, arumugathevar nagar,ayyanapuram,chatraptti, rajapalayam ,
                            tamilnadu , india-626102</p>
                    <p><i class="fa fa-phone-alt me-2"></i> +91 9028955202</p>
                    <p><i class="fa fa-envelope me-2"></i>globalsurgicareindia@gmail.com</p>

                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Our Services</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Support</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign
                                        Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href=" GLOBAL SURGICARE"> GLOBAL SURGICARE</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">

                    <p class="mb-0">Designed by <a href="https://web2export.com">web2export.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>