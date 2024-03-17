<?php
include("connection.php");
$slno = $_GET['slno'];

$query = "DELETE FROM camp_gal where slno ='$slno'";
$data=mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Camp Image Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
  <?php
}
else {
  echo "<script>alert('Camp Image is not Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
  <?php
}

 ?>
