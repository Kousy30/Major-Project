<?php
include("connection.php");
session_start();
unset($_SESSION['uname']);
session_destroy();
session_write_close();
header('Location: 1.home.php');
die;
?>
