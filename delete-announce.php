
 <?php
 include("connection.php");
 $slno = $_GET['slno'];

 $query = "DELETE FROM announce where slno ='$slno'";
 $data=mysqli_query($conn,$query);

 if($data)
 {
   echo '<script>alert("Record deleted successfully !")</script>';
   echo '<script>window.location.href="president-profile.php";</script>';
 }
 else {
   echo '<script>alert("Failed to delete record !")</script>';
   echo '<script>window.location.href="president-profile.php";</script>';
 }

  ?>
