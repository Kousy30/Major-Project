<!DOCTYPE html>
<html>
<head>
	<title>Achievement Updates</title>
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
				$name= $_POST['name'];
				$description= $_POST['description'];
				$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $query= "INSERT INTO achieve_data VALUES ('$slno','$name','$description','$file')";
        $query_run = mysqli_query($conn,$query);

				if ($_FILES["image"]["size"] > 500000) {
	    echo " Sorry,your file is too large to upload.";
	    $uploadOk = 0;
	  }
	  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
	    echo "OOPS!!! only jpg,png and jpeg files are allowed ";
	    $uploadOk = 0;
	  }

        if($query_run){
            echo '<script type="text/javascript">alert("Record Submitted Successfully")</script>';
						?>
					  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
					  <?php
        }else{
					echo'<script type="text/javascript">alert("Record is not submitted")</script>' .mysqli_error($conn);
					?>
				  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc-profile.php">
				  <?php
          }
        mysqli_close($conn);
    }

?>

</body>
</html>
