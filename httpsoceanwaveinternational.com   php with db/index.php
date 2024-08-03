<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title> Oceanwave International</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://oceanwaveinternational.com/" />

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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>

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

    <div id="carouselExample" class="carousel slide d-none d-lg-block">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <video src="about2.mp4" type="video/mp4" autoplay muted loop height="auto" width="100%"></video>
    </div>
    <div class="carousel-item">
    <video src="about.mp4" type="video/mp4" autoplay muted loop height="auto" width="100%"></video>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- <div class="container-fluid p-0 bg mb-5    ">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row " style="height:  ;">
              <div class="col-12 col-lg-6 ">
                <div class="row justify-content-center align-items-center" style="height: 60vh;">
                  <div class="col-10 text-center">
                    <h1 class="display-2">Fruits </h1>
                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and
                      vegetables.</p>
                   
                  </div>
                </div>
              </div>

              <div class="col-6 text-center">

                <img src="./assets/images/banner-01.jpg" class="animated_image  m-auto d-none d-sm-none d-md-none d-lg-block"
                  height="auto" width="30%" style="position: absolute;top: 15%;" alt="block image">
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
                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and
                      vegetables.</p>
                  
                  </div>
                </div>
              </div>

              <div class="col-6 text-center">

                <img src="./assets/images/banner-01.jpg" class="animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto"
                  width="35%" style="position: absolute;top: 15%;" alt="no image">
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
                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and
                      vegetables.</p>
                   
                  </div>
                </div>
              </div>

              <div class="col-6 text-center">

                <img src="./assets/images/banner-01.jpg" class=" animated_image  m-auto d-none d-sm-none d-md-none d-lg-block"
                  height="auto" width="50%" style="position: absolute;top: 10%;" alt="fruits image">
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
                    <p>AUM Food Exports is your premier destination for top-quality fruit powder and fresh fruits and
                      vegetables.</p>
                    
                  </div>
                </div>
              </div>

              <div class="col-6 text-center">

                <img src="./assets/images/banner-01.jpg" class=" animated_image  m-auto d-none d-sm-none d-md-none d-lg-block" height="auto"
                  width="50%" style="position: absolute;top: 0%;" alt="Vegetable image ">
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
  </div> -->
  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image box_container">
            <img src="assets/img/about.jpg" alt="">
            <img src="assets/img/about3.jpg" class="d-none d-sm-none d-md-none d-lg-block" alt="">
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
            <a href="about.php" class="btn  mt-3 text-white px-2" style="background-color: #f35525;">Read More</a>
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

  <div class="video section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7  ">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Oceanwave International</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <video src="about1.mp4" type="video/mp4" autoplay muted loop height="auto" width="100%"></video>
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                  <p class="count-text ">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                  <p class="count-text ">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| Category</h6>
            <h2>View Our Products Category</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                      data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment"
                      aria-selected="true">PRINTED BOX</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button"
                      role="tab" aria-controls="villa" aria-selected="false">Corrugated Boxes
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse"
                      type="button" role="tab" aria-controls="penthouse" aria-selected="false">Cartoon Box</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>

                          <li>CEO <span>Mr Meet Patel</span></li>
                          <li title="220 Rk Supreme, 150 Ft Ring Road, Nana Mova , Rajkot , Gujarat ,  India">
                            Address<span> Gujarat</span></li>
                          <li>Contact <span>9313637717</span></li>
                          <li>We Export & We Import<span>Yes</span></li>
                          <li>Establishment Year <span>2024 </span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-9  ">
                      <div class="row">
                        <div class="col-4  my-3">
                          <img src="assets/img/1.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/2.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/3.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/4.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/5.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/6.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-12 mt-5">
                          <a href="" class="btn btn-outline-danger px-5">More Products</a>
                        </div>
                      </div>
                    </div>
            
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>

                          <li>CEO <span>Mr Meet Patel</span></li>
                          <li title="220 Rk Supreme, 150 Ft Ring Road, Nana Mova , Rajkot , Gujarat ,  India">
                            Address<span> Gujarat</span></li>
                          <li>Contact <span>9313637717</span></li>
                          <li>We Export & We Import<span>Yes</span></li>
                          <li>Establishment Year <span>2024 </span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-9  ">
                      <div class="row">
                        <div class="col-4  my-3">
                          <img src="assets/img/1.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/2.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/3.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/4.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/5.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/6.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-12 mt-5">
                          <a href="" class="btn btn-outline-danger px-5">More Products</a>
                        </div>
                      </div>
                    </div>
                   
                 
                  </div>

                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>

                          <li>CEO <span>Mr Meet Patel</span></li>
                          <li title="220 Rk Supreme, 150 Ft Ring Road, Nana Mova , Rajkot , Gujarat ,  India">
                            Address<span> Gujarat</span></li>
                          <li>Contact <span>9313637717</span></li>
                          <li>We Export & We Import<span>Yes</span></li>
                          <li>Establishment Year <span>2024 </span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-9  ">
                      <div class="row">
                        <div class="col-4  my-3">
                          <img src="assets/img/1.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/2.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/3.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/4.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4 my-3">
                          <img src="assets/img/5.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-4  my-3">
                          <img src="assets/img/6.jpg" class="p-0 shadow-lg rounded border border-2 border-dark"
                            height="200px" width="100%" style="object-fit: cover;" alt="">
                        </div>
                        <div class="col-12 mt-5">
                          <a href="" class="btn btn-outline-danger px-5">More Products</a>
                        </div>
                      </div>
                    </div>
                 
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

   <style>
    .cards_box {
      width: 100%;
      position: relative;
      height: 330px;
      border: 1px solid #839a42;
      background-color: #839a42;
      /* overflow-x: hidden; */
      border-radius: 10px;
    }

    .cards_box>p {
      position: absolute;
      background-color: #839a42;
      bottom: 0%;
      width: 100%;
      text-align: center;
    }

    .pos_card {
      transition: 0.4s;
      transform: translateY(0px);

    }

    .cards_box:hover .pos_card {
      transform: translateY(-20px);
    }

    .cards_box img {
      filter: drop-shadow(2px 4px 6px black);

    }
  </style>

  <div class="container">
    <div class="row">
    <?php
        include "config.php";
        $sel = "SELECT * FROM `pro` limit 8";
        $q = mysqli_query($con, $sel);

        while ($row = mysqli_fetch_array($q)) {
        ?>
      <div class="col-12 col-md-6 col-lg-3 my-5">
        <div class="cards_box">
          <div class="pos_card">
            <img src="assets/img/<?php echo $row['image'] ?>" class="rounded" height="250px" width="100%" style="object-fit: cover;" alt="">
          </div>
          <a href="single-details.php?pro_id=<?php echo $row['pro_id'] ?>">
            <p class="py-4 text-center text-white fs-5" style="border-radius: 10px;"><?php echo $row['pro_name'] ?></p>
          </a>
        </div>
      </div>
      <?php  } ?>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 ">
          <div class="section-heading text-center ">
            <h6>| Contact Us</h6>
            <h2 class="text-dark">Get In Touch </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777314.4367520236!2d68.6860108675113!3d22.39951285572494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1720257409340!5m2!1sen!2sin" width="100%" class="rounded" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>9313637717<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6> <small><a href="mailto:internationaloceanwave@gmail.com" class="text-dark" style="">internationaloc- <br>eanwave@gmail.com</a></small><br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" rows="2" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 my-5">
          <video src="video/1 (1).mp4" type="video/mp4" class="border border-3 border-dark shadow-lg rounded" height="400px" width="100%" style="object-fit: cover;" autoplay muted loop></video>
        </div>
        <div class="col-12 col-lg-6 my-5">
          <video src="video/1 (2).mp4" type="video/mp4" class="border border-3 border-dark shadow-lg rounded" height="400px" width="100%" style="object-fit: cover;" autoplay muted loop></video>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>