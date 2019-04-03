<?php

$servername = "localhost";
$dBUsername = "tinxibe297";
$dBPassword = "d4tbetbu";
$dBName = "tinxibe297_loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
