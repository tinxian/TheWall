<?php
ini_set("display_errors", 1);

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "tinxibe297_loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
