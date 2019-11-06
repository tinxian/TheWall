<?php
ini_set("display_errors", 1);

$servername = "localhost";
$dBUsername = "";
$dBPassword = "";
$dBName = "";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
