<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Market Place</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css" />
    <!-- main Style -->
    <link rel="stylesheet" href="./public/assets/css/main.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Start Nave Bar -->
    <nav class="navbar home-nav navbar-expand-lg">
      <div class="container-fluid">
        <img src="./public/assets/image/12.svg" class="top-wave" alt="" />
        <img src="./public/assets/image/13.svg" class="bottom-wave" alt="" />
        <a class="navbar-brand" href="/">
          <img src="./public/assets/image/logo-brandfiy.svg" alt="" />
        </a>
        <button
          class="navbar-toggler outline-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse justify-content-end navbar-collapse top-link"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-3 mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="https://privacypolicy.brandifyuae.com/"
                target="_blank"
                >Privacy Policy</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Journy">Journy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
          </ul>
          <?php
// Start the session
session_start();

// Retrieve the full URL
$request_uri = $_SERVER['REQUEST_URI'];

// Extract parameters from the query string
parse_str(parse_url($request_uri, PHP_URL_QUERY), $queryParams);

// Store parameters in session
$_SESSION['user_id'] = $queryParams['user']['id'] ?? '';
$_SESSION['name'] = $queryParams['user']['name'] ?? '';
$_SESSION['email'] = $queryParams['user']['email'] ?? '';
$_SESSION['token'] = $queryParams['token'] ?? '';

// Retrieve parameters from session
$user_id = $_SESSION['user_id'] ?? '';
$name = $_SESSION['name'] ?? '';
$email = $_SESSION['email'] ?? '';
$token = $_SESSION['token'] ?? '';

