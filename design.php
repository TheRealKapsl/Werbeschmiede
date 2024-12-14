<?php 
  // Website \\
  require_once('include/data.php');

  $header = 2;
?>

<!--
  Designed by : Elias W.
-->

<!DOCTYPE html>
<html lang="<?php echo $info_website_language; ?>">
<head>
  <!-- Title -->
  <title><?php echo "Design - ".$info_website_name; ?></title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/img/favicon.png">

  <!--  Meta tags -->
  <meta name="keywords" content="<?php echo $info_website_keywords; ?>">
  <meta name="description" content="<?php echo $info_website_description; ?>">
  <meta name="author" content="Werbeschmiede">
  <meta name="robots" content="index, follow">

  <!-- Schema.org -->
  <meta itemprop="name" content="<?php echo "Design - ".$info_website_name; ?>">
  <meta itemprop="url" content="<?php echo $websiteUrl."design/"; ?>">
  <meta itemprop="description" content="Finde alles über unsere Services im Design heraus.">
  <meta itemprop="image" content="../assets/img/backgrounds/home.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="<?php echo $host_web_site; ?>">
  <meta name="twitter:title" content="<?php echo "Design - ".$info_website_name; ?>">
  <meta name="twitter:url" content="<?php echo $websiteUrl."design/"; ?>">
  <meta name="twitter:description" content="Finde alles über unsere Services im Design heraus.">
  <meta name="twitter:image" content="../assets/img/backgrounds/home.jpg">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo "Design - ".$info_website_name; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $websiteUrl."design/"; ?>">
  <meta property="og:image" content="../assets/img/backgrounds/home.jpg">
  <meta property="og:description" content="Finde alles über unsere Services im Design heraus.">
  <meta property="og:site_name" content="<?php echo $info_website_name; ?>">
  <meta property="og:locale" content="<?php echo $info_website_language_og; ?>">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS - Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- CSS - Template -->
  <link rel="stylesheet" href="../assets/css/<?php echo $info_website_color; ?>.css">
