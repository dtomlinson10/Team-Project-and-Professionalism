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
    <link rel="stylesheet" href="Styles.css">

    <!--linking favourite icon/favicon-->
    <link rel="icon" href="image.ico">
  </head>
  <body>
    <div class="Grid">
      <header class ="header">
          <h1 id="heading">Login Process</h1>
      </header>
      <div class="logout1">
        <a href="logout.php">Logout</a>
      </div>
      <nav class="navbar">
        <table class ="nav_table" id ="nav_menu">
          <tr>
             <td>
               <a href="index.html">Home</a>
             </td>
             <td>
               <a href="Event_Library.php">Event Library</a>
             </td>
             <td>
               <a href="Event_Signup.php">Event Signup</a>
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
          <p>By Daniel Tomlinson(w21006990), Matthew Hunter(w20016663), Hamza Khan(w21011982)</p>
        </footer>
  </body>
</html>
