<?php
   extract($_POST);
    include "../database/database.php";
    if(isset($_POST['submit'])) {
      $query = "SELECT * FROM register WHERE username='$username' AND password='$password';";
      $sql = pg_query($connect, $query);
      $fetch = pg_fetch_row($sql);
        if(is_array($fetch)) {
            $_SESSION["username"] = $fetch[0];
            $_SESSION["password"] = $fetch[1];
            header("Location: dashboard.php");
        }
        else {
            echo "Invalid User";
        }   
    }

?>
