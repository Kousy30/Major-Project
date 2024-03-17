<!DOCTYPE html>
<html>
<head>
	<title> inserting details</title>
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

    if(isset($_POST['query']))
    {
			  $date=$_POST['date'];
        $name =  $_POST['name'];
				$regnum= $_POST['regnum'];
				$email= $_POST['email'];
				$title= $_POST['title'];
				$descrip= $_POST['descrip'];


        $sql = "INSERT INTO queries VALUES ('$date','$name','$regnum','$email','$title','$descrip')";
   // header('Location: new.php');
        if(mysqli_query($conn,$sql)){
					echo "<script>alert('Message Sent') </script>";
					?>
					<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/student-profile.php">
					<?php
        }else{
            echo "Error: " .$sql . ":-" .mysqli_error($conn);
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/student-profile.php">
						<?php
        }
        mysqli_close($conn);
    }
?>

</body>
</html>
