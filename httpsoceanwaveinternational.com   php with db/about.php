<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title> Oceanwave International</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> internationaloceanwave@gmail.com</li>
            <li class="w-50"><i class="fa fa-map "></i>
              <marquee behavior="" direction="" class=" " style="width: 90%;">220 Rk Supreme, 150 Ft Ring Road, Nana Mova , Rajkot , Gujarat , India-360001</marquee>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
<div class="container d-none d-sm-none d-md-none d-lg-block">
    <div class="row">
      <div class="col-5">
        <div class="row align-items-center">
          <div class="col-3">
            <img src="logo.jpg" class="mt-3" height="70px" width="100px" alt="Logo">

          </div>
          <div class="col-9">
            <p class="fw-bold fs-4">Oceanwave International</p>

          </div>
        </div>
      </div>
      <div class="col-7">
        <header class="header-area header-sticky">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->

                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->

                  <ul class="nav">
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="about.php" class="active">About</a></li>

                    <li><a href="products.php">Products</a></li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle p-0" href="product.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                      </a>
                      <ul class="dropdown-menu">
                        <?php
                        include "config.php";
                        $sel = "SELECT * FROM `cat`  ";
                        $q = mysqli_query($con, $sel);

                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                          <li><a class="dropdown-item" href="category.php?cat_id=<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></a></li>
                        <?php } ?>
                      </ul>
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>

                  </ul>

                  <!-- ***** Menu End ***** -->
                </nav>
              </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary d-block d-m-block d-lg-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.jpg" class="mt-3" height="70px" width="100px" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <?php
              include "config.php";
              $sel = "SELECT * FROM `cat`  ";
              $q = mysqli_query($con, $sel);

              while ($row = mysqli_fetch_array($q)) {
              ?>
                <li><a class="dropdown-item" href="category.php?cat_id=<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / About</span>
          <h3>About Us</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image box_container">
            <!-- <img src="assets/img/about.jpg" alt="">
            <img src="assets/img/about3.jpg" class="d-none d-sm-none d-md-none d-lg-block" alt=""> -->
          <video src="video/1 (3).mp4" type="video/mp4" class="border border-3 border-dark shadow-lg rounded" height="400px" width="100%" style="object-fit: cover;" autoplay muted loop></video>

            <!-- <img src="assets/img/2.jpg" alt=""
                style="max-width: 60px; padding: 0px;">  -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| About Us</h6>
            <h3 class="">Welcome to Oceanwave International</h3>
            <p>At <a href="/">Oceanwave International</a>, we provide top-quality products at the best rates. We
              specialize in creating custom boxes designed specifically for your needs, complete with your logo. If you
              need assistance with the design for your product, our expert team can also create a unique design tailored
              just for you.</p>
            <a href="contact.php" class="btn  mt-3 text-white px-2" style="background-color: #f35525;">Contact us</a>
          </div>
          <!-- <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Best useful links ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business.
                  TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates"
                    target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Villa Agency the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>CEO<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <?php
include 'footer.php';
?>