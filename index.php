<?php 
  // Website \\
  require_once('include/data.php');

  $header = 1;
?>

<!--
  Designed by : Elias W.
-->

<!DOCTYPE html>
<html lang="<?php echo $info_website_language; ?>">
<head>
  <!-- Title -->
  <title><?php echo $info_website_name; ?></title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">

  <!--  Meta tags -->
  <meta name="keywords" content="<?php echo $info_website_keywords; ?>">
  <meta name="description" content="<?php echo $info_website_description; ?>">
  <meta name="author" content="Werbeschmiede">
  <meta name="robots" content="index, follow">

  <!-- Schema.org -->
  <meta itemprop="name" content="<?php echo $info_website_name; ?>">
  <meta itemprop="url" content="<?php echo $websiteUrl; ?>">
  <meta itemprop="description" content="<?php echo $info_website_description; ?>">
  <meta itemprop="image" content="assets/img/backgrounds/home.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="<?php echo $host_web_site; ?>">
  <meta name="twitter:title" content="<?php echo $info_website_name; ?>">
  <meta name="twitter:url" content="<?php echo $websiteUrl; ?>">
  <meta name="twitter:description" content="<?php echo $info_website_description; ?>">
  <meta name="twitter:image" content="assets/img/backgrounds/home.jpg">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo $info_website_name; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $websiteUrl; ?>">
  <meta property="og:image" content="assets/img/backgrounds/home.jpg">
  <meta property="og:description" content="<?php echo $info_website_description; ?>">
  <meta property="og:site_name" content="<?php echo $info_website_name; ?>">
  <meta property="og:locale" content="<?php echo $info_website_language_og; ?>">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600">

  <!-- CSS - Implementing Plugins -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/vendor/lightbox/css/lightbox.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="assets/vendor/aos/css/aos.css">

  <!-- CSS - Template -->
  <link rel="stylesheet" href="assets/css/<?php echo $info_website_color; ?>.css">
