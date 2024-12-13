<?php

  ////////////////////////
	// Require once files //
	////////////////////////

  require_once('config.php');
  require_once('functions.php');



  ////////////////////////////////
	// Connection to the database //
	////////////////////////////////

	try {
		$F4E748fuN4d3ui9DWdGr = new PDO('mysql:host='.$db_host.';port='.$db_port.';dbname='.$db_dbname.';charset='.$db_charset.'', ''.$db_username.'', ''.$db_password.'');
		$F4E748fuN4d3ui9DWdGr->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$F4E748fuN4d3ui9DWdGr->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$F4E748fuN4d3ui9DWdGr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $database_connection = 1;

		// Checking - Tables \\
		$req_checking_tables = $F4E748fuN4d3ui9DWdGr->prepare('SHOW TABLES');
    $req_checking_tables->execute();
    $check_table = $req_checking_tables->fetchAll(PDO::FETCH_ASSOC);
     
    foreach($check_table as $table){
      if ($table['Tables_in_'.$db_dbname] == "players") {
        $table_players = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "gangs") {
        $table_gangs = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "bourse") {
        $table_bourse = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "advanced_identity") {
        $table_advanced_identity = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "vehicles") {
        $table_vehicles = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "interpol") {
        $table_interpol = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "interpol_crimes") {
        $table_interpol_crimes = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "lottery_bets") {
        $table_lottery_bets = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "lottery_informations") {
        $table_lottery_informations = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "lottery_winning_player") {
        $table_lottery_winning_player = 1;
      }

      if ($table['Tables_in_'.$db_dbname] == "top_serveurs") {
        $table_top_serveurs = 1;
      }
    }

    // Checking table players \\
    if (isset($table_players) AND $table_players == 1) {
      $error_table_players = 1;

      // Checking table players columns phone_number \\
      $req_checking_players_columns_phone_number = $F4E748fuN4d3ui9DWdGr->prepare('SHOW COLUMNS FROM players LIKE "phone_number"');
      $req_checking_players_columns_phone_number->execute();
      $check_players_column_phone_number = $req_checking_players_columns_phone_number->fetch();

      if (!empty($check_players_column_phone_number)) {
        $error_table_players_phone_number = 1;
      }
      else
      {
        $error_table_players_phone_number = 0;
      }

      // Checking table players columns lottery_see_win \\
      $req_checking_players_columns_lottery_see_win = $F4E748fuN4d3ui9DWdGr->prepare('SHOW COLUMNS FROM players LIKE "lottery_see_win"');
      $req_checking_players_columns_lottery_see_win->execute();
      $check_players_column_lottery_see_win = $req_checking_players_columns_lottery_see_win->fetch();

      if (!empty($check_players_column_lottery_see_win)) {
        $error_table_players_lottery_see_win = 1;
      }
      else
      {
        $error_table_players_lottery_see_win = 0;
      }
    }
    else
    {
    	$error_table_players = 0;
    }

    // Checking table gangs \\
    if (isset($table_gangs) AND $table_gangs == 1) {
      $error_table_gangs = 1;
    }
    else
    {
    	$error_table_gangs = 0;
    }

    // Checking table bourse \\
    if (isset($table_bourse) AND $table_bourse == 1) {
      $error_table_bourse = 1;
    }
    else
    {
    	$error_table_bourse = 0;
    }

    // Checking table advanced identity \\
    if (isset($table_advanced_identity) AND $table_advanced_identity == 1) {
      $error_table_advanced_identity = 1;
    }
    else
    {
    	$error_table_advanced_identity = 0;
    }

    // Checking table vehicles \\
    if (isset($table_vehicles) AND $table_vehicles == 1) {
      $error_table_vehicles = 1;

      // Checking table vehicles columns immatriculation \\
      $req_checking_vehicles_columns_immatriculation = $F4E748fuN4d3ui9DWdGr->prepare('SHOW COLUMNS FROM vehicles LIKE "immatriculation"');
      $req_checking_vehicles_columns_immatriculation->execute();
      $check_vehicles_column_immatriculation = $req_checking_vehicles_columns_immatriculation->fetch();

      if (!empty($check_vehicles_column_immatriculation)) {
        $error_table_vehicles_immatriculation = 1;
      }
      else
      {
        $error_table_vehicles_immatriculation = 0;
      }

      // Checking table vehicles columns insure \\
      $req_checking_vehicles_columns_insure = $F4E748fuN4d3ui9DWdGr->prepare('SHOW COLUMNS FROM vehicles LIKE "insure"');
      $req_checking_vehicles_columns_insure->execute();
      $check_vehicles_column_insure = $req_checking_vehicles_columns_insure->fetch();

      if (!empty($check_vehicles_column_insure)) {
        $error_table_vehicles_insure = 1;
      }
      else
      {
        $error_table_vehicles_insure = 0;
      }

      // Checking table vehicles columns fourriere \\
      $req_checking_vehicles_columns_fourriere = $F4E748fuN4d3ui9DWdGr->prepare('SHOW COLUMNS FROM vehicles LIKE "fourriere"');
      $req_checking_vehicles_columns_fourriere->execute();
      $check_vehicles_column_fourriere = $req_checking_vehicles_columns_fourriere->fetch();

      if (!empty($check_vehicles_column_fourriere)) {
        $error_table_vehicles_fourriere = 1;
      }
      else
      {
        $error_table_vehicles_fourriere = 0;
      }
    }
    else
    {
    	$error_table_vehicles = 0;
    }

    // Checking table interpol \\
    if (isset($table_interpol) AND $table_interpol == 1) {
      $error_table_interpol = 1;
    }
    else
    {
    	$error_table_interpol = 0;
    }

    // Checking table interpol crimes \\
    if (isset($table_interpol_crimes) AND $table_interpol_crimes == 1) {
      $error_table_interpol_crimes = 1;
    }
    else
    {
    	$error_table_interpol_crimes = 0;
    }

    // Checking table lottery bets \\
    if (isset($table_lottery_bets) AND $table_lottery_bets == 1) {
      $error_table_lottery_bets = 1;
    }
    else
    {
    	$error_table_lottery_bets = 0;
    }

    // Checking table lottery informations \\
    if (isset($table_lottery_informations) AND $table_lottery_informations == 1) {
      $error_table_lottery_informations = 1;
    }
    else
    {
    	$error_table_lottery_informations = 0;
    }

    // Checking table lottery winning player \\
    if (isset($table_lottery_winning_player) AND $table_lottery_winning_player == 1) {
      $error_table_lottery_winning_player = 1;
    }
    else
    {
    	$error_table_lottery_winning_player = 0;
    }

    // Checking table top serveurs \\
    if (isset($table_top_serveurs) AND $table_top_serveurs == 1) {
      $error_table_top_serveurs = 1;
    }
    else
    {
    	$error_table_top_serveurs = 0;
    }

    
    //////////////////////////
    // Checking - DLC files //
    //////////////////////////

    // Arma Website - DLC Police \\
    if($dlc_police_system == 1){
      $police_system_enable = 1;
    }
    else 
    {
      $police_system_enable = 0;
    }

    // Arma Website - DLC Lottery \\
    if($dlc_lottery_system == 1){
      if ($error_table_players == 1 AND $error_table_players_lottery_see_win == 1 AND $error_table_lottery_bets == 1 AND $error_table_lottery_informations == 1 AND $error_table_lottery_winning_player) {
        $lottery_system_enable = 1;
      }
      else 
      {
        $lottery_system_enable = 0;
      }
    }
    else 
    {
      $lottery_system_enable = 0;
    }

    // Arma Website - DLC Lottery vehicle \\
    if($dlc_lottery_vehicle_system == 1){
      if ($error_table_players == 1 AND $error_table_players_lottery_see_win == 1 AND $error_table_lottery_bets == 1 AND $error_table_lottery_informations == 1 AND $error_table_lottery_winning_player) {
        $lottery_vehicle_system_enable = 1;
      }
      else 
      {
        $lottery_vehicle_system_enable = 0;
      }
    }
    else 
    {
      $lottery_vehicle_system_enable = 0;
    }

    // Arma Website - DLC Top Serveurs \\
    if($dlc_top_serveurs == 1){
      if ($error_table_players == 1 AND $error_table_top_serveurs == 1) {
        if ($top_serveurs_page_link != NULL AND $top_serveurs_api_token != NULL) {
          $top_serveurs_enable = 1;
        }
        else 
        {
          $top_serveurs_enable = 0;
        }
      }
      else 
      {
        $top_serveurs_enable = 0;
      }
    }
    else 
    {
      $top_serveurs_enable = 0;
    }
	}
	catch (PDOException $error) 
	{
		$database_connection = 0;
  }