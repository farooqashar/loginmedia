<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login Pipeline</title>
  </head>
  <body>

    <nav>

        <ul>
            <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>

            <?php 
              if (isset($_SESSION["userUserName"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/logout.include.php'>Log Out</a></li>";
              } else {
                echo "<li><a href='signup.php'>Sign Up</a></li>";
                echo "<li> <a href='login_h.php'>Log In</a></li>";
              }
            ?>
        </ul>
    </nav>
  </body>
</html>


