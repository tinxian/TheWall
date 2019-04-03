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

 <?php require "header.php" ?>
<body>
  <main>
    <?php
    if (isset($_SESSION['userId'])) {
    echo  "<p>You are logged in!</p>";
    }
    else {
    echo  "<p>You are logged out!</p>";
    }
    ?>
  </main>
</body>

</html>
