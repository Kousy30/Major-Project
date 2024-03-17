<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nsswebsite";
$conn = mysqli_connect ($servername , $username , $password, "$database");
   if (!$conn) {
      die('could not connect server:' .mysql_error());
     }
session_start();
$sln =  $_POST['currentPassword'];
$_SESSION["passd"] = "6";

   if (!$conn) {
      die('could not connect server:' .mysql_error());
     }
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from login WHERE password='" . $_SESSION["passd"] . "'");
    $row = mysqli_fetch_array($result);


        mysqli_query($conn, "UPDATE login set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["passd"] . "'");
        echo '<script type="text/javascript">alert("Password successfully changed")</script>';
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/majorproject/doc_profile.php">
        <?php


}
?>
