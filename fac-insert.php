<!DOCTYPE html>
<html>
<head>
	<title>Faculty Updates</title>
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
        $name =  $_POST['name'];
				$post=   $_POST['post'];
				$department=   $_POST['department'];
				$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				$query= "INSERT INTO fac_data VALUES ('$slno','$name','$post','$department','$file')";
 			 $query_run = mysqli_query($conn,$query);

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
 					 echo '<script type="text/javascript">alert("Record Updated Successfully")</script>';
					 ?>
 					<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/comm-profile.php">
 					<?php
 			 }else{
 				 echo'<script type="text/javascript">alert("Record not Updated")</script>' .mysqli_error($conn);
				 ?>
				<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/majorproject/comm-profile.php">
				<?php
 				 }
 			 mysqli_close($conn);
 	 }

?>

</body>
</html>
