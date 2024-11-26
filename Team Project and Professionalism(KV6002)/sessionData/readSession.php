<?php
ini_set("session.save_path", "0;644;/var/www/html/Public_html/sessionData");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>read session</title>
  </head>
  <body>
    <?php
      // check whether the session variable is set
      //output the data if it is
      //if not then output "no session variable set"
        if (isset($_SESSION['firstname']))
        {
        echo $_SESSION['firstname'];
        }
        else
        {
            echo "<p>No session variable set</p>\n";
        }
    ?>
  </body>
</html>
