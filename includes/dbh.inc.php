<?php

$servername = "localhost";
$dBUsername = "tinxibe297_root";
$dBPassword = "root123u";
$dBName = "tinxibe297_loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
