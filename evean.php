<?php

include("connection.php");
error_reporting(0);
     $sql = "SELECT * FROM event_announce";
     $result = $conn-> query($sql);
     ?>
<html>
<head>
  <title>Event Announcement</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="hom.css">
<style>
.row{
  width : 100%;
  float: left;

}
div.scroll {
     width: 100%;
     height: 12cm;
     overflow: auto;
     text-align: center;

   }
.column{
  width : 40%;
  height : 10cm;
  float: left;
  margin: 2%;
  margin-top: 6%;


}
.extra{
  margin-top: 40%;
}
.col{
  background: silver;
  padding: 5%;
  font-size: 70%;
  color: black;
  margin: 2%;
}
.rows{

}
.topnav, .coll{
  background-color: #124456;
  color: #fff;
  margin-top: -0.20cm;
  font-family: timesnewroman;
  height: 1.6cm;

}
  .topnav{
      padding-top:2%;
      font-size: 150%;
  }
  .nav-link{

    color: #fff;
  }
  .nav-link:hover{
    color : yellow;
    text-decoration: none;
  }
  #left-logo {
  width : 5.7%;
  height: 2cm;
  margin-top: -0.8%;
  }
  #right-logo{
  width : 6%;
  height:2cm;
  margin-top: -0.8%;
  }
</style>

</head>
<body style="background:#fbe8a6">

  <div class="topnav">
    <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
    <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
    <h6  class = "stt"style="float : right; "><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></h6><br>
    <h6 class = "stt"style="float : right; "><b>National Service Scheme UNIT II</b></font></h6>
  </div>
     <div class="coll" >

     <ul class="nav nav-pills nav " style="padding-left:30px;">
       <li class="nav-item">
       <a href="" class="nav-link  trigger_popup_fricc" style=" color:#fbe8a6">Event Instructions</a>
       </li>

   <li class="nav-item">
     <a class=" nav-link  trigger_popup_fricc" href="1.home.php" ><i class="fa fa-fw fa-home"></i>Home</a>
   </li>
   <li class="nav-item">
     <a class=" nav-link  trigger_popup_fricc" href = "2.php">Student Support</a>
   </li>



  </ul>
</div><br>
<div style="background-image: linear-gradient(to bottom ,#fbe8a6); margin-top : -2%">
<br>
<center><h2> <label class="stt" style="float: center; font-family:garamond; color:#303c6c ">Event Instructions</label></h2></center>
</div>
    <center>
      <h1 style="font-family:garamond; color:#303c6c"><b>
    <?php
     if($result -> num_rows >0){
           while($row = $result-> fetch_assoc()) {

             echo '<div class = "rows">';
             echo "" . $row['name'] ."";
             echo '<div class = "row">';
             echo '<div class="column">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                 alt="No Poster" style="width:100%; height : 9cm"> ';
                 echo"</div>";
                 echo '<div class="col scroll">';
                 echo"Rules and Regulations<br>".$row['description']." ";
                     echo"</div>";
                     echo"</div>";
                     echo "</div>";


           }

         }
         else{
           echo "No Events";
         }
         $conn-> close();
           ?>
         </div>

         </h1>
       </center>

<div class="extra"style="background-image: linear-gradient(to top ,#124456 ,#124456, #fbe8a6 )">
<br><br>
</div>



</body>
</html>
