<?php 
  // Website \\
  require_once('include/data.php');

  $header = 6;
?>

<!--
  Designed by : Elias W.
-->

<!DOCTYPE html>
<html lang="<?php echo $info_website_language; ?>">
<head>
  <!-- Title -->
  <title><?php echo "Werbevideos - ".$info_website_name; ?></title>

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
  <meta itemprop="name" content="<?php echo "Werbevideos - ".$info_website_name; ?>">
  <meta itemprop="url" content="<?php echo $websiteUrl."videos/"; ?>">
  <meta itemprop="description" content="Finde alles über unsere Services rund um Werbevideos heraus.">
  <meta itemprop="image" content="../assets/img/backgrounds/home.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="<?php echo $host_web_site; ?>">
  <meta name="twitter:title" content="<?php echo "Werbevideos - ".$info_website_name; ?>">
  <meta name="twitter:url" content="<?php echo $websiteUrl."videos/"; ?>">
  <meta name="twitter:description" content="Finde alles über unsere Services rund um Werbevideos heraus.">
  <meta name="twitter:image" content="../assets/img/backgrounds/home.jpg">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo "Werbevideos - ".$info_website_name; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $websiteUrl."videos/"; ?>">
  <meta property="og:image" content="../assets/img/backgrounds/home.jpg">
  <meta property="og:description" content="Finde alles über unsere Services rund um Werbevideos heraus.">
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

  <main>
    <div class="container py-11">
      <div class="row">
        <div class="col-lg-12">
          <div class="mb-6">
            <h2 class="h5 text-uppercase">Work in Progress</h2>

            <p>Wir abreiten aktuell an einem ausführlichen Text!</p>
          </div>
        </div>
      </div>
    </div>
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