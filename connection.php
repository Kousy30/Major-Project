<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "nsswebsite";
$conn = mysqli_connect ($servername , $username , $password, "$database");
   if (!$conn) {
     	die('could not connect server:' .mysql_error());
     }
?>
