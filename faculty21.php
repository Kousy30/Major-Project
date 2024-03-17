<html>
<head>
  <title>Faculty Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="hom.css">
    <link rel="stylesheet" href="execute.css">
<style>


.topnav, .coll{
  background-color: #124456;
  color: #fff;
  margin-top: -0.20cm;
  font-family: timesnewroman;

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
  .fa-caret-down {
    float: right;
    padding-right: 8px;
  }
  .nav-tabs{
    border: none;
  }
  .img{
    width:60%;
    background-color: red;
    height: 5cm;
  }
  .column {
    float: left;
    width: 100%;
    padding: 0 10px;
  }

  /* Remove extra left and right margins, due to padding in columns */
  .row {margin: 0 -5px;}

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
    text-align: center;
  background-color:#8ee4af ;
  margin-left: 33%;
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;

      width: 130%;
     float: left;
     padding: 0 10px;
  }
  .card:after{
    display: table;
    clear:both;
  }
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }
.mark{
  float: right;
  margin-top: -30%;
  margin-left: 50%;
}
.headone{
  color: white;
  font-family: timesnewroman;
  font-weight: 200;
  margin-top: 3%;
}
.abb{
  color: #05386b;
}
hr.nap{
  border-top: 2px solid blue;
  margin-left:  30%;
  margin-right: 30%;
}


</style>

</head>
<body style="background-color: #0499f2;
background-image: linear-gradient(315deg, #0499f2 0%, #26f596 74%);">  <!--header-->
  <div class="topnav">
    <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
    <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
    <h6  class = "stt"style="float : right; "><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></h6><br>
    <h6 class = "stt"style="float : right; "><b>National Service Scheme UNIT II</b></font></h6>
  </div>
     <div class="coll">

     <ul class="nav nav-pills nav "  >

   <li class="nav-item" style="padding-left: -16%;">
     <a class=" nav-link  trigger_popup_fricc" href="1.home.php" ><i class="fa fa-fw fa-home"></i>Home</a>
   </li>
   <li class="nav-item">
     <a class=" nav-link  trigger_popup_fricc" href = "2.php">Student Support</a>
   </li>
   <li class="nav-item">
   <a href="" class="nav-link  trigger_popup_fricc">Faculty</a>
   </li>
  </ul>
</div>

<div class="headone">
<h2><center>Faculty Members Of The Academic Year </center></h2></div>
<hr class="nap">
<?php
    include("connection.php");
    error_reporting(0);
         $sql = "SELECT * FROM fac_data";
         $result = $conn-> query($sql);
   if($result -> num_rows >0){
         while($row = $result-> fetch_assoc()) {

    ?>
    <div class="row">';
      <div class="column">';
    <div class="card mb-3" style="max-width: 500px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <?php echo"  " . '<img src="data:image;base64,'.base64_encode($row['image']).'"
            alt="Image" style="width:200px; height:200px;"> '. " "?>

            </div>
        <div class="col-md-8">
       <div class="card-body">
       <h5 class="card-title"><b> Faculty Member</b> </h5>
       <h4 class="card-text abb" >
         <a href="#" style="color:#05386b;" ><b><?php echo $row['name']; ?> </b></a>
   </h4>
        <h4 class="card-text cvv">
          <a href="#" style="color:#379683;"><b><?php echo $row['post']; ?></b></a><br>
          <a href="#" style="color:#379683;"><b><?php echo $row['department']; ?></b></a>
          </h4>
                </div>
        </div>
      </div>
     </div>
   </div>
 </div>
     <?php

    }
   }
   ?>
</body>
</html>
