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
    <h2>Gallery</h2>

    <div class="gallery-container">
      <?php
      include_once 'includes/dbh.inc.php';

      $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
        exit();
      } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<a href="#">
          <div style="background-image: url(images/gallery/'.$row["imgFullNameGallery"].');"></div>
          <h3>'.$row["titleGallery"].'</h3>
          <p>'.$row["descGallery"].'</p>
          </a>';
        }
      }
      ?>
    </div>

<?php
if (isset($_SESSION['userId'])) {
echo '<div class="gallery-upload">
      <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="File name...">
        <input type="text" name="filetitle" placeholder="Image title...">
        <input type="text" name="filedesc" placeholder="Image description...">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>';
}
?>
      </form>
    </div>

  </main>
</body>

</html>
