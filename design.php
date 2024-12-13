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
  <link rel="shortcut icon" href="../assets/img/favicon/favicon-<?php echo $info_website_color; ?>.ico">

  <!--  Meta tags -->
  <meta name="keywords" content="<?php echo $info_website_keywords; ?>">
  <meta name="description" content="<?php echo $info_website_description; ?>">
  <meta name="author" content="Skyrise - The-Programmer">
  <meta name="robots" content="index, follow">

  <!-- Schema.org -->
  <meta itemprop="name" content="<?php echo "Server rules - ".$info_website_name; ?>">
  <meta itemprop="url" content="<?php echo $websiteUrl."rules/"; ?>">
  <meta itemprop="description" content="Find the rules of our server on this page.">
  <meta itemprop="image" content="../assets/img/backgrounds/home.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="<?php echo $host_web_site; ?>">
  <meta name="twitter:title" content="<?php echo "Server rules - ".$info_website_name; ?>">
  <meta name="twitter:url" content="<?php echo $websiteUrl."rules/"; ?>">
  <meta name="twitter:description" content="Find the rules of our server on this page.">
  <meta name="twitter:image" content="../assets/img/backgrounds/home.jpg">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo "Server rules - ".$info_website_name; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $websiteUrl."rules/"; ?>">
  <meta property="og:image" content="../assets/img/backgrounds/home.jpg">
  <meta property="og:description" content="Find the rules of our server on this page.">
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
          <h1 class="animate__animated animate__fadeInUp text-white text-uppercase">Server rules</h1>
          <p class="text-light mb-0">Find the rules of our server on this page</p>
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
            <h2 class="h5 text-uppercase">Article 1 - Nulla pharetra nisl</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus pellentesque diam. Vestibulum ultrices tellus ac ullamcorper tempor. Vivamus nisl mi, tempus non quam sed, mattis porttitor purus. Sed posuere leo id vehicula consequat. Duis nunc risus, vulputate sit amet enim et, iaculis facilisis sapien. Phasellus sagittis vestibulum odio, at pellentesque diam laoreet id. Praesent imperdiet iaculis risus nec vestibulum.</p>
            
            <p>Praesent nec ligula laoreet, dictum ligula ornare, consectetur erat. Sed consectetur euismod euismod. Aliquam maximus arcu et neque luctus, sodales convallis odio rutrum. Vestibulum gravida ut sapien non fermentum. Sed euismod fringilla enim. Vestibulum congue libero at justo sodales cursus vitae ac nisi. Ut ligula turpis, ultrices maximus bibendum at, consectetur non magna. Proin pretium eleifend purus, sit amet rutrum nunc fringilla in.</p>
            
            <p class="mb-2">Morbi faucibus laoreet lectus quis pellentesque :</p>

            <ul class="list-group">
              <li class="list-group">- Vivamus in arcu in sem luctus auctor ut at neque. Morbi sed tortor dignissim, gravida ligula fringilla, sollicitudin tortor.</li>
              <li class="list-group">- Phasellus ipsum nibh, vehicula non risus a, tempus ultrices dolor. Duis sed lacinia tellus, eget dignissim mi.</li>
              <li class="list-group">- Donec rhoncus pulvinar urna, vitae sodales diam accumsan vitae. Sed nulla risus, semper nec mauris ac, bibendum ultricies magna.</li>
              <li class="list-group">- Nullam id mi neque. Etiam ullamcorper mauris augue, vitae tincidunt ipsum placerat eget.</li>
              <li class="list-group">- Vivamus ac dui leo. Phasellus sit amet diam faucibus, accumsan diam non, porttitor metus. Duis aliquam posuere nisl id elementum.</li>
              <li class="list-group">- Donec a bibendum est. Aliquam sed massa non nibh lacinia egestas.</li>
            </ul>
          </div>

          <div>
            <h2 class="h5 text-uppercase">Article 2 - Dignissim euismod</h2>
            
            <p>In molestie ipsum id leo faucibus molestie vitae eget sem. Suspendisse luctus lacus dolor, sed vehicula lorem rhoncus sed. In dapibus feugiat dui, sit amet laoreet enim. Aliquam enim nisl, suscipit a pellentesque eget, condimentum quis nisi. Pellentesque faucibus leo sed quam euismod, sit amet condimentum sem interdum. Quisque leo mi, vestibulum dignissim dolor et, porttitor rutrum neque. Vivamus cursus arcu in ex congue porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc at sem tortor. Etiam a blandit leo, vel elementum nunc. Proin sagittis porttitor pretium.</p>
            
            <p class="mb-2">Proin nec sollicitudin nulla vestibulum id lobortis ex, aliquet dignissim justo :</p>

            <ul class="list-group mb-4">
              <li class="list-group">1. Nulla porta bibendum lacus nec ultricies.</li>
              <li class="list-group">2. Donec feugiat tincidunt neque, ac semper risus accumsan ut.</li>
              <li class="list-group">3. Aliquam auctor tellus lacus, at volutpat velit semper eget.</li>
              <li class="list-group">4. Etiam cursus eros dui, eu lacinia est venenatis et. Integer lorem ante.</li>
            </ul>

            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris at odio mauris. Aliquam luctus mattis euismod. Aliquam eget molestie ipsum. Donec rutrum arcu metus, id sagittis ante tempus sed. Donec eu risus eros. Suspendisse consectetur metus orci, ut gravida elit ultricies in. Etiam tristique porta felis, in mollis est feugiat ornare. Fusce porta molestie leo ut venenatis. Integer semper lorem eu mattis posuere.</p>
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

  <?php
    // Database connection \\
    if ($database_connection == 0) {
      echo '
        <div id="modalDatabaseConnection" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalDatabaseConnection" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-uppercase">A problem has occurred</h5>
              </div>
              <div class="modal-body">
                <p>The connection to the database of your server has not been done properly, please check the information you put in the <span class="font-weight-bold">config.php</span> located in the <span class="font-weight-bold">include</span> folder.</p>
                <p class="mb-0">If the problem persists, contact The-Programmer to solve the problem.</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-sm btn-primary" type="button" onClick="window.location.reload();"><i class="fas fa-sync-alt mr-1"></i> Refresh</button>
              </div>
            </div>
          </div>
        </div>
      ';
    }
  ?>

  <!-- JS - Global Compulsory -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>

  <!-- JS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/header-fixing.js"></script>

  <?php 
    // Database connection \\
    if ($database_connection == 0) {
      echo "
        <script>
          $('#modalDatabaseConnection').modal('toggle');

          function refresh(time)
          {
            setTimeout(function () { window.location.reload(); }, time*1000);
          }
          refresh(60);
        </script>
      ";
    }
  ?>
</body>
</html>