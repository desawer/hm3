<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

    $date = array();
        $date[]= mt_rand(0, time());
        $date[]= mt_rand(0, time());
        $date[]= mt_rand(0, time());
        $date[]= mt_rand(0, time());
        $date[]= mt_rand(0, time());

      echo min (
              date('d',$date[0]),
              date('d',$date[1]),
              date('d',$date[2]),
              date('d',$date[3]),
              date('d',$date[4])
              );
      echo '<br>';
      echo max (
              date('m',$date[0]),
              date('m',$date[1]),
              date('m',$date[2]),
              date('m',$date[3]),
              date('m',$date[4])
              );
      echo '<br>';
      sort($date);
      
     $selected = array_pop($date);
     echo date ('d.m.y. H:i:s',$selected);
     echo '<br>';
     echo date_default_timezone_set('America/New_York');
     echo date_default_timezone_get();
?>