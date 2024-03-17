<?php
include("connection.php");
$slno = $_GET['slno'];

$query = "DELETE FROM visimg where slno ='$slno'";
$data=mysqli_query($conn,$query);

if($data)
{
  echo '<script>alert("Image deleted successfully !")</script>';
  echo '<script>window.location.href="president-profile.php";</script>';
}
else {

    echo '<script>alert("Failed to delete image !")</script>';
    echo '<script>window.location.href="president-profile.php";</script>';
}

 ?>
