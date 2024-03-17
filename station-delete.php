<?php
include("connection.php");
$slno = $_GET['slno'];

$query = "DELETE FROM station_table where slno ='$slno'";
$data=mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Stationary Stock is Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
  <?php
}
else {
  echo "<script>alert('Stationary Stock is not Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
  <?php
}
 ?>
