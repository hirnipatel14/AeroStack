<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="gramentheme">
  <meta name="description" content="Contact - AeroStack">
  <!-- ======== Page title ============ -->
  <title>Contact - AeroStack</title>
  <!--<< Favcion >>-->
  <link rel="shortcut icon" href="assets/img/favicon.svg">
  <!--<< Bootstrap min.css >>-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!--<< All Min Css >>-->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!--<< Animate.css >>-->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!--<< Magnific Popup.css >>-->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!--<< MeanMenu.css >>-->
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <!--<< Swiper Bundle.css >>-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <!--<< Nice Select.css >>-->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!--<< Color.css >>-->
  <link rel="stylesheet" href="assets/css/color.css">
  <!--<< Main.css >>-->
  <link rel="stylesheet" href="assets/css/main.css">
  <?php include './inc/gtm.php'; ?>
</head>

<body>
  <?php include './inc/gtm2.php'; ?>

  <!-- Preloader Start -->
  <div id="preloader" class="preloader">
    <div class="animation-preloader">
      <div class="spinner">
      </div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>

  <!--<< Mouse Cursor Start >>-->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>

  <!-- Offcanvas Area Start -->
  <div class="fix-area">
    <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a href="./">
                <img src="" alt="logo-img">
              </a>
            </div>
            <div class="offcanvas__close">
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <p class="text d-none d-xl-block">
            Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna
            eget eros. Duis Aenean a imperdiet risus.
          </p>
          <div class="mobile-menu fix mb-3"></div>
          <div class="offcanvas__contact">
            <h4>Contact Info</h4>
            <ul>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon">
                  <i class="fal fa-map-marker-alt"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="fal fa-clock"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="offcanvas__contact-icon mr-15">
                  <i class="far fa-phone"></i>
                </div>
                <div class="offcanvas__contact-text">
                  <a href="tel:+11002345909">+11002345909</a>
                </div>
              </li>
            </ul>
            <div class="header-button mt-4">
              <a href="./contact" class="theme-btn text-center">
                Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
            <div class="social-icon d-flex align-items-center">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>

  <!-- Header Section Start -->
  <?php include 'header.php'; ?>

  <!-- Modal Version 1 -->
  <div class="modal modal-common-wrap fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
          <div class="modal-common-content">
            <div class="box">
              <h2>
                welcome back!
              </h2>
              <form action="#" class="login-from">
                <div class="form-grp cmn-mb">
                  <input type="email" placeholder="Email Address">
                </div>
                <div class="form-grp">
                  <input type="text" placeholder="Enter Password">
                </div>
                <div class="d-flex forgot-inner-area cmn-mb justify-content-between gap-2 flex-wrap align-items-center">
                  <div class="form-check checkmark-inner">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Remember me
                    </label>
                  </div>
                  <a href="#" class="forgot">
                    Forgot Your password?
                  </a>
                </div>
                <button type="button" class="theme-btn w-100">
                  <span>
                    Log in
                  </span>
                </button>
              </form>
              <span class="orting-badge">
                Or
              </span>
              <div class="d-grid gap-3">
                <a href="#" class="cmn-social">
                  <img src="assets/img/sign/google.png" alt="img">
                  Continue With Google
                </a>
                <a href="#" class="cmn-social">
                  <img src="assets/img/sign/fb.png" alt="img">
                  continue with facebook
                </a>
              </div>
              <div class="form-check d-flex align-items-center gap-2 from-customradio">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  i accept your terms & conditions
                </label>
              </div>
            </div>
          </div>
          <div class="modal-right-thumb position-relative">
            <img src="assets/img/sign/login.png" alt="img">
            <div class="signlogin-btnwrap">
              <button class="theme-create style-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                create account
              </button>
              <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Log In
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Version 2 -->
  <div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
          <div class="modal-common-content">
            <div class="box">
              <h2>
                Create account
              </h2>
              <form action="#" class="login-from">
                <div class="form-grp cmn-mb">
                  <input type="text" placeholder="User name">
                </div>
                <div class="form-grp cmn-mb">
                  <input type="email" placeholder="Email Address">
                </div>
                <div class="form-grp cmn-mb">
                  <input type="text" placeholder="Enter Password">
                </div>
                <div class="form-grp">
                  <input type="text" placeholder="Enter Confirm password">
                </div>
              </form>
              <span class="orting-badge">
                Or
              </span>
              <div class="d-grid gap-3">
                <a href="#" class="cmn-social">
                  <img src="assets/img/sign/google.png" alt="img">
                  Continue With Google
                </a>
                <a href="#" class="cmn-social">
                  <img src="assets/img/sign/fb.png" alt="img">
                  continue with facebook
                </a>
              </div>
              <div class="pb-xxl-3">
                <div class="form-check d-flex align-items-center gap-2 from-customradio">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                  <label class="form-check-label" for="flexRadioDefault11">
                    i accept your terms & conditions
                  </label>
                </div>
              </div>
              <div class="mt-4">
                <button type="button" class="theme-btn w-100">
                  <span>
                    Log in
                  </span>
                </button>
              </div>
            </div>
          </div>
          <div class="modal-right-thumb position-relative">
            <img src="assets/img/sign/create.png" alt="img">
            <div class="signlogin-btnwrap">
              <button class="theme-create style-border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                create account
              </button>
              <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Log In
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Search Area Start -->
  <div class="search-wrap">
    <div class="search-inner">
      <i class="fas fa-times search-close" id="search-close"></i>
      <div class="search-cell">
        <form method="get">
          <div class="search-field-holder">
            <input type="search" class="main-search-input" placeholder="Search...">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--<< Breadcrumb Section Start >>-->
  <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
    <div class="container">
      <div class="page-heading">
        <div class="page-header-left">
          <h1 class="wow fadeInUp mt-5" data-wow-delay=".3s">Contact Us</h1>
          <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
            <li>
              <a href="./">
                Home
              </a>
            </li>
            <li>
              <i class="fa-regular fa-chevrons-right"></i>
            </li>
            <li>
              Contact Us
            </li>
          </ul>
        </div>
        <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
          <img src="assets/img/pictures/Contact us-banner.svg" alt="img">
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Us Section Start -->
  <section class="choose-us-section fix section-padding">
    <div class="container">
      <div class="section-title text-center">
        <span class="style-border wow fadeInUp">Contact Us</span>
        <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Premium Support</h2>
        <p class="wow fadeInUp" data-wow-delay=".5s">Contact us about anything related to our company or services.</p>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/support/support.png" alt="img">
            </div>
            <div class="content">
              <h3>Our Address</h3>
              <p>
                Anand Milan Complex, <br> Opp Navrangpura Jain Derasar, <br> Navrangpura, Ahmedabad. Gujarat. (India)
                Pin - 380009
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/support/customization.png" alt="img">
            </div>
            <div class="content">
              <h3>Our Mail</h3>
              <p>
                <a href="mailto:info@exmple.com">info@aero-stack.com</a> <br>
                Email us anytime for any kind <br>
                of quety
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/support/technical.png" alt="img">
            </div>
            <div class="content">
              <h3>Our Number</h3>
              <p>
                <a href="<?php echo get_phone_href(); ?>">+91-9998671468</a> <br>
                <a href="tel:+91-9712004142">+91-9712004142</a> <br>
                24/7/365 priority Live Chat and ticketing support.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/support/account.png" alt="img">
            </div>
            <div class="content">
              <h3>Opening Hour </h3>
              <p>
                Sunday-Fri: 9 AM – 6 PM <br>
                Saturday: 9 AM – 4 PM
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<< Contact Section Start >>-->
  <section class="contact-section fix section-padding pt-0">
    <div class="container">
      <div class="contact-wrapper">
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="contact-left">
              <h2 class="wow fadeInUp" data-wow-delay=".3s">Request a <br> Consultation</h2>
              <div class="contact-image wow fadeInUp" data-wow-delay=".5s">
                <img src="assets/img/pictures/contact-us-1.jpg" alt="contact-img">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-right">
              <h3 class="wow fadeInUp">Get in Touch</h3>
              <form action="mail.php" method="POST" class="contact-form-items" autocomplete="off">
                <div class="row g-4">
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="form-clt">
                      <input type="text" name="name" id="name" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="form-clt">
                      <input type="text" name="email" id="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="form-clt">
                      <input type="text" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="form-clt">
                      <div class="category-oneadjust">
                        <select name="cate" class="category">
                          <option value="None">
                            Subject
                          </option>
                          <option value="Doming">
                            Doming
                          </option>
                          <option value="Hosting">
                            Hosting
                          </option>
                          <option value="VPS Hosting">
                            VPS Hosting
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="form-clt">
                      <textarea name="message" id="message" placeholder="Messages"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                    <div class="form-check d-flex gap-2 from-customradio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Collaboratively formulate principle capital. Progressively evolve user
                      </label>
                    </div>
                    <button type="submit" class="theme-btn">
                      Submit Now <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer of index-1 -->
  <?php include 'footer.php'; ?>

  <!--<< All JS Plugins >>-->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <!--<< Viewport Js >>-->
  <script src="assets/js/viewport.jquery.js"></script>
  <!--<< Bootstrap Js >>-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--<< Nice Select Js >>-->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!--<< Waypoints Js >>-->
  <script src="assets/js/jquery.waypoints.js"></script>
  <!--<< Counterup Js >>-->
  <script src="assets/js/jquery.counterup.min.js"></script>
  <!--<< Swiper Slider Js >>-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!--<< MeanMenu Js >>-->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!--<< Magnific Popup Js >>-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--<< Wow Animation Js >>-->
  <script src="assets/js/wow.min.js"></script>
  <!--<< Ajax Mail Js >>-->
  <script src="assets/js/ajax-mail.js"></script>
  <!--<< Main.js >>-->
  <script src="assets/js/main.js"></script>
</body>

</html>