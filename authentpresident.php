<?php
include('connect.php');
session_start();
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from login where username = '$username' and password = '$password' and id='1'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1){
  echo "<script>alert('Logged in') </script>";
  $_SESSION['usname'] = $username;
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/president-profile.php">
  <?php
}
else{
  echo "<script>alert('Login Failed') </script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/President_Login.html">
  <?php


}


?>