</head>
<body>
  <!-- Header -->
  <?php require_once('include/header.php'); ?>
  <!-- End - Header -->

  <!-- Promo Section -->
  <section style="background: url(../assets/img/backgrounds/design.png) no-repeat center; background-size: cover;" class="duik-promo gradient-primary text-center">
    <div class="container duik-promo-container">
      <div class="d-flex justify-content-center position-relative mh-25rem pt-11 py-6">
        <div class="align-self-center w-md-75">
          <h1 class="animate__animated animate__fadeInUp text-white text-uppercase">Design</h1>
          <p class="text-light mb-0">Finde alles über unsere Services im Design heraus.</p>
        </div>
      </div>
    </div>

    <!-- SVG BG -->
    <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
      <polygon fill="#ffffff" style="fill-opacity: .05;" points="-0.5,322.5 -0.5,121.5 658.3,212.3 "></polygon>
      <polygon fill="#ffffff" style="fill-opacity: .1;" points="-2,323 1920,323 1920,-1 "></polygon>
    </svg>
    <!-- End - SVG BG -->
  </section>
  <!-- End - Promo Section -->

  <main class="bg-light">

    <section class="bg-light py-11">
      <div class="container">
        <!-- Logo Design -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-7 align-self-center pr-lg-5 mb-5 mb-lg-0">
            <h3 class="h4 text-uppercase mb-2">Logo</h3>
            <p>Der erste Schritt zur <strong class="text-primary">Wiedererkennung</strong> ist das <strong class="text-primary">Logo</strong>.</p>
            <p class="mb-5">Wir bieten neben der Hilfestellung bei der Ideenfindung und den ersten Skitzzen einen strukturierten Weg zum Erfolg.</p>
            <a class="btn btn-sm btn-primary" href="mailto:office@werbeschmiede.eu?subject=Anfrage%20-%20Logo&body=Hallo!%0D%0A%0D%0AWir%20m%C3%B6chten%20bitte%20ein%20Angebot%20zum%20Logo%20Design%20erhalten!%0D%0A%0D%0AHier%20ein%20paar%20Infos%20zum%20Projekt%3A%0D%0A%0D%0AUnd%20hier%20sind%20wir%20am%20besten%20zu%20erreichen%3A%0D%0A%0D%0ALiebe%20Gr%C3%BC%C3%9Fe!";">
              <i class="fas fa-envelope mr-1"></i> Angebot Einholen
            </a>
          </div>

          <div class="col-lg-5 order-first order-lg-last mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="../assets/img/backgrounds/logo.png" alt="Logo Design" loading="lazy">
          </div>
        </div>
        <!-- End - Logo Design -->

        <hr class="my-8">

        <!-- Corporate Design -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="../assets/img/backgrounds/corporatedesign.png" alt="Corporate Design" loading="lazy">
          </div>

          <div class="col-lg-7 align-self-center pl-lg-5">
            <h3 class="h4 text-uppercase mb-2">Corporate Design</h3>
            <p>Farbschema, Druckformate und Signaturen sind ein paar Beispiele aus den Auswahlmöglichkeiten welche individuell zusammengestellt werden können.</p>
            <p class="mb-5">Natürlich bieten wir auch empfohlene Pakete an.</p>
            <a class="btn btn-sm btn-outline-primary" href="mailto:office@werbeschmiede.eu?subject=Anfrage%20-%20Corporate%20Design&body=Hallo!%0D%0A%0D%0AWir%20m%C3%B6chten%20bitte%20ein%20Angebot%20zum%20Corporate%20Design%20erhalten!%0D%0A%0D%0AHier%20ein%20paar%20Infos%20zum%20Projekt%3A%0D%0A%0D%0AUnd%20hier%20sind%20wir%20am%20besten%20zu%20erreichen%3A%0D%0A%0D%0ALiebe%20Gr%C3%BC%C3%9Fe!">
              <i class="fas fa-envelope mr-1"></i> Angebot Einholen
            </a>
          </div>
        </div>
        <!-- End - Corporate Design -->

        <hr class="my-8">

        <!-- Corporate Identity -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-7 align-self-center pr-lg-5 mb-5 mb-lg-0">
            <h3 class="h4 text-uppercase mb-3">Corporate Identity</h3>
            <p class="mb-5">Während sich ein Corporate Design primär Formatierungen behandelt, geht es bei einer Corporate Identity um einen ausführlichen Steckbrief, das Design wird mit emotionen und Werten verbunden und präsentiert.</p>
            <a class="btn btn-sm btn-primary" href="mailto:office@werbeschmiede.eu?subject=Anfrage%20-%20Corporate%20Identity&body=Hallo!%0D%0A%0D%0AWir%20m%C3%B6chten%20bitte%20ein%20Angebot%20zum%20Corporate%20Identity%20erhalten!%0D%0A%0D%0AHier%20ein%20paar%20Infos%20zum%20Projekt%3A%0D%0A%0D%0AUnd%20hier%20sind%20wir%20am%20besten%20zu%20erreichen%3A%0D%0A%0D%0ALiebe%20Gr%C3%BC%C3%9Fe!">
              <i class="fas fa-envelope mr-1"></i> Angebot Einholen
            </a>
          </div>

          <div class="col-lg-5 order-first order-lg-last mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="../assets/img/backgrounds/corporateidentity.png" alt="Corporate Identity" loading="lazy">
          </div>
        </div>
        <!-- End - Corporate Identity -->

        <hr class="my-8">

        <!-- Advertisment Design -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="assets/img/backgrounds/addesign.png" alt="Advertisment Design" loading="lazy">
          </div>

          <div class="col-lg-7 align-self-center pl-lg-5">
            <h3 class="h4 text-uppercase mb-2">Advertisment Design</h3>
            <p class="mb-5"></p>
            <a class="btn btn-sm btn-outline-primary" href="<?php echo $websiteUrl."design/"; ?>">
              <i class="fas fa-info-circle mr-1"></i> Mehr Informationen
            </a>
          </div>
        </div>
        <!-- End - Advertisment Design -->
    </section>
    <!-- End - Presentation -->

    <!-- Portfolio -->
    <section id="portfolio" class="bg-light py-11">
      <div class="container">
        <div class="w-md-75 w-lg-50 mx-auto text-center mb-9">
          <h2 class="h3 text-center text-uppercase">Portfolio</h2>
          <p>Fiktive Projekte als Veranschaulichung.</p>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/restaurant_1.png" data-lightbox="roadtrip" data-title="Restaurant">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/restaurant_1.png" alt="Restaurant" loading="lazy">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/can_1.png" data-lightbox="roadtrip" data-title="Dose">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/can_1.png" alt="Dose" loading="lazy">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/sign_1.png" data-lightbox="roadtrip" data-title="Schild">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/sign_1.png" alt="Schild" loading="lazy">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/pickup_1.png" data-lightbox="roadtrip" data-title="Pickup">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/pickup_1.png" alt="Pickup" loading="lazy">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/sign_2.png" data-lightbox="roadtrip" data-title="Werbeschild">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/sign_2.png" alt="Werbeschild" loading="lazy">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 text-center mb-5" data-aos="zoom-in-down" data-aos-anchor-placement="bottom-bottom">
            <a href="assets/img/portfolio/tabletent_1.png" data-lightbox="roadtrip" data-title="Tischzelt">
              <img class="picture-gallery img-fluid shadow rounded" src="assets/img/portfolio/tabletent_1.png" alt="Tischzelt" loading="lazy">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End - Gallery -->

    <!-- Footer -->
    <?php require_once('include/footer.php'); ?>
    <!-- End - Footer -->
  </main>


  <!-- Footer -->
  <?php require_once('include/footer.php'); ?>
  <!-- End - Footer -->

  <!-- Go to Top -->
  <a class="js-go-to duik-go-to" href="javascript:;">
    <span class="fa fa-arrow-up duik-go-to__inner"></span>
  </a>
  <!-- End - Go to Top -->

  <!-- JS - Global Compulsory -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>

  <!-- JS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/header-fixing.js"></script>
</body>
</html>