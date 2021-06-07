<?php
    extract($_POST);
    include "../database/database.php";
    $sql = pg_query($connect, "SELECT * FROM register where username = '".$username."'");
    if(pg_num_rows($sql)>0) {
        echo "Username already exists";
        exit;
    }
    elseif(isset($_POST['submit'])) {
      $query = "INSERT INTO register(username, password) VALUES('$username', '$password')";
      $sql = pg_query($connect, $query)or die("Could not register.");
      header("Location: login.php?status=success");
      exit;
    }

?>