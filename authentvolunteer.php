<?php
include('connect.php');
session_start();
$regno = $_POST['user'];
$pass = $_POST['pass'];


$regno = stripcslashes($regno);
$pass = stripcslashes($pass);

$regno = mysqli_real_escape_string($con, $regno);
$pass = mysqli_real_escape_string($con, $pass);

$sql = "select * from application where regno = '$regno' and pass = '$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count>=1){
  echo "<script>alert('Logged in') </script>";
  $_SESSION['uname'] = $regno;
  $_SESSION['upass'] = $pass;

  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/student-profile.php">
  <?php
}
else{
    echo "<script>alert('Login Failed') </script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/Volunteer_login.html">
    <?php



}


?>
