<header class="duik-header">
  <!-- Navbar -->
  <nav class="js-navbar-scroll navbar navbar-expand-lg navbar-dark bg-primary-md fixed-top flex-nowrap py-4 transition-bg-03s" data-onscroll-classes="bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $websiteUrl; ?>">
        <img src="<?php echo $websiteUrl; ?>assets/img/logo/logo_header_orange.png" alt="Logo <?php echo $info_website_name; ?>" loading="lazy">
      </a>

      <button class="navbar-toggler-custom" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse my-3 my-lg-0" id="navbar">
        <!-- Header Links -->
        <ul class="navbar-nav mr-lg-auto ml-lg-2 ml-xl-4">
          <li class="<?php if(isset($header) AND $header == 1) { echo "js-scroll-nav"; } ?> nav-item ml-0 ml-md-3 mr-3">
            <a class="nav-link text-uppercase <?php if(isset($header) AND $header == 1) { echo "active"; } ?>" href="<?php echo $websiteUrl; ?>">Home</a>
          </li>
          <li class="nav-item ml-0 ml-md-3 mr-3 dropdown">
            <a class="nav-link text-uppercase dropdown-toggle ml-md-0 <?php if(isset($header) AND ($header == 2 OR $header == 3 OR $header == 4 OR $header == 5 OR $header == 6)) { echo "active"; } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item <?php if(isset($header) AND $header == 2) { echo "active"; } ?>" href="<?php echo $websiteUrl."design/"; ?>">Design</a>
              <a class="dropdown-item <?php if(isset($header) AND $header == 3) { echo "active"; } ?>" href="<?php echo $websiteUrl."website/"; ?>">Website</a>
              <a class="dropdown-item <?php if(isset($header) AND $header == 4) { echo "active"; } ?>" href="<?php echo $websiteUrl."socialmedia/"; ?>">Social Media Marketing</a>
              <a class="dropdown-item <?php if(isset($header) AND $header == 5) { echo "active"; } ?>" href="<?php echo $websiteUrl."photography/"; ?>">Fotografie</a>
              <a class="dropdown-item <?php if(isset($header) AND $header == 6) { echo "active"; } ?>" href="<?php echo $websiteUrl."videos/"; ?>">Werbevideos</a>
            </div>
          </li>

          <?php 
            if ((isset($police_system_enable) AND $police_system_enable == 1) OR (isset($lottery_system_enable) AND $lottery_system_enable == 1) OR (isset($lottery_vehicle_system_enable) AND $lottery_vehicle_system_enable == 1) OR (isset($top_serveurs_enable) AND $top_serveurs_enable == 1)) {
          ?>
              <li class="nav-item ml-0 ml-md-3 dropdown">
                <a class="nav-link text-uppercase dropdown-toggle ml-md-0 <?php if(isset($header) AND ($header == 10 OR $header == 11 OR $header == 12 OR $header == 13)) { echo "active"; } ?>" href="#" id="navbarDropdownOther" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Systems
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownOther">
                  <?php 
                    if (isset($police_system_enable) AND $police_system_enable == 1) {
                      if (isset($header) AND $header == 10) {
                        echo '<a class="dropdown-item active" href="'.$websiteUrl.'modules/police-system/">Police system <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                      else 
                      {
                        echo '<a class="dropdown-item" href="'.$websiteUrl.'modules/police-system/">Police system <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                    }
                    
                    if (isset($lottery_system_enable) AND $lottery_system_enable == 1) {
                      if (isset($header) AND $header == 11) {
                        echo '<a class="dropdown-item active" href="'.$websiteUrl.'modules/lottery/">Lottery <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                      else 
                      {
                        echo '<a class="dropdown-item" href="'.$websiteUrl.'modules/lottery/">Lottery <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                    }

                    if (isset($lottery_vehicle_system_enable) AND $lottery_vehicle_system_enable == 1) {
                      if (isset($header) AND $header == 12) {
                        echo '<a class="dropdown-item active" href="'.$websiteUrl.'modules/lottery-vehicle/">Lottery vehicle <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                      else 
                      {
                        echo '<a class="dropdown-item" href="'.$websiteUrl.'modules/lottery-vehicle/">Lottery vehicle <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                    }

                    if (isset($top_serveurs_enable) AND $top_serveurs_enable == 1) {
                      if (isset($header) AND $header == 13) {
                        echo '<a class="dropdown-item active" href="'.$websiteUrl.'modules/top-serveurs/">Top serveurs <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                      else 
                      {
                        echo '<a class="dropdown-item" href="'.$websiteUrl.'modules/top-serveurs/">Top serveurs <span class="badge badge-primary ml-1">DLC</span></a>';
                      }
                    }
                  ?>
                </div>
              </li>
          <?php
            }
          ?>
        </ul>
        <!-- End - Header Links -->

        <!-- Header Links 2 -->
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item my-2 my-lg-0">
            <ul class="list-inline">
              <?php 
                if (!empty($info_website_page_facebook)){
                  echo '
                    <li class="list-inline-item mr-lg-0">
                      <a class="nav-link" target="_blank" href="'.$info_website_page_facebook.'">
                        <i class="fab fa-facebook"></i>
                      </a>
                    </li>
                  ';
                }

                if (!empty($info_website_page_instagram)){
                  echo '
                    <li class="list-inline-item mr-lg-0">
                      <a class="nav-link" target="_blank" href="'.$info_website_page_instagram.'">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  ';
                }

                if (!empty($info_website_page_twitter)){
                  echo '
                    <li class="list-inline-item mr-lg-0">
                      <a class="nav-link" target="_blank" href="'.$info_website_page_twitter.'">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                  ';
                }

                if (!empty($info_teamspeak_ip) AND !empty($info_teamspeak_port)){
                  echo '
                    <li class="list-inline-item mr-lg-0">
                      <a class="nav-link" href="ts3server://'.$info_teamspeak_ip.':'.$info_teamspeak_port.'">
                        <i class="fab fa-teamspeak"></i>
                      </a>
                    </li>
                  ';
                }

                if (!empty($info_website_discord)){
                  echo '
                    <li class="list-inline-item mr-lg-0">
                      <a class="nav-link" target="_blank" href="'.$info_website_discord.'">
                        <i class="fab fa-discord"></i>
                      </a>
                    </li>
                  ';
                }
              ?>
            </ul>
          </li>
          <?php 
            if (!empty($info_mail_link)) {
              echo '
                <li class="nav-item ml-lg-3 ml-xl-5 my-2 my-lg-0">
                  <a class="btn btn-sm btn-primary text-uppercase" href="'.$info_mail_link.'">
                    <i class="far fa-envelope mr-2"></i>
                    Anfragen
                  </a>
                </li>
              ';
            }
          ?>
        </ul>
        <!-- End - Header Links 2 -->
      </div>
    </div>
  </nav>
  <!-- End - Navbar -->
</header>