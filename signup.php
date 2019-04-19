<?php
  require "header.php";
?>

<link rel="stylesheet" href="css/signup.css">
<main>
  <br><br><br>
  <div class="wrapper-main">
    <section class="section-default">
      <br><br><br><br><br><br><br>
      <h1>Signup</h1>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">FIll in all fields!</p>';
        }
        else if ($_GET['error'] == "invaliduidmail") {
          echo '<p class="signuperror">Invalid username and e-mail!</p>';
        }
        else if ($_GET['error'] == "invaliduid") {
          echo '<p class="signuperror">Invalid username!</p>';
        }
        else if ($_GET['error'] == "invalidmail") {
          echo '<p class="signuperror">Invalid email!</p>';
        }
        else if ($_GET['error'] == "passwordcheck") {
          echo '<p class="signuperror">Your passwords do not match!</p>';
        }
        else if ($_GET['error'] == "usertaken") {
          echo '<p class="signuperror">Username is already taken!</p>';
        }
        else if ($_GET['signup'] == "success") {
        echo '<p class="signupsuccess">Signup successful!</p>';
      }
}
      ?>

      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button id="signup_b" type="submit" name="signup-submit">Signup</button>
      </form>

      <!-- Password recovery system -->
      <?php
      if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdated") {
          echo '<p class="signupsuccess">Your password has been reset!</p>';
        }
      }
      ?>
      <a class="reset_ww"href="reset-password.php">Forgot your password?</a>
    </section>
  </div>
</main>
