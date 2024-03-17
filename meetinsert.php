<!DOCTYPE html>
<html>
<head>
	<title>Minutes Of Meeting Updates</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "nsswebsite";
	$conn = mysqli_connect ($servername , $username , $password, "$database");
	   if (!$conn) {
	     	die('could not connect server:' .mysql_error());
	     }

    if(isset($_POST['table']))
    {
        $slno =  $_POST['slno'];
				$date= $_POST['date'];
				$meet= $_POST['meet'];


        $sql = "INSERT INTO meet_table VALUES ('$slno','$date','$meet')";

        if(mysqli_query($conn,$sql)){
					echo '<script type="text/javascript">alert("Meeting Record Updated Successfully")</script>';
					?>
					<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/doc_profile.php">
					<?php
        }else{
            echo "Error: " .$sql . ":-" .mysqli_error($conn);
						echo "<script>alert('Error:Go Back') </script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/doc_profile.php">
						<?php
        }
        mysqli_close($conn);
    }
?>

</body>
</html>
