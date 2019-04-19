<?php
ini_set("display_errors", 1);

$servername = "localhost";
$dBUsername = "tinxibe297_root";
$dBPassword = "VCb2USXDG";
$dBName = "tinxibe297_loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
