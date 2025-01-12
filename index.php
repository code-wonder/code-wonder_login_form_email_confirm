<?php
  // session_start();
  // if( !isset($_SESSION['submitlogin'])){
  //   header("location: login.php");
  //   exit;
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-SMART</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

<?php
?>
<?php
?>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">E-SMART</h1>
      </a>
      <!-- <nav id="navmenu" class="navmenu"> -->
        <!-- <ul> -->
          <!-- <li><a href="#contact">Contact</a></li> -->
        <!-- </ul> -->
        <!-- <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> -->
        <i class="mobile-nav-toggle"></i>
      <!-- </nav> -->
      <!-- <a class="btn-getstarted" href="#about">Sign up</a> -->
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to <br>E-SMART</h1>
            <p>Edukasi Sistematis dengan Media dan Aplikasi Ringkas Terpadu</p>
            <div class="d-flex">
              <a href="login.php" class="btn-get-started">Sign in</a>
              <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- Contact Section -->
    <!-- <section id="contact" class="contact section"> -->

      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up"> -->
        <!-- <h2>Contact</h2>
        <p>Anda dapat menghubungi pemilik atau admin website melalui formulir kontak di bawah ini</p>
      </div> -->
      <!-- End Section Title -->

      <!-- <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>South Jakarta, Indonesia, ID 12520</p>
                </div>
              </div> -->
              <!-- End Info Item -->

              <!-- <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 85* **** ****</p>
                </div>
              </div> -->
              <!-- End Info Item -->
<!-- 
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>sf.dev.task15@gmail.com</p>
                </div>
              </div> -->
              <!-- End Info Item -->

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126907.04322930139!2d106.64635246878919!3d-6.284083524593454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ec2422b0b3%3A0x39a0d0fe47404d02!2sSouth%20Jakarta%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1735453034604!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
            </div>
            
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="fullname" class="pb-2">Full Name</label>
                  <input type="text" name="full_name" id="fullname" class="form-control <?= $invalid_class_name ?? "" ?>" required="">
                </div>

                <div class="col-md-6">
                  <label for="email_address" class="pb-2">Email Address</label>
                  <input type="email" class="form-control" name="email" id="email_address" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required="">
                </div>

                <div class="col-md-12">
                  <label for="message" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center"> -->
                  <!-- <div class="loading" id="loader">Loading</div>  -->
                  <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
                  <!-- <button type="submit" name="submitContact" id="submitbutton">Send Message</button>
                </div>

              </div>
            </form>
          </div> -->
          <!-- End Contact Form -->
<!-- 
        </div>

      </div>

    </section> -->
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">E-SMART</span>
          </a>
          <div class="footer-contact pt-3">
            <p>South Jakarta</p>
            <p>Indonesia, ID 12620</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 85** **** ****</span></p>
            <p><strong>Email:</strong> <span>Email Us through Contact Form</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">E-SMART</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.septianafajrin.my.id/">Fajrin 2025</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  
  <!-- <script>
   document.getElementById(submitbutton).onclick=function(){
  document.getElementById(loader).style.display='initial';
   }
  </script> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if(messageText != ''){
        Swal.fire({
          title: "Thank you",
          text: messageText,
          icon: "success"
        });
      <?php unset($_SESSION['status']); ?>
    }
  </script>



  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>