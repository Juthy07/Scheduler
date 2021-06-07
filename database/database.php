<<<<<<< HEAD
<?php
  $connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
  if(!$connect) {
   echo "Not Connected";
   $error = pg_last_error();
   echo "$error";
  }
=======
<?php
  $connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
  if(!$connect) {
   echo "Not Connected";
   $error = pg_last_error();
   echo "$error";
  }
>>>>>>> 00eca064fa5044521ea2b9b646a6ebeb040ce394
?>