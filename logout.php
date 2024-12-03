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
    <title>Logout Process</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--linking stylesheet-->
    <link rel="stylesheet" href="styles.css">

    <!--linking favourite icon/favicon-->
    <link rel="icon" href="image.ico">
  </head>
  <body>
    <div class="grid_con2">
      <header class ="header">
          <h1 id="heading">Restricted Page</h1>
      </header>
      <div class="logout1">
        <a href="logout.php">Logout</a>
      </div>
      <nav class="nav">
          <table class ="nav_table" id ="nav_menu">
            <tr>
               <td>
                 <a href="choose_event.php">Admin</a>
               </td>
               <td>
                 <a href="home.html">Home</a>
               </td>
               <td>
                 <a href="bookEventsForm.php">Book Events</a>
               </td>
               <td>
                 <a href="credits.html">Credits</a>
               </td>
            </tr>
          </table>
      </nav>
      <main>
          <?php
          // empty session variable
                $_SESSION= array();
                // destroy session of the website
                session_destroy();
                // output a message indicating successful logout
                // and provide a link to the login form
                echo"Logged out successfuly\n";
                echo"<a href='index.html'>Login Form</a>";
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
    </div>
  </body>
</html>
