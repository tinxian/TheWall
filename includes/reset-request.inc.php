<?php
if (isset($_POST["reset-request-submit"])) {
  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $url = "www.imagechimp.tinxian.nl/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

  $expires = date("U") + 1800;

  require 'dbh.inc.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error! " . mysqli_error($conn);
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  }
  else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }
   mysqli_stmt_close($stmt);

   mysqli_close();

   $to = $userEmail;

   $subject = 'Reset your password for ImageChimp';

   $message = '<p>We received a password reset request. The link to reset your password is below if you did not make this request, you can ingore this email.</p>';
   $message .= '<p>Here is your password reset link: </br>';
   $message .= '<a href="' . $url . '">' . $url . '</a></p>';


// Laad de instellingen
// Laad het externe SMTP mailer script
require_once __DIR__ . '/SMTPMailer.php';

$mail = new SMTPMailer('mail.tinxian.nl', 587);
$mail->Auth('imagechimp@tinxian.nl', '');

$mail->addTo($to);
$mail->From('imagechimp@tinxian.nl');
$mail->Subject($subject);
$mail->Body($message);


if( $mail->Send()) {
   header("Location: ../reset-password.php?reset=success");
} else {
  header("Location: ../index.php");
}
}
