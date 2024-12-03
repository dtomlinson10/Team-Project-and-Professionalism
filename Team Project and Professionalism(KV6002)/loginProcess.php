<?php
ini_set("session.save_path", "0;644;/var/www/html/Public_html/sessionData");
session_start();

// Turn on PHP error reporting for debugging purpose
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Process</title>
    <!--linking stylesheet-->
    <link rel="stylesheet" href="styles.css">

    <!--linking favourite icon/favicon-->
    <link rel="icon" href="image.ico">

  </head>
  <body>
    <div class="grid_con2">
      <header class ="header">
          <h1 id="heading">Login Process</h1>
      </header>
      <div class="logout1">
        <a href="logout.php">Logout</a>
      </div>
      <nav class="nav">
          <table class ="nav_table" id ="nav_menu">
            <tr>
               <td>
                 <a href="home.html">Home</a>
               </td>
               <td>
                 <a href="choose_event.php">Edit Form</a>
               </td>
               <td>
                 <a href="credits.html">Credits</a>
               </td>
            </tr>
          </table>
      </nav>
    <main>
      <?php
          // check validation of the login using a function in functions.php
          require_once("functions.php");
          list($input, $errors) = validate_login();
          if ($errors) {
              echo show_errors($errors);
          } else {
              set_session('logged-in', true);
              echo "<p>Login Success</p>\n";
              echo "<a href='restricted.php'>Restricted page</a>\n";
          }
       ?>
        </main>
        <footer class = "footer">
            <table>
              <tr>
                <td>By Daniel Tomlinson</td>
                <td>Student Number: W21006990</td>
              </tr>
            </table>
        </footer>

  </body>
</html>
