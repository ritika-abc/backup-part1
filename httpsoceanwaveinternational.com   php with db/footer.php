<footer class="p-5 text-capitalize">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-white my-2">
          <h3 class="text-white fs-4 mb-3">about Us</h3>
          <p class="text-white" style="text-align: justify;">At Oceanwave International, we provide top-quality products
            at the best rates. We specialize in creating custom boxes designed specifically for your ..</p>
        </div>
        <div class="col-lg-3 text-white my-2">
          <h3 class="text-white fs-4 mb-3">Contact Us</h3>
          <p><a href="/" class="text-white">Home</a></p>
          <p><a href="about.php" class="text-white">About</a></p>
          <p><a href="contact.php" class="text-white">Contact Us</a></p>
          <p><a href="products.php" class="text-white">Products</a></p>
        </div>
        <div class="col-lg-3 text-white my-2">
          <h3 class="text-white fs-4 mb-3">Address</h3>
          <p><a href="" class="text-white mt-2">220 Rk Supreme, 150 Ft Ring Road, Nana Mova , Rajkot , Gujarat ,
              India-360001</a></p>
          <p><a href="" class="text-white mt-2"> internationaloceanwave@gmail.com</a></p>
          <p><a href="" class="text-white mt-2"> 9313637717</a></p>
        </div>
        <div class="col-lg-3 text-white my-2">
          <h3 class="text-white fs-4 mb-3">Links</h3>
          <ul class="social-links d-flex">
            <li class="mx-1"><a href="#" class="text-white"><i class="fab fa-facebook"></i></a></li>
            <li class="mx-1"><a href="https://x.com/minthu" target="_blank" class="text-white"><i
                  class="fab fa-twitter"></i></a></li>
            <li class="mx-1"><a href="#" class="text-white"><i class="fab fa-linkedin"></i></a></li>
            <li class="mx-1"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
    <hr>
    <div class="col-lg-8">
      <p>Copyright © 2024 <a href="" class="">internationaloceanwave</a> . All rights reserved.

        Design: <a rel="nofollow" href="https://web2expoert.com" target="_blank">web2expoert.com</a> </p>
    </div>
    </div>
  </footer>
  <script>
    function go() {
      var name = document.querySelector(".name").value;
      var email = document.querySelector(".email").value;
      var number = document.querySelector(".number").value;
      var url = "https://wa.me/918287042772?text=" +
        "Name: " +
        name + " " +
        "Number: " +
        number + " " +
        "Email :" + email;
      window.open(url, "_blank").focus();
    }
  </script>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Oceanwave International
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 col-md-6 my-2">
              <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
            </div>
            <div class="col-12 col-md-6 my-2">
              <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
            </div>
            <div class="col-12  my-2">
              <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
            </div>



          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>