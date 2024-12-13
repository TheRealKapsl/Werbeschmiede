<?php

  ///////////////////////////////////////////
	// !!! Errors display - Do not touch !!! //
	///////////////////////////////////////////

	ini_set('display_errors', 1);
  error_reporting(E_ALL);



	/////////////////////////
	// Website Information //
	/////////////////////////

  // Version : 2.20 \\

  // Language \\
  $info_website_language = "de"; // fr, en, es, de
  $info_website_language_og = "de_DE"; // fr_FR, en_GB, en_US, es_ES, de_DE

  // Keywords \\
  $info_website_keywords = "Werbeagentur, Agentur, Werbung, Werbeagentur Österreich, Beste Werbeagentur Österreich, Werbeagentur Niederösterreich, Beste Werbeagentur Niederösterreich, Gastro, Werbung für Gastro";   

  $info_website_name = "Werbeschmiede"; // Your server name
  $info_website_color = "custom"; // Colors available : orange, blue, green, red, pink, purple, custom

  // Short description of the website \\
  $info_website_description = "Wir sind eine junge Werbeagentur, die mit ravinierten Innovationen dabei ist, in einer etwas eingeschlafenen Branche Fuß zu fassen.";

  // Others \\
  $info_website_home_video = "bnkR3JoFW7E"; // Put the VIDEO_ID of youtube to have a video in the background of the home page

  // Link to your social networks and others \\
  $info_website_page_facebook = "https://www.facebook.com/profile.php?id=61565625419527";
  $info_website_page_instagram = "https://www.instagram.com/werbeschmiede_eu/";

  // Contacts \\
  $info_mail_link = "mailto:office@werbeschmiede.eu?subject=Anfrage";
  $info_phone_link = "tel:+4367761514696";

  // Connection to server \\
  $info_arma_server_ip = ""; // Exemple : 12.34.56.78
  $info_arma_server_port = "2302"; // Default port : 2302

  // Connection to teamspeak \\
  $info_teamspeak_ip = ""; // Example : ts.the-programmer.com
  $info_teamspeak_port = "9987"; // Default port : 9987

  // Top Serveurs \\
  $top_serveurs_page_link = ""; // Example : https://top-serveurs.net/arma3/vote/your-server
  $top_serveurs_api_token = ""; // Example : X6CG22J4NA



  ///////////////////////////////////
	// Server - Database information //
  ///////////////////////////////////
  
  $db_host = "localhost";
	$db_dbname = "altislife";
	$db_username = "root";
  $db_password = "";

  $db_port = "3306";
  $db_charset = "utf8";



  ////////////////////////////
  // Configuration - Market //
  ////////////////////////////

  // Configure the name of the market items \\
  $market = array(
    'tbacon' => array(
      'name' => 'Tactical Bacon', 
      'image' => 'assets/img/icons_market/ico_tbacon.png'
    ),
    'apple' => array(
      'name' => 'Apple', 
      'image' => 'assets/img/icons_market/ico_apple.png'
    ),
    'peach' => array(
      'name' => 'Peach', 
      'image' => 'assets/img/icons_market/ico_peach.png'
    ),
    'copper_refined' => array(
      'name' => 'Copper', 
      'image' => 'assets/img/icons_market/ico_copper_refined.png'
    ),
    'iron_refined' => array(
      'name' => 'Iron', 
      'image' => 'assets/img/icons_market/ico_iron_refined.png'
    ),
    'diamond_cut' => array(
      'name' => 'Diamond', 
      'image' => 'assets/img/icons_market/ico_diamond_cut.png'
    ),
    'salt_refined' => array(
      'name' => 'Salt', 
      'image' => 'assets/img/icons_market/ico_salt_refined.png'
    ),
    'glass' => array(
      'name' => 'Glass', 
      'image' => 'assets/img/icons_market/ico_glass.png'
    ),
    'cement' => array(
      'name' => 'Cement', 
      'image' => 'assets/img/icons_market/ico_cement.png'
    ),
    'oil_processed' => array(
      'name' => 'Oil', 
      'image' => 'assets/img/icons_market/ico_oil_processed.png'
    ),
    'goldbar' => array(
      'name' => 'Gold bar', 
      'image' => 'assets/img/icons_market/ico_goldbar.png'
    ),
    'turtle_raw' => array(
      'name' => 'Turtle', 
      'image' => 'assets/img/icons_market/ico_turtle_raw.png'
    ),
    'marijuana' => array(
      'name' => 'Marijuana', 
      'image' => 'assets/img/icons_market/ico_marijuana.png'
    ),
    'cocaine_processed' => array(
      'name' => 'Cocaine', 
      'image' => 'assets/img/icons_market/ico_cocaine_processed.png'
    ),
    'heroin_processed' => array(
      'name' => 'Heroin', 
      'image' => 'assets/img/icons_market/ico_heroin_processed.png'
    )
  );



  ///////////////////////////////////////////////
  // Configuration - The most fortunate people //
  ///////////////////////////////////////////////

  $number_players_table = 10; // Number of players displayed in the table



  //////////////////////////////////////////////
  // Configuration - The most fortunate gangs //
  //////////////////////////////////////////////
 
  $number_gangs_table = 10; // Number of gangs displayed in the table



  ////////////////////////////
  // Configuration - Police //
  ////////////////////////////

  // Name of police ranks in relation to the coplevel \\
  $coplevel = array(
    1 => 'Cadet', 
    2 => 'Police officer', 
    3 => 'Detective',
    4 => 'Sergeant',
    5 => 'Lieutenant',
    6 => 'Captain',
    7 => 'Deputy Inspector',
    8 => 'Inspector',
    9 => 'Deputy Chief',
    10 => 'Chief',
    11 => 'Assistant Commissioner',
    12 => 'Deputy Commissioner',
    13 => 'Commissioner'
  );



  ///////////////////////////
  // Configuration - Medic //
  ///////////////////////////

  // Name of medic ranks in relation to the mediclevel \\
  $mediclevel = array(
    1 => 'Firefighter', 
    2 => 'Corporal', 
    3 => 'Deputy officer',
    4 => 'Officer',
    5 => 'Colonel'
  );



  ////////////////////////////////////////////////
  // !!! Current website url - Do not touch !!! //
  ////////////////////////////////////////////////

  if (isset($_SERVER['HTTPS']) && strtolower($_SERVER["HTTPS"]) == "on") { $protocol = "https"; } else { $protocol = "http"; }
  $host_web_site = $_SERVER['HTTP_HOST'];

  $websiteUrl = $protocol.'://'.$host_web_site.'/';