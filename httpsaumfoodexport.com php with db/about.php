<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Fruits And Vegetables Suppliers in Germany || Aumfoodexport</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="keywords" content=" Fruits And Vegetables Suppliers in Germany ,Fruits and Vegetables exporters in USA " />

    <meta name="description" content="Discover top fruits and vegetables suppliers in Germany offering fresh, high-quality produce year-round. Enjoy a variety of nutritious options from reliable" />
    

    
    <!--<meta name="google-site-verification" content="eSh4znilq8KZMRlvoG0BHlciiQ2TmAAEytZbbGZIeu4" />-->
<link rel="canonical" href="https://aumfoodexport.com/about.php">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <div class="container-fluid fixed-top px-0 wow fadeIn  " style="background: rgb(144,97,51);
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
                <img src="image/logo/logo.png" height="100px" width="150px" alt="aumfoodexports">
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

 
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown text-white">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>

                <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg border border-warning border-4"></div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Top Fruits And Vegetables Suppliers in Germany</h1>
                <p class="mb-4">Germany boasts a robust network of fruits and vegetables suppliers, providing fresh, high-quality produce year-round. These suppliers ensure a wide variety of <a href="/"> Fruits And Vegetables Suppliers in Germany  </a> sourced both locally and internationally, to meet the diverse needs of consumers. With a focus on sustainability and organic farming, German suppliers are committed to delivering nutritious, flavorful produce. Whether you're a retailer, wholesaler, or individual, finding reliable fruits and vegetables suppliers in Germany is key to enjoying the best of what nature has to offer. Explore the best suppliers and elevate your fresh produce experience today.
                </p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->


<div class="bg_fixed mt-5 ">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-6 text-white  border border-white border-4">
                <div class="p-3">
                    <h4 class="display-3 text-white">Best Quality</h4>
                    <p>We maintain strong relationships with local farmers who share our commitment to sustainable and ethical farming practices. This allows us to offer you produce that not only tastes better but also supports local communities.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "footer.php"; ?>