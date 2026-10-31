<?php
      error_reporting(0);
      date_default_timezone_set('Asia/Jakarta');
      $server       = "localhost";
      $user         = "root";
      $password     = "";
      $db_name      = "db_rentalku";
      $connect      = mysqli_connect($server, $user, $password, $db_name);

      if(!$connect) {
        die('FAILED TO CONNECT TO DATABASE');
      }
?>