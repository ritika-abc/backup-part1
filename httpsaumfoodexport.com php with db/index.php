<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruits And Vegetables exporters in Saudi Arabia || Aumfood</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="keywords" content=" Fruits and Vegetables exporters in Bangladesh ,Fruits And Vegetables exporters in Saudi Arabia , Fruits and Vegetables exporters in Netherlands "/ >

    <meta name="description" content="Fruits And Vegetables exporters in Saudi Arabia Leading firms shipping fresh produce worldwide, leveraging and, strategic location and advanced logistics for 9optimal deliver on time"/>
    
<link rel="canonical" href="https://aumfoodexport.com/">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
<meta name="google-site-verification" content="UcHFX-r887zcaiaetJh1OZ7q4RNcNUCByabY0g1c-qw" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top px-0 wow fadeIn  " style="background: rgb(144,97,51);
background: linear-gradient(29deg, rgba(144,97,51,1) 0%, rgba(145,98,53,1) 47%, rgba(192,151,67,1) 100%);" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex" >
            <div class="col-lg-5 px-5 text-start text-white">
                <small> +91 9904388222</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>Inquiry.aumfoodexports@gmail.com</small>
            </div>
            <div class="col-lg-5 px-5 text-end text-white align-items-center">

                <marquee behavior="" class="" direction="">
                    <a>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and vegetables.</a>
                </marquee>
            </div>

            <div class="col-lg-2 px-5 text-end text-white d-flex d-md-none d-lg-flex">


                <a class="text-white ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <!-- <a class="text-white ms-3" href=""><i class="fab fa-instagram"></i></a> -->
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn bg-white" data-wow-delay="0.1s">
            <a href="/" class="navbar-brand ms-4 ms-lg-0">
                <img src="image/logo/logo.png" height="100px" width="150px" alt="aumfoodexport">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="products.php" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                        <div class="dropdown-menu m-0">
                            <?php
                            include "config.php";
                            $select = "SELECT * from `cat` ";
                            $qu = mysqli_query($con, $select);
                            $s_no = 1;
                            while ($row = mysqli_fetch_array($qu)) {

                            ?>
                                <a href="product.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item"><?php echo $row['cat_name'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                     <div class="nav-item dropdown">
                        <a href="blog.php" class="nav-link dropdown-toggle"  >Blogs</a>
                        <div class="dropdown-menu m-0">
                            <?php
                            include "config.php";
                            $select = "SELECT * from `blog` ";
                            $qu = mysqli_query($con, $select);
                            $s_no = 1;
                            while ($row = mysqli_fetch_array($qu)) {

                            ?>
                                <a href="single-blog.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item"><?php echo $row['title'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <a href="flipbook.php" class="nav-item nav-link"> Flipbook</a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->
<!-- Carousel Start -->
<!-- <div class="container-fluid p-0 mb-5 wow fadeIn animate__animated animate__bounce animate__backInDown" data-aos="fade-right" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="image/banner/banner1.jpg" alt="banner image">
                 
            </div>
            <div class="carousel-item">
                <img class="w-100" src="image/banner/banner2.jpg" alt="banner image2">
                
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> -->
<!--<video src="image/banner/about.mp4" height="auto" style="object-fit: cover;" width="100%" class="rounded" type="video/mp4" autoplay muted loop></video>-->
<!-- Carousel End -->
<style>
    .bg {
        background-image: url("bg.jpg");
        width: 100%;
        background-size: cover;
        height: 60vh
    }
</style>
<div class="container-fluid p-0 bg mb-5    ">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row " style="height:  ;">
                        <div class="col-12 col-lg-6 ">
                            <div class="row justify-content-center align-items-center" style="height: 60vh;">
                                <div class="col-10 text-center">
                                    <h1 class="display-2">Fruits </h1>
                                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and vegetables.</p>
                                    <a href="product.php?slug=fruits" class="btn btn-primary p-4"> View Products</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 text-center">

                            <img src="image/2.png" class="animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto" width="30%" style="position: absolute;top: 15%;" alt="block image">
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row " style="height:  ;">
                        <div class="col-12 col-lg-6 ">
                            <div class="row justify-content-center align-items-center" style="height: 60vh;">
                                <div class="col-10 text-center">
                                    <h1 class="display-2">Vegetabeles </h1>
                                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and vegetables.</p>
                                    <a href="product.php?slug=vegetabels" class="btn btn-primary p-4"> View Products</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 text-center">

                            <img src="tomato.png" class="animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto" width="35%" style="position: absolute;top: 15%;" alt="no image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row " style="height:  ;">
                        <div class="col-12 col-lg-6 ">
                            <div class="row justify-content-center align-items-center" style="height: 60vh;">
                                <div class="col-10 text-center">
                                    <h1 class="display-2">Fruits Powder </h1>
                                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and vegetables.</p>
                                    <a href="product.php?slug=fruits-powder" class="btn btn-primary p-4"> View Products</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 text-center">

                            <img src="powder.png" class=" animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto" width="50%" style="position: absolute;top: 10%;" alt="fruits image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row " style="height:  ;">
                        <div class="col-12 col-lg-6 ">
                            <div class="row justify-content-center align-items-center" style="height: 60vh;">
                                <div class="col-10 text-center">
                                    <h1 class="display-2">Vegetabeles Powder </h1>
                                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and vegetables.</p>
                                    <a href="product.php?slug=vegetables-powder" class="btn btn-primary p-4"> View Products</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 text-center">

                            <img src="veg.png" class=" animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto" width="50%" style="position: absolute;top: 0%;" alt="Vegetable image ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5 ">
    <div class="container">
        <div class="row g-5  ">
            <div class="col-lg-6 wow   " data-aos="zoom-in-right">

            <img src="image/banner/banner1.jpg" height="auto" width="100%" alt="no image">
                <!-- <video src="image/banner/about.mp4" height="500px" style="object-fit: cover;" width="100%" class="rounded" type="video/mp4" autoplay muted loop></video> -->

            </div>
            <div class="col-lg-6 wow fadeIn ">
                <h1 class="display-5 mb-4">Welcome to Aum Food Exports</h1>
                <p class="mb-4">AUM Food Exports is your premier destination for top-quality fruit powder and <a href="https://aumfoodexport.com/product.php?slug=fruits">Fruits and Vegetables exporters in Saudi Arabia</a> With a relentless commitment to exceptional quality, we source only the finest produce from trusted growers, ensuring every product meets stringent standards for freshness, flavor, and nutritional value
                </p>
                <!-- <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p> -->
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6 position-relative">
    <div class="container">
        <img src="image/2.png" class="animated_image d-none d-sm-none d-md-none d-lg-block" height="auto" width="20%" style="position: absolute;top: 0%;" alt="no image">
        <img src="image/3.png" class="animated_image d-none d-sm-none d-md-none d-lg-block" height="auto" width="30%" style="position: absolute;top: 80%; right: 0%;" alt="no image">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Why Choose Us</h1>
            <p>We are committed to sustainability and environmental stewardship. By implementing eco-friendly
                farming practices and minimizing waste throughout our operations, we strive to minimize our carbon
                footprint and preserve the planet for future generations.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-lg">
                    <img class="img-fluid mb-4" src="image/icon/quick.png" height="70px" width="70px" alt="no image">
                    <h4 class="mb-3">Quick Support</h4>
                    <p class="mb-4">AAt AUM Food Export, we believe in providing quick and efficient support to our
                        clients. </p>
                    <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-lg">
                    <img class="img-fluid mb-4" src="image/icon/Quality Service.png" height="70px" width="70px" alt="no image">
                    <h4 class="mb-3">Quality Service</h4>
                    <p class="mb-4">At AUM Food Export, quality service is ingrained in everything we do. </p>
                    <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-lg">
                    <img class="img-fluid mb-4" src="image/icon/Satisfaction.png" height="70px" width="70px" alt="Satisfaction image">
                    <h4 class="mb-3">100% Satisfaction</h4>
                    <p class="mb-4">At AUM Food Export, your satisfaction is our ultimate goal. </p>
                    <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->



<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-12">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-3">Our Products</h1>
                    <p>At AUM Food Export, we take pride in offering an extensive range of premium quality fruits
                        and vegetables. Handpicked from the finest orchards and farms, our products are carefully
                        selected to ensure freshness, flavor, and nutritional value. From succulent tropical fruits
                        like mangoes and pineapples to crisp apples and juicy grapes, our fruit selection is
                        unmatched in taste and variety. Additionally, our premium vegetables, including crisp
                        lettuce, vibrant bell peppers, and nutritious carrots, are sourced from trusted growers to
                        guarantee superior quality.</p>
                </div>
            </div>

        </div>
        <div class=" ">
            <div class=" ">
                <div class="row g-4">
                    <?php
                    include_once "config.php";
                    $select = "SELECT * from `pro` limit 8 ";
                    $qu = mysqli_query($con, $select);
                    $s_no = 1;
                    while ($row = mysqli_fetch_array($qu)) {

                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp pb-2" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden border border-2 border-dark" style="border-radius: 20px 20px 0px 0px;">
                                    <img class="img-fluid w-100 " src="<?php echo $row['image'] ?>" alt="no image">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-3 text-capitalize" href=""><?php echo $row['name'] ?></a>
                                    <div class="m-auto text-center   ">
                                        <a class="  btn  btn-dark  w-75"   href="contact.php"> Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->


<!-- Firm Visit Start -->

<!-- Firm Visit End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-6 mb-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Category</h1>

        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            include "config.php";
           
            $select = "SELECT * from `cat`";
            $qu = mysqli_query($con, $select);

            while ($row = mysqli_fetch_array($qu)) {
            ?>
                <a href="product.php?slug=<?php echo $row['slug'] ?>">
                    <div class="bg-white  mt-4">
                        <img src="<?php echo $row['cat_image'] ?>" height="350px" width="100%" style="object-fit: auto;" class="rounded border border-dark border-4" alt="no image">
                        <div class="p-3">
                            <h3><?php echo $row['cat_name'] ?></h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, consequatur.</p> -->
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own
                            firm</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Blog End -->




<?php
include_once "footer.php"; ?>