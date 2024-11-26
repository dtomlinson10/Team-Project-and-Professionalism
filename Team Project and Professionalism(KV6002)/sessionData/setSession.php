<?php
ini_set("session.save_path", "0;644;/var/www/html/Public_html/sessionData");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Session</title>
  </head>
  <body>

    <?php
    // set the session variable firstname
    $_SESSION['firstname'] = 'Daniel';     ?>
  </body>
</html>