// Determine if parameters are non-empty
$isLoggedIn = !empty($user_id) && !empty($name) && !empty($email) && !empty($token);
?>
    <?php if ($isLoggedIn): ?>
        <!-- Display Logout button if parameters are present and non-empty -->
        <div class="button-group">
            <a href="logout" class="login d-flex align-items-center gap-1">
                <span>Logout</span>
            </a>
        </div>
    <?php else: ?>
        <!-- Display Login button if any parameter is missing or empty -->
        <div class="button-group">
            <a href="login" class="login d-flex align-items-center gap-1">
                <span>Login</span>
            </a>
            <a href="" class="login d-flex align-items-center gap-1">
                <span>register</span>
            </a>
        </div>
    <?php endif; ?>
    </nav>
    <!-- End nav bar -->
    <!-- Start Header Section -->
    <div class="container-fluid description">
      <div class="row h-100">
        <div class="col-md-6 desc-contant">
          <h1>
            We help you to <br />
            boost your <br />
            business
          </h1>
          <div class="btn-group">
            <a href="#">contact Us</a>
            <a href="#">Explore Journey</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="position-relative animation-img h-100">
            <img class="f-img"  src="./public/assets/image/animation/1e547763da5090f7b0ed3120755330bd.webp" alt="" />
            <img class="s-img" src="./public/assets/image/animation/64ddd7f3015ecb0784054ba518ea9c2c.webp" alt="">
            <img class="t-img" src="./public/assets/image/animation/cddd68b07d9b56e92ab1311035c5f38e.webp" alt="">
            <img class="fo-img" src="./public/assets/image/animation/f9663e7cacbfd597c7da31a0ee969d5d.svg" alt="">
          </div>
            
        </div>
      </div>
    </div>
    <!-- End Header Section -->
    <!-- strat video desc -->
    <div class="container-fluid slider">
      <div class="row">
        <div class="col-md-12 p-0">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./public/assets/image/headshot-portrait-happy-ginger-red-hair-girl-with-funny-face-looking-camera-pastel-blue-backgr.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./public/assets/image/people-technology-concept-close-up-portrait-young-beautiful-attractive-redhair-girl-happy-smilin.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./public/assets/image/vertical-shot-happy-korean-woman-medical-mask-holding-flight-tickets-passport-standing-wit.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End video desc-->
    <!-- Start Our Services -->
     <div class="container-fluid our-services">
        <div class="row">
            <div class="col-md-4">
                <h4><a href="#">DIGITAL MARKETING</a></h4>
                <video width="" height="250" autoplay muted  loop >
                   <source src="./public/assets/image/degital-markting.mp4" type="">
                   Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-4">
                <h4><a href="#">SOFTWARE</a></h4>
                <video width="" height="250" autoplay muted  loop >
                    <source src="./public/assets/image/soft-ware.mp4" type="">
                    Your browser does not support the video tag.
                 </video>
            </div>
            <div class="col-md-4">
                <h4><a href="./public/assets/merchandise.html">MERCHANDISE & GIFT</a></h4>
                <video width="" height="250" autoplay muted  loop >
                    <source src="./public/assets/image/merchendise.mp4" type="">
                    Your browser does not support the video tag.
                 </video>
            </div>
        </div>
     </div>
    <!-- End Our Services -->
     <!-- Footer Start -->
      <footer>
        <div class="container-fluid">
            <div class="row f-contnant">
                <div class="col-md-4">
                    <a href="/">
                        <img src="./public/assets/image/logo-brandfiy.svg" alt="">
                    </a>
                    <div class="social">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 512 512">
                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 576 512">
                                <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#fff" viewBox="0 0 448 512">
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="payment">
                        <p>We Accept</p>
                        <div>
                            <img src="./public/assets/image/bank-trans.svg" alt="">
                            <img src="./public/assets/image/pay2.svg" alt="">
                            <img src="./public/assets/image/pay.svg" alt="">
                            <img src="./public/assets/image/pay4.svg" alt="">
                        </div>
                        <div>
                            <img src="./public/assets/image/amex-logo1.svg" alt="">
                            <img src="./public/assets/image/pay3.svg" alt="">
                            <img src="./public/assets/image/PayPal-Logo1.svg" alt="">
                            <img src="./public/assets/image/stripe1.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 camp-info">
                    <h4>COMPANY INFO</h4>
                    <div>
                        <a href="#">About Brandify </a>
                        <a href="#">laptops</a>
                        <a href="#">Home Appliances</a>
                        <a href="#">camera, photo & video</a>
                        <a href="#">televisions</a>
                        <a href="#">headphones</a>
                    </div>
                </div>
                <div class="col-md-3 help-support">
                    <h4>HELP & SUPPORT</h4>
                    <div>
                        <a href="#">Shipping Info</a>
                        <a href="#">Free Return - 45 Days</a>
                        <a href="#">Refund</a>
                        <a href="#">How To Order</a>
                        <a href="#">How To Track</a>
                        <a href="#">Brandify CLUB</a>
                        <a href="#">Brandify VIP</a>
                    </div>
                </div>
                <div class="col-md-2 customer-care">
                    <h4>CUSTOMER CARE</h4>
                    <div>
                        <a href="#">Contact us</a>
                        <a href="#">Brandify APP Download</a>
                        <a href="#">Payment Method</a>
                        <a href="#">Bonus Point</a>
                    </div>
                </div>
            </div>
            <div class="row s-contant px-5 py-3">
                    <div class="col-md-6">
                        <img src="./public/assets/image/footer-logo.png" alt="">
                        <p>
                            BRANDIFYL.L.C. for Marketing Solutions
                            <br>
                            The Meydan Business Center, Nad Al Sheba, Dubai,
                            <br>
                            United Arab of Emirates.
                            <br>
                            P.O. BOX 9305
                        </p>

                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center ">
                        <div class="footer-desc">
                            <p class="text-center">Mastering social media channels and digital marketing, tools and tactics</p>
                            <span class="text-center d-block text-white" >Support@brandifyuae.com</span>
                            <p class="text-center">Copyright © <span id="currentYear">  </span> BRANDIFY All rights reserved. </p>
                        </div>
                    </div>
            </div>
        </div>
      </footer>
      <!-- End Footer -->
    <script src="./public/assets/js/bootstrap-popper.js"></script>
    <script src="./public/assets/js/bootstrap.js"></script>
    <script src="./public/assets/js/jquary.js"></script>
    <script src="./public/assets/js/index.js"></script>
  </body>
</html>
