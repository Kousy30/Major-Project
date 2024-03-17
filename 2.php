<html>
 <head>
  <title>Student Support</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="hom.css">
  <link rel="stylesheet" href="sup.css">
  <style>
   .d-block{
     height: 6cm;
   }
  </style>


 </head>
<body>

  <!--header-->

  <div class="header" id="myheader">
    <header class = "start "  id= "new ">
       <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
       <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
       <h2  class = "text"><center><font face="Algerian"color="#da7b93"><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></center></h2>
       <h5 class = "text" ><center><font face="Algerian" color="#a4b3b6">36, Langford Rd, Bengaluru-27</font><br></center></h5>
       <h2 class = "text"><center><font face="Algerian" color="#da7b93 "><b>National Service Scheme UNIT II</b></font></center></h2>
    </header>
  </div>
 <!--nav-->
 <nav aria-label="breadcrumb" class="crumb">
    <ol class="breadcrumb" style="background-image:linear-gradient(to bottom ,#da7b93 ,#eee2dc )";>
     <li class="breadcrumb-item active" aria-current="page" style="color: #2f4454">Student Support</li>
        <li class="breadcrumb-item"><a href="1.home.php" style="color:#2e151b">Home</a></li>
        <li class="breadcrumb-item">
          <a href="2.html" style="color:#2e151b" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login
          <svg width=".7em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Volunteer_login.html">Volunteer Login</a>
          <div class="dropdown-divider"></div>

          <a class="dropdown-item" href="President_Login.html">President Login</a>

          <a class="dropdown-item" href="Doc_Login.html">Document-Head Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="faculty_login.html">Co-ordinator Login</a>
        </div>


        </li><br><br>
   </ol>
  </nav>

  <div class="row">
  <div>
<ul class="nav nav-pills nav flex-column" style="padding-left:40px;">
  <li class="nav-item">
    <a class=" nav-link  trigger_popup_fricc" href = "application.php">Application Form</a>

  </li>
  <li class="nav-item dropdown">
    <a class="nav-link w3-button w3-black "  data-toggle="modal" data-target="#staticBackdrop"href="#" role="button" aria-haspopup="true"onclick="document.getElementById('id01').style.display='block'" aria-expanded="false">News and Updates</a>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Announcements</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php

          include("connection.php");
            error_reporting(0);
                 $sql = "SELECT * FROM announce";
                 $result = $conn-> query($sql);
           if($result -> num_rows >0){


                 while($row = $result-> fetch_assoc()) {

                   echo "  ". $row['message'] . "";

                 }


               }
               else{
                 echo "0 result";
               }
               $conn-> close();
                 ?>
        </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary sec" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="evean.php">Event Announcements</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Executive Council</a>

    <div class="dropdown-menu menu" style=" margin-left : 100%;">

          <a class="dropdown-item" href="faculty21.php">Faculty Members</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="comm21.php">Committee Members</a>

        </div>
        </a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="event21.php">Events</a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="gallery.php">Gallery</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="achieve21.php">Achievements</a>
  </li>

</ul>
</div>

<div class="column" style="margin-left:15%">
  <p class="stt">NSS Unit-II</p><br><p class="sss">NOT ME BUT YOU</p>
  <div class="sot"></div>
</div>
</div>
<div style="background-image: linear-gradient(to top ,#da7b93 ,#eee2dc )">
     <br><br>
  </div>

<!--jumbotron-->

<div class="jumbotron"><h3><font face = Algerian>CONTACT US</font></h3>
  <hr class="my-4">
  <div class="pad">
    <div class="mar">
  <h3><font face = Algerian><u>Follow us</u></font></h3>
  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Click here to follow">
  <a href="https://www.youtube.com/channel/UCqcrr4QjViaK5h92zxRoqFQ"><img src="https://drive.google.com/thumbnail?id=1AUIrTHGcHx0Nf2zxKMXc5OOAncjhPnOX"class="social"></a>
</button><br>
<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Click here to follow">
  <a href="https://instagram.com/nss2.sjc"><img src="https://drive.google.com/thumbnail?id=1AQ5KkDqNvS3fnn6a0ceevmajJgO4p3l7" class="social"></a>
</button>
</div>
<div class="mar">
<h3 ><font face = Algerian><u>Email ID</u></font></h3>
<h6 style="color:blue">nssunit2sjc@gmail.com</h6>
</div>
</div>
  </div>


</body>
</html>
