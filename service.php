<!DOCTYPE html>
<html lang="en">
  <!--<< Header Area >>-->
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="gramentheme" />
    <meta name="description" content="Web hosting & WHMCS Html Template " />
    <!-- ======== Page title ============ -->
    <title>Web hosting & WHMCS Html Template</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.svg" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="assets/css/color.css" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css" />
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
            <div
              class="offcanvas__top mb-5 d-flex justify-content-between align-items-center"
            >
              <div class="offcanvas__logo">
                <a href="index.php">
                  <img src="assets/img/logo/black-logo.svg" alt="logo-img" />
                </a>
              </div>
              <div class="offcanvas__close">
                <button>
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <p class="text d-none d-xl-block">
              Nullam dignissim, ante scelerisque the is euismod fermentum odio
              sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean
              a imperdiet risus.
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
                    <a target="_blank" href="#"
                      >Main Street, Melbourne, Australia</a
                    >
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="offcanvas__contact-icon mr-15">
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="offcanvas__contact-text">
                    <a href="mailto:info@example.com"
                      ><span class="mailto:info@example.com"
                        >info@example.com</span
                      ></a
                    >
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
                <a href="contact.php" class="theme-btn text-center">
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
    <div
      class="modal modal-common-wrap fade"
      id="exampleModal"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center"
          >
            <div class="modal-common-content">
              <div class="box">
                <h2>welcome back!</h2>
                <form action="#" class="login-from">
                  <div class="form-grp cmn-mb">
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div class="form-grp">
                    <input type="text" placeholder="Enter Password" />
                  </div>
                  <div
                    class="d-flex forgot-inner-area cmn-mb justify-content-between gap-2 flex-wrap align-items-center"
                  >
                    <div class="form-check checkmark-inner">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                        checked
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        Remember me
                      </label>
                    </div>
                    <a href="#" class="forgot"> Forgot Your password? </a>
                  </div>
                  <button type="button" class="theme-btn w-100">
                    <span> Log in </span>
                  </button>
                </form>
                <span class="orting-badge"> Or </span>
                <div class="d-grid gap-3">
                  <a href="#" class="cmn-social">
                    <img src="assets/img/sign/google.png" alt="img" />
                    Continue With Google
                  </a>
                  <a href="#" class="cmn-social">
                    <img src="assets/img/sign/fb.png" alt="img" />
                    continue with facebook
                  </a>
                </div>
                <div
                  class="form-check d-flex align-items-center gap-2 from-customradio"
                >
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    i accept your terms & conditions
                  </label>
                </div>
              </div>
            </div>
            <div class="modal-right-thumb position-relative">
              <img src="assets/img/sign/login.png" alt="img" />
              <div class="signlogin-btnwrap">
                <button
                  class="theme-create style-border"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  create account
                </button>
                <button
                  class="theme-btn"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal2"
                >
                  Log In
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Version 2 -->
    <div
      class="modal modal-common-wrap fade"
      id="exampleModal2"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center"
          >
            <div class="modal-common-content">
              <div class="box">
                <h2>Create account</h2>
                <form action="#" class="login-from">
                  <div class="form-grp cmn-mb">
                    <input type="text" placeholder="User name" />
                  </div>
                  <div class="form-grp cmn-mb">
                    <input type="email" placeholder="Email Address" />
                  </div>
                  <div class="form-grp cmn-mb">
                    <input type="text" placeholder="Enter Password" />
                  </div>
                  <div class="form-grp">
                    <input type="text" placeholder="Enter Confirm password" />
                  </div>
                </form>
                <span class="orting-badge"> Or </span>
                <div class="d-grid gap-3">
                  <a href="#" class="cmn-social">
                    <img src="assets/img/sign/google.png" alt="img" />
                    Continue With Google
                  </a>
                  <a href="#" class="cmn-social">
                    <img src="assets/img/sign/fb.png" alt="img" />
                    continue with facebook
                  </a>
                </div>
                <div class="pb-xxl-3">
                  <div
                    class="form-check d-flex align-items-center gap-2 from-customradio"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault11"
                    />
                    <label class="form-check-label" for="flexRadioDefault11">
                      i accept your terms & conditions
                    </label>
                  </div>
                </div>
                <div class="mt-4">
                  <button type="button" class="theme-btn w-100">
                    <span> Log in </span>
                  </button>
                </div>
              </div>
            </div>
            <div class="modal-right-thumb position-relative">
              <img src="assets/img/sign/create.png" alt="img" />
              <div class="signlogin-btnwrap">
                <button
                  class="theme-create style-border"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  create account
                </button>
                <button
                  class="theme-btn"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal2"
                >
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
              <input
                type="search"
                class="main-search-input"
                placeholder="Search..."
              />
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--<< Breadcrumb Section Start >>-->
    <div
      class="breadcrumb-wrapper bg-cover"
      style="background-image: url('assets/img/breadcrumb-1.jpg')"
    >
      <div class="container">
        <div class="page-heading">
          <div class="page-header-left">
            <h1 class="wow fadeInUp mt-5" data-wow-delay=".3s">Services</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
              <li>
                <a href="index.php"> Home </a>
              </li>
              <li>
                <i class="fa-regular fa-chevrons-right"></i>
              </li>
              <li>Services</li>
            </ul>
          </div>
          <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
            <img src="assets/img/pictures/Service-banner.svg" alt="img" />
          </div>
        </div>
      </div>
    </div>

    <!-- Hosting Section Start -->
    <section class="hosting-section fix section-padding pb-5">
      <div class="container">
        <div class="section-title-area">
          <div class="section-title">
            <span class="style-bg wow fadeInUp">Premium Feature</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
              Discover all Our Web <br />
              Hosting Services
            </h2>
          </div>
          <!-- <a
            href="pricing.html"
            class="theme-btn wow fadeInUp"
            data-wow-delay=".5s"
            >see all Feature <i class="fas fa-long-arrow-alt-right"></i
          ></a> -->
        </div>
        <div class="row row-hosting-section">
          <div
            class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".2s"
          >
            <div class="hosting-box-items">
              <div class="icon">
                <img src="assets/img/hosting/icon-4.png" alt="img" />
              </div>
              <div class="content">
                <h3>
                  <a href="cloud-hosting.html"
                    >High Availability and Redundancy</a
                  >
                </h3>
                <p>
                  Customize these three sections to suit your design
                  preferences. To duplicate, delete, or rearrange sections,
                  select the section and use the icons above to make your
                  changes.
                </p>
                <!-- <a href="#" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".4s"
          >
            <div class="hosting-box-items">
              <div class="icon">
                <img src="assets/img/hosting/icon-5.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="cloud-hosting.html">Cloud Solutions</a></h3>
                <p>
                  To add a fourth column, reduce the size of these three columns
                  using the right icon of each block. Then, duplicate one of the
                  columns to create a new one as a copy.
                </p>
                <!-- <a href="#" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".6s"
          >
            <div class="hosting-box-items">
              <div class="icon">
                <img src="assets/img/hosting/icon-7.png" alt="img" />
              </div>
              <div class="content">
                <h3>
                  <a href="share-hosting.html">Data Security Solutions</a>
                </h3>
                <p>
                  Remove the above image or replace it with a visual that
                  conveys your message. Click on the image to adjust its rounded
                  corner style.
                </p>
                <!-- <a href="#" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hosting-section fix text-center">
                <a
            href="https://shop.aero-stack.com"
            class="theme-btn wow fadeInUp"
            data-wow-delay=".5s"
            >subscribe your plan <i class="fas fa-long-arrow-alt-right"></i
          ></a>
    </section>

        <!-- Hosting Section Start -->
    <section class="hosting-section fix section-padding ">
      <div class="container">
        <div class="section-title text-center">
          <span class="wow fadeInUp">Best hosting</span>
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Discover Most Powerful Web <br />
            Hosting Features
          </h2>
        </div>
        <div class="row">
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-1.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="dedicated-hosting.html">Dedicated Hosting</a></h3>
                <p>
                  High-performance, isolated hosting designed for businesses needing full control and advanced security.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".5s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-2.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="dedicated-hosting.html">Email Hosting</a></h3>
                <p>
                  Secure, reliable email hosting created for professional communication and smooth, uninterrupted delivery.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".7s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-3.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="dedicated-hosting.html">Ecommerce Hosting</a></h3>
                <p>
                  Fast, stable, and secure hosting built for online stores and high-volume transactions.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-4.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="cloud-hosting.html">Cloud Hosting</a></h3>
                <p>
                  Flexible, scalable cloud hosting made for fast growth and consistently high application performance.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".5s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-5.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="reseller-hosting.html">Reseller Hosting</a></h3>
                <p>
                  Efficient hosting tailored for agencies offering managed solutions to multiple clients.
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp"
            data-wow-delay=".7s"
          >
            <div
              class="hosting-inner-items responsive-style"
              style="background-image: url('assets/img/hosting/card-bg.png')"
            >
              <div class="icon">
                <img src="assets/img/hosting/icon-6.png" alt="img" />
              </div>
              <div class="content">
                <h3><a href="vps-hosting.html">VPS Hosting</a></h3>
                <p>
                  Dedicated virtual hosting engineered for developers who need full control and custom configurations.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Brand Section Start -->
    <!-- <div class="brand-section pt-0 mt-0" style="margin-top:120px;">
      <div class="container">
        <div class="swiper brand-slider bor-bottom pb-100 pt-0">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/indieplex.png" alt="img" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/nextech.png" alt="img" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/techbox.png" alt="img" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/wattse.png" alt="img" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/chatbot.png" alt="img" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-img center">
                <img src="assets/img/brand/indieplex.png" alt="img" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


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
          <div
            class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".2s"
          >
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
          <div
            class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".4s"
          >
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
          <div
            class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".6s"
          >
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
          <div
            class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
            data-wow-delay=".8s"
          >
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

    <!-- Faq Section Start -->
    <!-- <section class="faq-section fix section-padding">
      <div class="container">
        <div class="faq-wrapper">
          <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="faq-image">
                <img src="assets/img/pictures/services-1.jpg" alt="img" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="faq-content">
                <div class="section-title">
                  <span class="wow fadeInUp">FAQ’S</span>
                  <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Prioritize Your Site’s Safety and Security
                  </h2>
                </div>
                <div class="faq-accordion mt-4 mt-md-0">
                  <div class="accordion" id="accordion">
                    <div
                      class="accordion-item wow fadeInUp"
                      data-wow-delay=".3s"
                    >
                      <h5 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq1"
                          aria-expanded="true"
                          aria-controls="faq1"
                        >
                          How to Install WordPress theme on cPanel?
                        </button>
                      </h5>
                      <div
                        id="faq1"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordion"
                      >
                        <div class="accordion-body">
                          Installing a WordPress theme is simple.
                          Upload your theme through the WordPress dashboard or use the File Manager in cPanel, then activate it from the Appearance > Themes section.
                        </div>
                      </div>
                    </div>
                    <div
                      class="accordion-item wow fadeInUp"
                      data-wow-delay=".5s"
                    >
                      <h5 class="accordion-header">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq2"
                          aria-expanded="false"
                          aria-controls="faq2"
                        >
                          Do you have Custom Hosting Service?
                        </button>
                      </h5>
                      <div
                        id="faq2"
                        class="accordion-collapse show"
                        data-bs-parent="#accordion"
                      >
                        <div class="accordion-body">
                          Yes, we offer fully customised hosting setups tailored to your project’s performance, security, and scalability needs.
                        </div>
                      </div>
                    </div>
                    <div
                      class="accordion-item wow fadeInUp"
                      data-wow-delay=".7s"
                    >
                      <h5 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq3"
                          aria-expanded="false"
                          aria-controls="faq3"
                        >
                          Better Security And Faster Server?
                        </button>
                      </h5>
                      <div
                        id="faq3"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordion"
                      >
                        <div class="accordion-body">
                          Our servers are optimised with advanced firewalls, malware protection, NVMe storage, and LiteSpeed technology for best-in-class speed and security.
                        </div>
                      </div>
                    </div>
                    <div
                      class="accordion-item wow fadeInUp"
                      data-wow-delay=".7s"
                    >
                      <h5 class="accordion-header">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#faq4"
                          aria-expanded="false"
                          aria-controls="faq4"
                        >
                          Deployment Within Few Minutes
                        </button>
                      </h5>
                      <div
                        id="faq4"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordion"
                      >
                        <div class="accordion-body">
                          Launch your website or application instantly with our quick-deploy infrastructure and easy-to-use control panel.
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
    </section> -->

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
