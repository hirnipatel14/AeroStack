<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="AeroStack" />
  <meta name="description" content="Home - Your Perfect Cloud & Hosting Solution" />
  <!-- ======== Page title ============ -->
  <title>Home - Your Perfect Cloud & Hosting Solution</title>
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
  <!-- <div
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
    </div> -->

  <!-- Modal Version 2 -->
  <!-- <div
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
    </div> -->

  <!-- Hero Section Start -->
  <section class="hero-section hero-1 style-hero-2 bg-cover fix"
    style="background-image: url('assets/img/hero/hero-bg-2.jpg');">
    <div class="dot-right">
      <img src="assets/img/hero/hero-2-dot-right.png" alt="img">
    </div>
    <div class="hero-social">
      <span>Follow on</span>
      <a href="https://www.linkedin.com/in/aerostack-systems"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="http://youtube.com/@AEROSTACKSYSTEMS"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.instagram.com/aerostack_systems"><svg xmlns="http://www.w3.org/2000/svg" width="16"
          height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
        </svg></a>
      <a href="https://x.com/aerostack_2025">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x"
          viewBox="0 0 16 16">
          <path
            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
        </svg></a>
    </div>
    <div class="container">
      <div class="row g-4 justify-content-between">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">
              Your Perfect Cloud & Hosting <span>Solution</span>
            </h1>
            <!-- <div class="hero-list-items">
                                <ul class="hero-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Lifetime Free Wildcard SSL Certificate
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        24/7 Chat, Call & Ticket Support
                                    </li>
                                </ul>
                                <ul class="hero-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Free Domain with 2-Year Billing
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        30-Day Money-Back Guarantee
                                    </li>
                                </ul>
                            </div> -->
            <div class="hero-author">
              <a href="https://shop.aero-stack.com/shop" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".7s">
                Get Started Now <i class="fas fa-long-arrow-alt-right"></i>
              </a>
              <a href="./service" class="theme-btn border-white wow fadeInUp" data-wow-delay=".7s">
                See Our Services <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
          <div class="hero-image">
            <img src="assets/img/pictures/Data-centre-aero-stack.jpg" alt="img" height="600px" width="600px">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Doming Name Section Start -->
  <!-- <section class="doming-name-area section-padding pt-0">
            <div class="container">
                <div class="doming-name-wrapper style-2">
                    <h3 class="text-white wow fadeInUp" data-wow-delay=".3s">Find Your Perfect Domain Name</h3>
                    <form action="#" class="doming-input-form wow fadeInUp" data-wow-delay=".5s">
                        <div class="doming-input">
                            <input type="text" placeholder="domain.com">
                            <button class="theme-btn bg-color-2" type="submit">Search Now</button>
                            <div class="select-area">
                                <select name="cate" class="category">
                                    <option value="1">
                                        .com
                                    </option>
                                    <option value="1">
                                        .net
                                    </option>
                                    <option value="1">
                                        .info
                                    </option>
                                    <option value="1">
                                        .store
                                    </option>
                                </select>
                             </div>
                        </div>
                    </form>
                    <ul class="doming-list">
                        <li class="wow fadeInUp" data-wow-delay=".2s">
                            <span>.com</span>
                            ₹799/yr
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            <span>.Info</span>
                            ₹999/yr
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".6s">
                            <span>.Net</span>
                            ₹749/yr
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".8s">
                            <span>.Store</span>
                            ₹899/yr
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".9s">
                            <span>.ORG</span>
                            ₹899/yr
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->

  <!-- Feature Section Start -->
  <section class="feature-section">
    <div class="container">
      <div class="feature-wrapper-2">
        <div class="row g-4">
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
            <div class="feature-card-items">
              <div class="icon">
                <img src="assets/img/feature-icon/icon-1.png" alt="img">
              </div>
              <div class="content">
                <h3>Maximum Performance</h3>
                <p>Optimised servers with NVMe storage and high-speed caching for lightning-fast load times.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="feature-card-items">
              <div class="icon">
                <img src="assets/img/feature-icon/icon-2.png" alt="img">
              </div>
              <div class="content">
                <h3>Maximum Data Transfer</h3>
                <p>Generous bandwidth and seamless data handling for heavy-traffic websites and applications.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
            <div class="feature-card-items">
              <div class="icon">
                <img src="assets/img/feature-icon/icon-3.png" alt="img">
              </div>
              <div class="content">
                <h3>Super Easy To Use</h3>
                <p>A beginner-friendly control panel with one-click installs and intuitive management tools.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="feature-card-items">
              <div class="icon">
                <img src="assets/img/feature-icon/icon-4.png" alt="img">
              </div>
              <div class="content">
                <h3>Maximum Security</h3>
                <p>Advanced firewalls, DDoS protection, and continuous monitoring to keep your data safe.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </div>

  <!-- Brand Section Start -->
  <!-- <div class="brand-section pt-0" style="margin-top:120px;">
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
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
          <div class="hosting-box-items">
            <div class="icon">
              <img src="assets/img/hosting/icon-4.png" alt="img" />
            </div>
            <div class="content">
              <h3>
                <a href="">High Availability and Redundancy</a>
              </h3>
              <p>
                Customize these three sections to suit your design
                preferences. To duplicate, delete, or rearrange sections,
                select the section and use the icons above to make your
                changes.
              </p>
              <!-- <a href="https://www.aero-stack.com/shop" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
          <div class="hosting-box-items">
            <div class="icon">
              <img src="assets/img/hosting/icon-5.png" alt="img" />
            </div>
            <div class="content">
              <h3><a href="">Cloud Solutions</a></h3>
              <p>
                To add a fourth column, reduce the size of these three columns
                using the right icon of each block. Then, duplicate one of the
                columns to create a new one as a copy.
              </p>
              <!-- <a href="https://www.aero-stack.com/shop" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
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
                <a href="">Data Security Solutions</a>
              </h3>
              <p>
                Remove the above image or replace it with a visual that
                conveys your message. Click on the image to adjust its rounded
                corner style.
              </p>
              <!-- <a href="https://www.aero-stack.com/shop" class="theme-btn mt-4"
                  >Best hosting <i class="fa-regular fa-chevrons-right"></i
                ></a> -->
            </div>
          </div>
        </div>
      </div>
      <div>

      </div>
    </div>
  </section>
  <section class="hosting-section fix text-center mb-5">
    <a href="https://shop.aero-stack.com/shop" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
      style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">subscribe your plan<i
        class="fas fa-long-arrow-alt-right"></i></a>
  </section>

  <!-- Pricing plan index-1 -->
  <!-- Pricing Section Start -->
  <section class="pricing-section fix section-padding section-bg">
    <div class="container">
      <div class="section-title text-center">
        <span class="style-border wow fadeInUp">Pricing Plans</span>
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
          Get the More Powerful With <br />
          Aero-Stack Hosting Plans
        </h2>
      </div>
      <div class="pricing-tab-header">
        <div class="arrow-shape">
          <img src="assets/img/arrow.png" alt="img" />
        </div>
        <ul class="nav" role="tablist">
          <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
            <a href="#monthly" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
              Monthly
            </a>
          </li>
          <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
            <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
              Yearly
            </a>
          </li>
        </ul>
        <div class="save-text">Save 25%</div>
      </div>
      <div class="tab-content">
        <div id="monthly" class="tab-pane fade show active" role="tabpanel">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Basic</h3>
                    <p>StartUp Business Services</p>
                  </div>
                  <h2>₹2,500</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 2 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    4gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    50gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal (Ideal For Single User)
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Silver</h3>
                    <p>MSME Business Service</p>
                  </div>
                  <h2>₹3,500</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 2 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    4gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    50gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Gold</h3>
                    <p>Enterprise Business Service</p>
                  </div>
                  <h2>₹4,500</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 5 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    8gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    90gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
          </div>
          <div>
            <div class="pricing-button mt-5 pt-5 text-center">
              <a href="https://shop.aero-stack.com/shop" class="theme-btn">
                get Started Now
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div id="yearly" class="tab-pane fade" role="tabpanel">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Basic</h3>
                    <p>StartUp Business Services</p>
                  </div>
                  <h2>₹27,000</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 2 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    4gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    50gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal (Ideal For Single User)
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Silver</h3>
                    <p>MSME Business Service</p>
                  </div>
                  <h2>₹40,000</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 2 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    4gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    50gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="pricing-card-items responsive-pricing-style">
                <div class="wing-shape">
                  <img src="assets/img/wing-shape.png" alt="img" />
                </div>
                <div class="icon">
                  <img src="assets/img/pricing/icon-1.png" alt="img" />
                </div>
                <div class="pricing-bg">
                  <img src="assets/img/pricing/pricing-shape.png" alt="img" />
                </div>
                <div class="pricing-header">
                  <div class="price-content">
                    <h3>Gold</h3>
                    <p>Enterprise Business Service</p>
                  </div>
                  <h2>₹50,000</h2>
                </div>
                <ul class="pricing-list">
                  <li>
                    <i class="fa-solid fa-check"></i>
                    CPU 5 Core
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    8gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    90gb
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Secured Firewall
                  </li>
                  <li>
                    <i class="fa-solid fa-check"></i>
                    Self Managed Portal
                  </li>
                </ul>
                <!-- <div class="pricing-button">
                    <a href="contact.php" class="theme-btn">
                      get Started Now
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div> -->
              </div>
            </div>
          </div>
          <div>
            <div class="pricing-button mt-5 pt-5 text-center">
              <a href="https://shop.aero-stack.com/shop" class="theme-btn">
                get Started Now
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="pricing-title wow fadeInUp" data-wow-delay=".4s">
                    <p>Cost-effective hosting that delivers secure, reliable performance. </p>
                    <a href="pricing.html" class="theme-btn">See all plan & details</a>
                </div> -->
    </div>
  </section>

  <!-- Hosting Section Start -->
  <section class="hosting section-padding fix">
    <div class="container">
      <div class="hosting-wrapper">
        <div class="row g-4 justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="hosting-content style-2">
              <div class="section-title">
                <span class="style-bg wow fadeInUp">Best Services</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Secure & High-Performance Web Application Hosting
                </h2>
              </div>
              <div class="hosting-items mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                <div class="icon">
                  <img src="assets/img/hosting/icon-11.png" alt="img" />
                </div>
                <div class="content">
                  <h4>Turbo Hosting</h4>
                  <p>
                    Powered by NVMe storage, LiteSpeed servers, and advanced
                    caching, load instantly — even under heavy traffic.
                  </p>
                </div>
              </div>
              <div class="hosting-items wow fadeInUp" data-wow-delay=".7s">
                <div class="icon">
                  <img src="assets/img/hosting/icon-12.png" alt="img" />
                </div>
                <div class="content">
                  <h4>Share Hosting</h4>
                  <p>
                    One-click app installations — perfect for startups,
                    personal sites, and small businesses looking for a
                    cost-effective hosting solution.
                  </p>
                </div>
              </div>
              <div class="hosting-items wow fadeInUp" data-wow-delay=".9s">
                <div class="icon">
                  <img src="assets/img/hosting/icon-13.png" alt="img" />
                </div>
                <div class="content">
                  <h4>Dedicated Hosting</h4>
                  <p>
                    Enhanced security, and enterprise-grade performance.
                    Perfect for high-traffic platforms and mission-critical
                    applications.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
            <div class="hosting-image">
              <img src="assets/img/pictures/Cloud-server-1.png" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Data Center Section Start -->
  <!-- <section class="data-center-section fix section-padding section-bg">
      <div class="container">
        <div class="section-title text-center">
          <span class="style-bg wow fadeInUp">Our Location</span>
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Our Data Center Location
          </h2>
        </div>
        <div class="data-center-wrapper">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="data-center-image">
                <img src="assets/img/data-center-bg.png" alt="img" />
                <span class="text-box box-1">Canada</span>
                <span class="text-box box-2">United States</span>
                <span class="text-box box-3">Brazil</span>
                <span class="text-box box-4">Finland</span>
                <span class="text-box box-5">Ukraine</span>
                <span class="text-box box-6">Nigeria</span>
                <span class="text-box box-7">South Africa</span>
                <span class="text-box box-8">India</span>
                <span class="text-box box-9">China</span>
                <span class="text-box box-10">Australia</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- Cta Contact Section Start -->
  <section class="cta-contct-section section-padding bg-cover fix"
    style="background-image: url('assets/img/cta/cta-conact-bg-2.jpg')">
    <div class="container">
      <div class="row g-4 justify-content-between align-items-center">
        <div class="col-lg-8">
          <div class="cta-contact-left">
            <div class="section-title">
              <span class="white-text wow fadeInUp">Contact Us</span>
              <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                24/7 Expert Hosting Support <br />
                Our Customers Love
              </h2>
            </div>
            <div class="cta-contact-button mt-4 mt-md-0">
              <a href="https://api.whatsapp.com/send?phone=9998671468" class="theme-btn bg-color-2 wow fadeInUp"
                data-wow-delay=".5s">WhatsApp Now <i class="fas fa-long-arrow-alt-right"></i></a>
              <h4 class="wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-light fa-envelope"></i>
                <a href="mailto:helpdesk@aero-stack.com">helpdesk@aero-stack.com</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
          <div class="cta-contact-image mb-0">
            <img src="assets/img/pictures/Contact us-banner.svg" alt="img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Choose Us Section Start -->
  <section class="choose-us-section fix section-padding">
    <div class="container">
      <div class="section-title text-center">
        <span class="style-bg wow fadeInUp">Why Choose Us</span>
        <h2 class="wow fadeInUp" data-wow-delay=".3s">
          Why Choose AeroStack
        </h2>
      </div>
      <!-- <div class="choose-us-top-inner">
          <ul>
            <li class="wow fadeInUp" data-wow-delay=".2s">Step One</li>
            <li class="wow fadeInUp" data-wow-delay=".4s">Step Two</li>
            <li class="wow fadeInUp" data-wow-delay=".6s">Step Three</li>
            <li class="wow fadeInUp" data-wow-delay=".8s">Step Four</li>
          </ul>
        </div> -->
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

  <!-- Feature Section Start -->
  <section class="feature-section section-padding pt-0">
    <div class="container">
      <div class="feature-wrapper">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="feature-image">
              <img src="assets/img/pictures/Cloud-server-2.svg" alt="img" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-content">
              <div class="section-title">
                <span class="style-bg wow fadeInUp">feature</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                  Enhanced Security Capabilities
                </h2>
              </div>
              <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                Having a dedicated hosting environment significantly
                strengthens your security. With isolated resources, you avoid
                risks caused by shared hardware and maintain full control over
                your infrastructure.
              </p>
              <div class="feature-list">
                <ul class="wow fadeInUp" data-wow-delay=".3s">
                  <!-- <li>
                      <i class="fa-duotone fa-check"></i>
                      Software updates and patching
                    </li> -->
                  <li>
                    <i class="fa-duotone fa-check"></i>
                    Endpoint-based device security
                  </li>
                </ul>
                <ul class="wow fadeInUp" data-wow-delay=".5s">
                  <li>
                    <i class="fa-duotone fa-check"></i>
                    Cloud migration consultancy
                  </li>
                  <!-- <li>
                      <i class="fa-duotone fa-check"></i>
                      Regular vulnerability checks
                    </li> -->
                </ul>
              </div>
              <a href="https://shop.aero-stack.com/shop" class="theme-btn wow fadeInUp" data-wow-delay=".7s">
                Get Started Now <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section Start -->
  <!-- <section class="testimonial-section-2 fix section-padding section-bg">
      <div class="container">
        <div class="section-title text-center">
          <span class="style-bg wow fadeInUp">clients Testimonials</span>
          <h2 class="wow fadeInUp" data-wow-delay=".3s">
            Latest Client Feedback
          </h2>
        </div>
        <div class="swiper testimonial-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="pngwing-shape">
                  <img
                    src="assets/img/testimonial/pngwing-shape.png"
                    alt="shape-img"
                  />
                </div>
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <p>
                  “Reliable hosting with great customer service. Any issue we had was resolved within minutes. Perfect for growing businesses.”
                </p>
                <div class="client-info">
                  <div
                    class="client-img bg-cover"
                    style="
                      background-image: url('assets/img/pictures/Person-3.jpg');
                    "
                  ></div>
                  <div class="content">
                    <h4>Kristin Watson</h4>
                    <span>Web Designer</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-quote-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="pngwing-shape">
                  <img
                    src="assets/img/testimonial/pngwing-shape.png"
                    alt="shape-img"
                  />
                </div>
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <p>
                  “AeroStack has completely improved our website performance. The uptime is excellent, and support is always fast and helpful.”
                </p>
                <div class="client-info">
                  <div
                    class="client-img bg-cover"
                    style="
                      background-image: url('assets/img/pictures/Person-2.jpg');
                    "
                  ></div>
                  <div class="content">
                    <h4>Theresa Webb</h4>
                    <span>DevOps Engineer</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-quote-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-box-items">
                <div class="pngwing-shape">
                  <img
                    src="assets/img/testimonial/pngwing-shape.png"
                    alt="shape-img"
                  />
                </div>
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <p>
                  “We migrated our applications to AeroStack’s hosting and instantly noticed the speed boost. The control panel is smooth and the security is top-notch.”
                </p>
                <div class="client-info">
                  <div
                    class="client-img bg-cover"
                    style="
                      background-image: url('assets/img/pictures/Person-1.jpg');
                    "
                  ></div>
                  <div class="content">
                    <h4>Ronald Richards</h4>
                    <span>UI/UX Specialist</span>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-quote-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-dot mt-5">
            <div class="dot"></div>
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