</head>
<body class="bg-dark">
  <!-- Header -->
  <?php require_once('include/header.php'); ?>
  <!-- End - Header -->

  <!-- Promo Section -->
  <section id="home" style="background: url(assets/img/backgrounds/home.jpg) no-repeat center; background-size: cover;" class="duik-promo">
    <?php 
      if (isset($info_website_home_video) AND !empty($info_website_home_video)) {
    ?>
        <div class="video-container">
          <iframe width="1920" height="1080" src="https://www.youtube.com/embed/<?php echo $info_website_home_video; ?>?showinfo=0&autoplay=1&cc_load_policy=0&disablekb=1&fs=0&iv_load_policy=3&loop=1&modestbranding=1&rel=0&mute=1&controls=0&playlist=<?php echo $info_website_home_video; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    <?php
      }
    ?>

    <div class="container duik-promo-container">
      <div class="d-flex justify-content-center text-center position-relative h-100vh">
        <div class="align-self-center">
          <h1 class="animate__animated animate__zoomInDown header-home-font-size-title header-home-mb-subtitle text-white text-uppercase"><span class="text-primary">WerbeSchmiede</span></h1>
          <p class="animate__animated animate__fadeIn lead header-home-font-size-subtitle header-home-mb-button">Werbeagentur</p>
          <a class="btn btn btn-light text-uppercase mb-3 mb-md-0 mr-3" href="<?php echo $info_mail_link; ?>">
            <i class="far fa-envelope mr-2"></i>
            Mail
          </a>
          <a class="btn btn btn-primary text-uppercase mr-3 mr-md-0" href="<?php echo $info_phone_link; ?>">
            <i class="fas fa-phone mr-2"></i>
            Telefon
          </a>
        </div>
      </div>
    </div>

    <svg style="z-index: 1;" class="hero-1-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="hero-1-parallax">
        <?php 
          if ($info_website_color == "custom") {
            $color_hex = "#ff9900";
            $color_rgba = "225, 153, 0,";
          }
          elseif ($info_website_color == "green") {
            $color_hex = "#72c02c";
            $color_rgba = "114, 192, 44,";
          }
          elseif ($info_website_color == "red") {
            $color_hex = "#e74b3c";
            $color_rgba = "231, 75, 60,";
          }
          elseif ($info_website_color == "blue") {
            $color_hex = "#107ef4";
            $color_rgba = "16, 126, 244,";
          }
          elseif ($info_website_color == "pink") {
            $color_hex = "#e81c62";
            $color_rgba = "232, 28, 98,";
          }
          elseif ($info_website_color == "purple") {
            $color_hex = "#9b6bcc";
            $color_rgba = "155, 107, 204,";
          }
        ?>
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(<?php echo $color_rgba; ?> 0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(<?php echo $color_rgba; ?> 0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(<?php echo $color_rgba; ?> 0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="<?php echo $color_hex; ?>" />
      </g>
    </svg>
  </section>
  <!-- End - Promo Section -->

  <!-- Services -->
  <div class="container z-index-2 position-relative pb-11">
    <section class="duik-icon-block duik-icon-block--pull2top rounded">
      <div class="row no-gutters header-shadow">
        <div class="col-md border-bottom border-md-bottom-0">
          <div class="duik-icon-block__item">
            <img class="img-fluid mb-5" src="assets/img/icon_design.png" alt="Fesign Icon" loading="lazy">

            <h4 class="h5 mb-2">Design</h4>
            <p class="mb-5">Kreative Ideen für Print und Online.</p>
            <a class="btn btn-sm btn-primary text-uppercase stretched-link mb-0" href="<?php echo $websiteUrl."design/"; ?>"><i class="fas fa-info-circle mr-1"></i> Mehr Informationen</a>
          </div>
        </div>
        <div class="col-md border-md-left border-bottom border-md-bottom-0">
          <div class="duik-icon-block__item">
            <img class="img-fluid mb-5" src="assets/img/icon_webdev.png" alt="Website Icon" loading="lazy">

            <h4 class="h5 mb-2">Website</h4>
            <p class="mb-5">Benutzerfreundlich und professionell.</p>
            <a class="btn btn-sm btn-primary text-uppercase stretched-link mb-0" href="<?php echo $websiteUrl."website/"; ?>"><i class="fas fa-info-circle mr-1"></i> Mehr Informationen</a>
          </div>
        </div>
        <div class="col-md border-md-left">
          <div class="duik-icon-block__item">
            <img class="img-fluid mb-5" src="assets/img/icon_camera.png" alt="Camera Icon" loading="lazy">

            <h4 class="h5 mb-2">Fotografie</h4>
            <p class="mb-5">Prefekt in Szene.</p>
            <a class="btn btn-sm btn-primary text-uppercase stretched-link mb-0" href="<?php echo $websiteUrl."photography/"; ?>"><i class="fas fa-info-circle mr-1"></i> Mehr Informationen</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End - Services -->

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
                <h5 class="text-uppercase mb-1">Effizient</h5>
                <p class="mb-0">Schnelle und zielgerichtete Lösungen.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-right">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-info mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Persönlich</h5>
                <p class="mb-0">Wir nehmen uns Zeit für individuelle Beratung.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-left">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-secondary mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Fair</h5>
                <p class="mb-0">Transparente Preise und klare Kommunikation.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-5" data-aos="flip-right">
            <div class="media h-100 bg-light shadow-custom rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-danger mr-4 mt-1"></i>

              <div class="media-body">
                <h5 class="text-uppercase mb-1">Innovativ</h5>
                <p class="mb-0">Wir denken kreativ für frische und moderne Lösungen.</p>
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
            <p>Erreiche deine Zielgruppe dort, wo sie aktiv ist - auf<strong class="text-primary">Social Media</strong>!</p>
            <p class="mb-5">Mit maßgeschneiderten <strong class="text-primary">Strategien</strong> und laufender Optimierung bringen wir dein Unternehmen in den Fokus. Ob <class="text-primary">Facebook, Instagram, Youtube</strong> oder <class="text-primary">LinkedIn</strong> - wir bauen <strong class="text-primary">Reichweite</strong> auf, steigern die <class="text-primary">Interaktion</strong> und sorgen für messbare Erfolge. Vertraue auf <class="text-primary">kreative Konzepte</strong> und <class="text-primary">datenbasierte Entscheidugnen</strong>, die eine <strong class="text-primary">Community</strong> entstehen und wachsen lassen.</p>
            <p class="mb-5">Jetzt anfragen und gemeinsam dein Unternehmen auf das nächste Level bringen!</p>
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
            <img class="img-fluid" src="assets/img/backgrounds/corporatedesign.png" alt="Corporate Design"< loading="lazy">
          </div>

          <div class="col-lg-7 align-self-center pl-lg-5">
            <h3 class="h4 text-uppercase mb-2">Corporate Design</h3>
            <p class="mb-5">Wir schaffen <strong class="text-primary">Wiedererkennungswerte</strong>! Beginnend mit persönlich angepassten E-Mail Signaturen bis zum Farb- und Schriftdesign kümmern wir uns um Ihre <strong class="text-primary">Firmenidentität</strong>.</p>
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
            <p class="mb-5">Egal, ob ein kurzer <strong class="text-primary">cinematischer Trailer, Interviews oder Kurzvideos</strong> für den Social-Media-Kanal, mit der geeigneten Ausrüstung und Expertise sind wir auch in diesem Bereich vertreten.</p>
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

        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <h3 class="h5 font-weight-normal"><i class="fas fa-users text-primary mr-2"></i> Teamwork</h3>
            <p>Makes the Dreamwork, wir setzen auf qualitative Zusammenarbeit.</p>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h3 class="h5 font-weight-normal"><i class="fas fa-tools text-primary mr-2"></i> Technik</h3>
            <p>Mit den neuesten und renommiertesten Programmen zum Erfolg.</p>
          </div>
          <div class="col-md-4">
            <h3 class="h5 font-weight-normal"><i class="fas fa-layer-group text-primary mr-2"></i> Workflows</h3>
            <p>Durch ausgeklügelte Arbeitsabläufe erarbeiten wir einen hohen Standard.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End - Presentation -->

    <!-- Our team 
    <section id="our-team" class="bg-primary-light py-11">
      <div class="container">
        <div class="w-md-75 w-lg-50 mx-auto text-center mb-9">
          <h2 class="h3 text-center text-uppercase">Sie werden betreut von</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper diam vel tempus dignissim</p>
        </div>

        <div style="overflow-x: hidden" class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Fondateur</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Developer</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Graphic designer</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Administrator</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5 mb-md-0" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Moderator</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5 mb-md-0" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Support</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5 mb-md-0" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Support</p>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center mb-5 mb-md-0" data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom">
            <img class="img-fluid shadow rounded-circle mb-4" src="assets/img/avatars/user-unknown.jpg" alt="Name user" loading="lazy">
            <h4 class="text-uppercase mb-0">Name</h4>
            <p class="text-uppercase">Support</p>
          </div>
      </div>
    </section>
     End - Our team -->

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

  <!-- Go to Top -->
  <a class="js-go-to duik-go-to" href="javascript:;">
    <span class="fa fa-arrow-up duik-go-to__inner"></span>
  </a>
  <!-- End - Go to Top -->

  <!-- JS - Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/vendor/lightbox/js/lightbox.js"></script>
  <script src="assets/vendor/aos/js/aos.js"></script>

  <!-- JS -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/header-fixing.js"></script>

  <script>
    // Animation AOS \\
    AOS.init();
  </script>
</body>
</html>