<?php
  $connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
  if(!$connect) {
   echo "Not Connected";
   $error = pg_last_error();
   echo "$error";
  }
?>