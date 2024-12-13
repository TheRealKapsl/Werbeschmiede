<?php
  function rewriting($chaine){
		$remplace_par_a = str_replace(array("À","Á","Â","à","Ä","Å","à","á","â","à","ä","å"), "a", $chaine);
   	$remplace_par_e = str_replace(array("È","É","Ê","Ë","è","é","ê","ë"), "e", $remplace_par_a);
   	$remplace_par_i = str_replace(array("Ì","Í","Î","Ï","ì","í","î","ï"), "i", $remplace_par_e);
   	$remplace_par_o = str_replace(array("Ò","Ó","Ô","Õ","Ö","Ø","ò","ó","ô","õ","ö","ø"), "o", $remplace_par_i);
   	$remplace_par_u = str_replace(array("Ù","Ú","Û","Ü","ù","ú","û","ü"), "u", $remplace_par_o);
   	$remplace_par_c = str_replace(array("Ç","ç"), "c", $remplace_par_u);
   	$remplace_par_n = str_replace(array("Ñ","ñ"), "n", $remplace_par_c);
   	$remplace_par_y = str_replace(array("ÿ"), "y", $remplace_par_n);
    $remplace_par_punctuation = str_replace(array("?","!",".","..."), "", $remplace_par_y);

   	$enleve_guillement = str_replace(array("'","’",'"'), "", $remplace_par_punctuation);

   	$string = str_replace(" ", "-", $enleve_guillement);

    return strtolower($string);
  }

  function get_http_response_code($url) {
    $headers = get_headers($url);
    return substr($headers[0], 9, 3);
  }