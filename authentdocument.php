<?php
include('connect.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from login where username = '$username' and password = '$password' and id='6'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1){
  echo "<script>alert('Logged in') </script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/doc_profile.php">
  <?php
}
else{
  echo "<script>alert('Login Failed') </script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/Doc_Login.html">
  <?php
}


?>
