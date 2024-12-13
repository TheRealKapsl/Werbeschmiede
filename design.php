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
  <section class="duik-promo gradient-primary text-center">
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
    <!-- Values -->
    <section id="values" class="bg-dark position-relative py-11">
      <div class="container">
        <div class="w-md-75 w-lg-50 text-center mx-auto mb-6">
          <h2 class="text-light text-center mb-0">Unsere Werte</h2>
          <p class="text-grey mb-0">und was uns ausmacht!</p>
        </div>

        <div class="row position-relative z-index-1">
          <div class="col-md-6 mb-5" data-aos="flip-left">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-warning mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Effizent</h5>
                <p class="mb-0">Keine unnötogen Wartezeiten.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-right">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-info mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Persönlich</h5>
                <p class="mb-0">Wir wollen dass das Ergebnis zu Ihnen passt.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-left">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-secondary mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Fair</h5>
                <p class="mb-0">Vom den Arbeitsabläufen bis zum Preis.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-right">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-danger mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Innovativ</h5>
                <p class="mb-0">Statt 08/15.</p>
              </div>
            </div>
          </div>
        </div>

        <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 300">
          <path id="Path_11" fill="#f8fafd" data-name="Path 1" d="M0,1081.586H1920v-300Z" transform="translate(0 -781.586)"></path>
        </svg>
      </div>
    </section>

    <section class="bg-light py-11">
      <div class="container">
        <!-- Social Media Marketing -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-7 align-self-center pr-lg-5 mb-5 mb-lg-0">
            <h3 class="h4 text-uppercase mb-2">Social Media Marketing</h3>
            <p>Mittlerweile betreuen wir multible Social Media Kanäle mit einer <strong class="text-primary">stätig wachsenden Reichweite</strong> und mehrere <strong class="text-primary">Tausden Follower</strong>.</p>
            <p class="mb-5">Wir erschaffen gemeinsam mit Ihnen ein <strong class="text-primary">maßgeschniedertes Marketingkonzept</strong> welches genau für Ihr Unternehmen und Projekt geeignet ist und passen dies laufend an.</p>
            <a class="btn btn-sm btn-primary" href="<?php echo $websiteUrl."socialmedia/"; ?>">
              <i class="fas fa-info-circle mr-1"></i> Mehr Informationen
            </a>
          </div>

          <div class="col-lg-5 order-first order-lg-last mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="assets/img/backgrounds/socialmedia.png" alt="Social Media Marketing" loading="lazy">
          </div>
        </div>
        <!-- End - Social Media Marketing -->

        <hr class="my-8">

        <!-- Corporate Design -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="assets/img/backgrounds/corporatedesign.png" alt="Corporate Design" loading="lazy">
          </div>

          <div class="col-lg-7 align-self-center pl-lg-5">
            <h3 class="h4 text-uppercase mb-2">Corporate Design</h3>
            <p class="mb-5">Wir schaffen <strong class="text-primary">Wiedererkennungswerte</strong>! Beginnend mit persönlcih angepassten E-Mail Signaturen bis zum Farb- und Schriftdesign kümmern wir uns um Ihre <strong class="text-primary">Firmenidentität</strong>.</p>
            <a class="btn btn-sm btn-outline-primary" href="<?php echo $websiteUrl."design/"; ?>">
              <i class="fas fa-info-circle mr-1"></i> Mehr Informationen
            </a>
          </div>
        </div>
        <!-- End - Corporate Design -->

        <hr class="my-8">

        <!-- Video -->
        <div style="overflow-x: hidden" class="row">
          <div class="col-lg-7 align-self-center pr-lg-5 mb-5 mb-lg-0">
            <h3 class="h4 text-uppercase mb-3">Werbevideos</h3>
            <p class="mb-5">Egal ob ein kurzer <strong class="text-primary">cinematischer Trailer, Interviews oder Kurzvideos</strong> für den Social Media Kanal, mit der geeigneten Ausrüstung und Expertise sind wir auch in diesem Bereich vertreten.</p>
            <a class="btn btn-sm btn-primary" href="<?php echo $websiteUrl."video/"; ?>">
              <i class="fas fa-info-circle mr-1"></i> Mehr Informationen
            </a>
          </div>

          <div class="col-lg-5 order-first order-lg-last mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img class="img-fluid" src="assets/img/backgrounds/video.png" alt="Werbevideos" loading="lazy">
          </div>
        </div>
        <!-- End - Video -->

        <hr class="my-8">
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