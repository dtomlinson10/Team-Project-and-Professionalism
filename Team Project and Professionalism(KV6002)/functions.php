!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions</title>
  </head>
  <body>
    <?php
    // function to validate login of the user
      function validate_login()
      {
        // create two empty arrays
        $input = array();
        $errors =array();

        // retrieve data from login form
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        // trim any whitespace from the username and password
        trim($username);
        trim($password);

        // add username and password to array input
        array_push($input,$username,$password);

        // check if the username or password is empty
        if(empty($input))
        {
          echo "<p>You need to provide a username and password.
                Please try <a href='index.html'>again</a>.</p>\n";
        }
        else
        {
            try
            {
              //databse connection
              require_once("database_conn.php");
              $dbconn = getConnection();

              //sql query to retrieve deatils from database
              $sqlQuery = "SELECT passwordHash, firstname FROM users WHERE username =:username";
              $Sqlexecute = $dbconn->prepare($sqlQuery);
              $Sqlexecute->execute(array(':username' => $input[0]));
              $user = $Sqlexecute->fetchObject();



              if($user)
              {
                  // call function to check the details of the user
                  if (password_verify($password, $user->passwordHash))
                  {
                      $_SESSION['firstname'] = $user->firstname;
                      return(array($input, $errors));
                  }
                  else
                  {
                    array_push($errors, "username or password incorrect");
                    return(array($input,$errors));
                  }
              }
              else
              {
                  echo"<p> No record Found! Please try <a href='index.html'>again</a>.</p>\n";
              }

            }
            catch(Exception $e)
            {
              echo "error: " . $e->getMessage();
            }
        }

      }
      // function to show errors to the user
      function show_errors($errors)
      {
          $x = "";
          foreach ($error as $err) {
              $x += $err . " ";
          }
          return($x);
      }
      // function to set session variable of the user
      function set_session($key, $value)
      {
        try
        {
          if(empty($key)||empty($value))
          {
            echo "<p>error no values passed!</p>\n";
          }
          else
          {
            $_SESSION[$key] = $value;
            return true;
          }
        }
        catch(Exception $e)
        {
          echo"<p>error: ". $e->getMessage()."</p>\n";
        }
      }

      // function to retrieve the session variable set
      function get_session($key)
      {
          if(isset($_SESSION[$key]))
          {
            return true;
          }
          else
          {
            return false;
          }
      }

      // function to check the login details of the user
      function check_login()
      {
        $login = get_session('logged-in');
        if($login === true)
        {
          return true;
        }
        else
        {
          return false;
        }
      }
      ?>
  </body>
</html>
