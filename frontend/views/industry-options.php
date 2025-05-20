<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - eStartup Bootstrap Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- <link rel="stylesheet" href="../css/metrics.css"> -->
  <link rel="stylesheet" href="../css/industry-options.css">
  <link href="../css/main.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../css/styles.css"> -->
  <!-- <link rel="stylesheet" href="../css/modal.css"> -->

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="../views/metrics.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../favicon_io/apple-touch-icon.png" alt=""> -->
        <h1 class="sitename"><span>Job</span> Role Evaluation</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="../views/metrics.php" class="active">Metrics</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background" data-aos="fade-up" data-aos-delay="100">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="welcome-container">
            <h2 id="welcome-text">WELCOME</h2>
            <p class="subtext">SELECT AN INDUSTRY TO VIEW INSIGHTFUL METRICS.</p>
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-truck-front-fill"></i></div>
                <h4 class="title"><a href="#performance" class="stretched-link">Transportation</a></h4>
              </div>
            </div>
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-capsule-pill"></i></div>
                <h4 class="title"><a href="#finance" class="stretched-link">Pharmaceutical</a></h4>
              </div>
            </div><!--End Icon Box -->
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-wifi"></i></div>
                <h4 class="title"><a href="#revenue" class="stretched-link">Telecommunications</a></h4>
              </div>
            </div><!--End Icon Box -->
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-gear-wide-connected"></i></div>
                <h4 class="title"><a href="#market" class="stretched-link">Manufacturing</a></h4>
              </div>
            </div><!--End Icon Box -->
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-hammer"></i></div>
                <h4 class="title"><a href="#susceptible" class="stretched-link">Mining</a></h4>
              </div>
            </div><!--End Icon Box -->
            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-cup-hot-fill"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Hospitality</a></h4>
              </div>
            </div><!--End Icon Box -->

            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-newspaper"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Media and News</a></h4>
              </div>
            </div><!--End Icon Box -->

            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-flower2"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Agriculture</a></h4>
              </div>
            </div><!--End Icon Box -->

            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-cpu-fill"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Computer & Technology</a></h4>
              </div>
            </div><!--End Icon Box -->


            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-mortarboard-fill"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Education</a></h4>
              </div>
            </div><!--End Icon Box -->


            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-cash-coin"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Finance & Economics</a></h4>
              </div>
            </div><!--End Icon Box -->

            
            <div class="col-xl-4 col-md-6">
              <div class="icon-box position-relative">
                <div class="icon"><i class="bi bi-heart-pulse-fill"></i></div>
                <h4 class="title"><a href="#dependence" class="stretched-link">Health care</a></h4>
              </div>
            </div><!--End Icon Box -->
        </div>
      </div>
    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Job Role Evaluation</strong> <span>All Rights
            Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- SweetAlert CDN must come first -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Your alerts.js file -->
  <script src="../javascript/alerts.js"></script>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <!-- <script src="../javascript/script.js"></script> -->
  <script type="module" src="../javascript/script.js"></script>
  <script src="../javascript/main.js"></script>
  <script src="../javascript/metrics.js"></script>
  <script src="../javascript/performance_modal.js"></script>
  <script src="../javascript/cost_modal.js"></script>
  <script src="../javascript/revenue_modal.js"></script>
  <script src="../javascript/market_modal.js"></script>
  <script src="../javascript/susceptible_modal.js"></script>
  <script src="../javascript/dependence_modal.js"></script>

</body>

</html>

