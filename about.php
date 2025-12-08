<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="gramentheme">
  <meta name="description" content="Web hosting & WHMCS Html Template ">
  <!-- ======== Page title ============ -->
  <title>Web hosting & WHMCS Html Template </title>
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
</head>

<body>

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
                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
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
          <h1 class="wow fadeInUp mt-5" data-wow-delay=".3s">About Us</h1>
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
              About Us
            </li>
          </ul>
        </div>
        <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
          <img src="assets/img/pictures/About-us-banner.svg" alt="img">
        </div>
      </div>
    </div>
  </div>

  <!-- About Section Start -->
  <section class="about-section section-padding fix">
    <div class="container">
      <div class="about-wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <div class="about-image-items">
              <div class="about-sub">
                Successful Hosting 25k+
              </div>
              <div class="shape-image">
                <img src="assets/img/about/shape.png" alt="img">
              </div>
              <div class="about-image-1 wow fadeInLeft" data-wow-delay=".3s">
                <img src="assets/img/pictures/about-image-1.jpg" alt="img">
                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                  <img src="assets/img/pictures/about-image-2.jpg" alt="img">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content">
              <div class="section-title">
                <span class="wow fadeInUp">ABOUT US</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Enhance Your Data Management</h2>
              </div>
              <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                In today's digital landscape, your data is your most valuable asset. But managing it
                effectively—ensuring it's secure, accessible, and scalable—is a complex challenge. Our data center
                solutions provide the robust, reliable foundation your business needs.
              </p>
              <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                We go beyond simple hosting to deliver an environment where your data thrives. Focus on innovation and
                growth, while we handle the infrastructure with guaranteed uptime, ironclad security, and seamless
                scalability.
              </p>
              <div class="about-counter-items" style="width:fit-content">
                <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
                  <h2><span class="count">50</span>k</h2>
                  <h6>Global Customers</h6>
                </div>
                <div class="counter-items ps-0 wow fadeInUp" data-wow-delay=".5s">
                  <h2><span class="count">98</span>%</h2>
                  <h6>Success Case</h6>
                </div>
                <!-- <div class="video-thumb wow fadeInUp" data-wow-delay=".7s">
                                        <img src="assets/img/about/video-img.jpg" alt="video-img">
                                        <div class="video-box">
                                            <span class="button-text wow fadeInUp">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Section Start -->
  <section class="feature-hosting-section fix section-padding section-bg">
    <div class="container">
      <div class="feature-content-warpper style-2">
        <div class="row g-4 justify-content-between align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="feature-hosting-content">
              <div class="section-title">
                <span class="wow fadeInUp">Best hosting</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Discover New Possibilities</h2>
              </div>
              <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                What if your IT infrastructure was a catalyst for growth instead of a constraint? Legacy systems and
                underpowered hosting can trap your business in a cycle of maintenance, preventing you from pursuing new
                opportunities.
              </p>
              <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                We break down those barriers. By partnering with us, you free up valuable resources and gain a powerful,
                agile platform. This is your space to harness AI and machine learning, deploy immersive applications,
                and build for the future—all on a foundation of rock-solid reliability.
              </p>
              <div class="list-items">
                <ul class="wow fadeInUp" data-wow-delay=".3s">
                  <li>
                    <i class="far fa-check"></i>
                    Reliable Cloud Hosting
                  </li>
                  <li>
                    <i class="far fa-check"></i>
                    Scalable Server Solutions
                  </li>
                </ul>
                <ul class="wow fadeInUp" data-wow-delay=".5s">
                  <li>
                    <i class="far fa-check"></i>
                    Secure Data Backups
                  </li>
                  <li>
                    <i class="far fa-check"></i>
                    24/7 Monitoring & Protection
                  </li>
                </ul>
              </div>
              <a href="https://shop.aero-stack.com/shop" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Get Started Now <i
                  class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="feature-hosting-image-2">
              <div class="icon-box-1">
                <img src="assets/img/hosting/icon-1.png" alt="img">
              </div>
              <div class="icon-box-2">
                <img src="assets/img/hosting/icon-3.png" alt="img">
              </div>
              <div class="thumb">
                <img src="assets/img/pictures/Cloud-hosting-image.png" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section Start -->
  <!-- <section class="team-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Our Expart</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our expert team</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/01.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Darlene Robertson</a></h5>
                               <p>Web Designer</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/02.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Leslie Alexander</a></h5>
                               <p>Nursing Assistant</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/03.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Ralph Edwards</a></h5>
                               <p>President of Sales</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="team-card-item">
                            <div class="team-image">
                                <img src="assets/img/team/04.jpg" alt="img">
                            </div>
                            <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                               <h5><a href="team-details.html">Kristin Watson</a></h5>
                               <p>Software Tester</p>
                                <div class="social-profile">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                    <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


  <!-- Hosting Section Start -->
  <section class="hosting-section fix section-padding">
    <div class="container">
      <div class="section-title-area">
        <div class="section-title">
          <span class="style-bg wow fadeInUp">Premium Feature</span>
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Discover all Our Web <br />
            Hosting Services
          </h2>
        </div>
        <!-- <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">see all Feature <i
            class="fas fa-long-arrow-alt-right"></i></a> -->
      </div>
      <div class="row row-hosting-section">
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
          <div class="hosting-box-items">
            <div class="icon">
              <img src="assets/img/hosting/icon-4.png" alt="img" />
            </div>
            <div class="content">
              <h3>
                <a href="#">High Availability and Redundancy</a>
              </h3>
              <p>
                Customize these three sections to suit your design
                preferences. To duplicate, delete, or rearrange sections,
                select the section and use the icons above to make your
                changes.
              </p>
              <!-- <a href="#" class="theme-btn mt-4">Best hosting <i class="fa-regular fa-chevrons-right"></i></a> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="hosting-box-items">
            <div class="icon">
              <img src="assets/img/hosting/icon-5.png" alt="img" />
            </div>
            <div class="content">
              <h3><a href="#">Cloud Solutions</a></h3>
              <p>
                To add a fourth column, reduce the size of these three columns
                using the right icon of each block. Then, duplicate one of the
                columns to create a new one as a copy.
              </p>
              <!-- <a href="#" class="theme-btn mt-4">Best hosting <i class="fa-regular fa-chevrons-right"></i></a> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="hosting-box-items">
            <div class="icon">
              <img src="assets/img/hosting/icon-7.png" alt="img" />
            </div>
            <div class="content">
              <h3>
                <a href="#">Data Security Solutions</a>
              </h3>
              <p>
                Remove the above image or replace it with a visual that
                conveys your message. Click on the image to adjust its rounded
                corner style.
              </p>
              <!-- <a href="#" class="theme-btn mt-4">Best hosting <i class="fa-regular fa-chevrons-right"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Choose Us Section Start -->
  <section class="choose-us-section fix section-padding pt-0">
    <div class="container">
      <div class="section-title text-center">
        <span class="style-bg wow fadeInUp">Why Choose Us</span>
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
          Why Choose AeroStack
        </h2>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/choose/safe-icon.png" alt="img" />
            </div>
            <div class="content">
              <h3>Safe and Secured</h3>
              <p>
                Advanced protection with firewalls, encryption, and 24/7
                monitoring.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/choose/bank-icon.png" alt="img" />
            </div>
            <div class="content">
              <h3>Money-Back Guarantee</h3>
              <p>30-day refund policy for complete peace of mind.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/choose/secured-icon.png" alt="img" />
            </div>
            <div class="content">
              <h3>99% Uptime</h3>
              <p>
                Redundant systems ensure your website stays online without
                interruption.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
          <div class="choose-us-card-items">
            <div class="icon">
              <img src="assets/img/choose/support-icon.png" alt="img" />
            </div>
            <div class="content">
              <h3>Dedicated Support</h3>
              <p>24/7 expert assistance via chat, call, and ticket.</p>
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
  <!--<< Main.js >>-->
  <script src="assets/js/main.js"></script>
</body>

</html>