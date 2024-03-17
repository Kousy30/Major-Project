
<?php
include("connection.php");
$slno = $_GET['slno'];

$query = "DELETE FROM comm_data where slno ='$slno'";
$data=mysqli_query($conn,$query);

if($data)
{
  echo "<script>alert('Record Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/comm-profile.php">
  <?php
}
else {
  echo "<script>alert('Record is not Deleted') </script>"
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/comm-profile.php">
  <?php
}

 ?>
