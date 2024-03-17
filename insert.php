<!DOCTYPE html>
<html>
<head>
	<title>Application Insert Form</title>
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

    if(isset($_POST['login']))
    {
        $name =  $_POST['name'];
				$regno= $_POST['regno'];
				$pass= $_POST['pass'];
				$course= $_POST['course'];
				$gender= $_POST['gender'];
				$father= $_POST['father'];
				$mother= $_POST['mother'];
				$dob= $_POST['dob'];
				$height= $_POST['height'];
				$weight= $_POST['weight'];
				$slno = $_POST['slno'];
				$blood= $_POST['blood'];
				$address= $_POST['address'];
				$telephone= $_POST['telephone'];
				$email= $_POST['email'];
				$phone= $_POST['phone'];
				$health= $_POST['health'];
				$talent= $_POST['talent'];
				$experience= $_POST['experience'];
				$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $query = "INSERT INTO application VALUES ('$slno','$name','$regno','$pass','$course','$gender','$father','$mother','$dob','$height','$weight','$blood','$address','$telephone','$email','$phone','$health','$talent','$experience','$file')";
          $query_run = mysqli_query($conn,$query);
	 // header('Location: new.php');
	 if ($_FILES["image"]["size"] > 500000) {
 echo " Sorry,your file is too large to upload.";
 $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
 echo "Sorry, only .JPG, .JPEG and .PNG  files are allowed.
	kindly upload the image in correct format.";
 $uploadOk = 0;
}

	 if($query_run){
		 echo "<script>alert('Application Form Submitted Successfully') </script>";
		 ?>
		 <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/majorproject/application.php">
		 <?php
	 }else{
		 echo "<script>alert('Application Form Not Submitted') </script>";
		 ?>
		 <META HTTP-EQUIV="Refresh" CONTENT="2; URL=http://localhost/majorproject/application.php">
		 <?php
		 }
	 mysqli_close($conn);
 }
?>

</body>
</html>
