<!DOCTYPE html>
<html>
<head>
	<title>News Updates</title>
</head>
<body>
	<?php

	include('connection.php');
    if(isset($_POST['query']))
    {
        $slno = $_POST['slno'];
        $message =  $_POST['message'];

        $sql = "INSERT INTO announce VALUES ('$slno','$message')";
        if(mysqli_query($conn,$sql)){
            echo"<script>alert('Updated Successfully') </script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/president-profile.php">
						<?php
        }else{
            echo "Error: " .$sql . ":-" .mysqli_error($conn);
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/president-profile.php">
						<?php
        }
        mysqli_close($conn);
    }
?>

</body>
</html>
