<footer class="bg-dark pt-7">
  <div class="container">
    <div class="row mt-3 pb-5">
      <div class="col-12 col-lg-6 mb-3 mb-lg-0">
        <h5 class="text-uppercase text-light"><?php echo $info_website_name; ?></h5>
        <p class="mb-3 text-muted"><?php echo $info_website_description; ?></p>
      </div>

      <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
        <h5 class="text-uppercase text-light">Navigation</h5>
        <ul class="list-unstyled text-small">
          <li class="<?php if(isset($header) AND $header == 1) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."#home"; ?>">Home</a></li>
          <li class="<?php if(isset($header) AND $header == 1) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."#values"; ?>">Werte</a></li>
          <li class="<?php if(isset($header) AND $header == 1) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."#portfolio"; ?>">Portfolio</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <h5 class="text-uppercase text-light">Services</h5>
        <ul class="list-unstyled text-small">
          <li class="<?php if(isset($header) AND $header == 2) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."design/"; ?>">Design</a></li>
          <li class="<?php if(isset($header) AND $header == 3) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."website/"; ?>">Website</a></li>
          <li class="<?php if(isset($header) AND $header == 4) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."socialmedia/"; ?>">Social Media Marketing</a></li>
          <li class="<?php if(isset($header) AND $header == 5) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."photography/"; ?>">Fotografie</a></li>
          <li class="<?php if(isset($header) AND $header == 6) { echo "js-scroll-nav"; } ?> mb-1"><a class="link-muted" href="<?php echo $websiteUrl."videos/"; ?>">Werbevideos</a></li>
        </ul>
      </div>
    </div>

    <hr class="opacity-10 mb-0">

    <!-- Copyright and Social Icons -->
    <div class="row px-md-3 py-4">
      <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
        <small class="text-white">&copy; <?php $year_now = date("Y"); if ($year_now == 2024) { echo $year_now." ".$info_website_name; } else { echo "seit ".$year_now." ".$info_website_name; } ?> - All rights reserved - Icons by Icons8.</small>
      </div>

      <div class="col-md-4 align-self-center">
        <ul class="list-inline text-center text-md-right mb-0">
          <?php
            if (!empty($info_website_page_facebook)) {
              echo '
                <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <a class="text-white" target="_blank" href="'.$info_website_page_facebook.'">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
              ';
            }

            if (!empty($info_website_page_instagram)) {
              echo '
                <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                  <a class="text-white" target="_blank" href="'.$info_website_page_instagram.'">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              ';
            }

            if (!empty($info_website_page_twitter)) {
              echo '
                <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <a class="text-white" target="_blank" href="'.$info_website_page_twitter.'">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
              ';
            }

            if (!empty($info_teamspeak_ip) AND !empty($info_teamspeak_port)) {
              echo '
                <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Teamspeak">
                  <a class="text-white" href="ts3server://'.$info_teamspeak_ip.':'.$info_teamspeak_port.'">
                    <i class="fab fa-teamspeak"></i>
                  </a>
                </li>
              ';
            }

            if (!empty($info_website_discord)) {
              echo '
                <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Discord">
                  <a class="text-white" target="_blank" href="'.$info_website_discord.'">
                    <i class="fab fa-discord"></i>
                  </a>
                </li>
              ';
            }
          ?>
        </ul>
      </div>
    </div>
    <!-- End - Copyright and Social Icons -->
  </div>
</footer>