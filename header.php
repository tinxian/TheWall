<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Mediacollege The Wall">
  <meta name="keywords" content="The Wall, Mediacollege">
  <meta name="author" content="Tin Xian Hu, Jelle Stekelenburg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <title>Imagechimp - The magic of the internet!</title>
</head>

<body>
  <header>
    <nav>
        <ul>
         <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
         <li><a href="about.html">About us</a></li>
         <li><a href="uploadfiles.php">Upload</a></li>
         <li><a href="index.php">Home</a></li>
        </ul>
        <div>
            <?php
            if (isset($_SESSION['userId'])) {
            echo  '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                  </form>';
            }
            else {
            echo  '<form action="includes/login.inc.php" method="post">
                   <input type="text" name="mailuid" placeholder="Username/E-mail...">
                   <input type="password" name="pwd" placeholder="Password...">
                   <button type="submit" name="login-submit">Login</button>
                   </form>
                   <a href="signup.php">Signup</a>';
            }
            ?>
        </div>
    </nav>
  </header>
</body>

</html>
