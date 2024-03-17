

 <html>
 <head>
  <title>President Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="hom.css">

</head>
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
  .row{
    width : 100%;

    float:left;
  height: auto;
  }

  .sidenav {
  height: 13cm;
  background-color: white;
  overflow-x: hidden;
  color: #555;

  margin: 2%;
  width : 18.8%;
  padding:  -2%;

  float: left;
  }
  /* Style the sidenav links and the dropdown button */
  .sidenav a, .dropdown-btn {
  padding:9px;
  text-decoration: none;
  font-size: 15px;
  color: #555;
  display: block;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  border: 1px solid #ddd;

  }

  /* On mouse-over */
  .sidenav a:hover, .dropdown-btn:hover {
  background-color: #124456;
  color : #fff;
  }
  /* Add an active class to the active dropdown button */
  .active {
  background-color: #124456;
  color: white;
  }

  /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
  .dropdown-container {
  display: none;

  padding-left: 14px;
  padding-top: -1cm;
  }
  .col-sm-8 {
  border: 1px solid #ddd;
  width : 70%;
  margin: 2%;
  height : 1%;

  }
  .collapse{
  width: 90%;
  padding:  2%;
  }
  .butn{
    border-radius: 10px;
    width: 20%;
    height : 1cm;
    color:  black;
    background: #c5c6c7;
    border-color: white;

  margin-top: 2%;
  }
  .tabs{
    background: linear-gradient(to left, #124456,#c5c6c7,#124456);
    border-radius: 25px;
    height : 10cm;
    color:#c5c6c7;
    margin-left: 7%;
    width : 100%;
  }
  .tabs:hover{

    background:linear-gradient(to right,#c5c6c7,#124456,#c5c6c7);
  }
  .tbb{
      border-radius: 10px;
      width : 40%;
      height : 1cm;
      color:  black;
      background: #c5c6c7;
      border-color: white;
  }


  .announ-del{
background: white;
    color:#555;
    margin-left: 7%;

  }
  .modal-header, .modal-footer{
    background: #124456;
        color:#fff;
  }
  .modal-content1{
    background: #124456;

    height : 100%;
    color:#c5c6c7;
    width : 100%;
    height: 11cm;
  }
  .modal-body1{
    background: linear-gradient(to left, #124456);
    color:#c5c6c7;
      width : 100%;

  }
  .modal-body1:hover{
    background-position: right;
  }
  .modal-body{
    color:#555;
    background:  #f9f9f9;

  }

  .col{
    margin:5%;
    height: 100%;
    width : 100%;
  }
  .form{
    background: linear-gradient(to left,#124456,#c5c6c7,#124456);
      border-radius: 25px;
      margin : 3%;
      padding: 2%;


  }
  .form:hover{

    background:linear-gradient(to right,#c5c6c7,#124456,#c5c6c7);
  }
  .lab{

    font-family: timesnewroman;
    font-size: 110%;
  color: #c5c6c7;
  width : 40%;
  }
  #subject{
    height : 3cm;
  }
  #submit{
    border-radius: 10px;
    width: 20%;
    height : 1cm;
    color:  black;
    background: #c5c6c7;
    border-color: white;
  float: right;
  margin-top: 2%;
  }
  .sec-column{

    float: left;
    border-radius: 25px;
    width : 100%;
    margin : 2%;
    padding: 2%;

  }

  .dis{
    width : 100%;
      border-radius: 25px;
  }
  td{
    width : 20%;
  }
  div.scroll {
       width: 100%;
       height: 10cm;
       overflow: auto;
       text-align: center;

     }
tr:nth-child(even){
       background: #fff;
       height: 1.2cm;


     }
tr:nth-child(odd){
       background:  #f9f9f9;
         height: 1.2cm;


     }
table, tr{
       width : 100%;
       height : auto;

     }
  td, th{
    border: 1px solid #ddd;
  }
  hr.new1{
  border-top: 1px solid #fff;
  }
  .headi{
    font-family: timesnewroman;
    color:#fff ;
    text-shadow: 4px 4px 5px  black;
  }
button{
    background-color:red !important;
    color: white;
    text-decoration: none;
   border-radius: 3%;
   float: center;
   border: 1px solid #ddd;
  }
  a{
    color: white;
    text-decoration: none;
  }

  .laab{

    font-family: timesnewroman;
    font-size: 110%;
  color: #555;
  }
  .left{
    padding-left: 2%;
    color : #666;
  font-size: 90%;
  }
  .right{
    padding-left: 20%;
    color :#666;
  font-size: 90%;
  line-height: 1.428571429;
  }
  </style>
<body>
 <!--header-->



  <div class="topnav">
    <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
    <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
    <h6  class = "stt"style="float : right; "><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></h6><br>
    <h6 class = "stt"style="float : right; "><b>National Service Scheme UNIT II</b></font></h6>
 </div>
     <div class="coll" >

     <ul class="nav nav-pills nav " style="padding-left:30px;">

   <li class="nav-item">
     <a class=" nav-link  trigger_popup_fricc" href="president-profile.php" ><i class="fa fa-fw fa-home"></i>Home</a>
   </li>
   <li class="nav-item dropdown">
     <a class="nav-link w3-button w3-black trigger_popup_fricc"  data-toggle="modal" data-target="#staticBackdrop"href="#" role="button" aria-haspopup="true"onclick="document.getElementById('id01').style.display='block'" aria-expanded="false">Change Password</a>
     <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>

           </div>
           <div class="modal-body">
             <form name="frmChange" method="post" action="pres-pass.php" onSubmit="return validatePassword()">
             <div >
             <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
             <table border="0" cellpadding="10" cellspacing="0"  align="center" class="tblSaveForm">
             <tr class="tableheader">
             </tr>
             <tr>
             <td width="40%"><label>Current Password</label></td>
             <td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
             </tr>
             <tr>
             <td><label>New Password</label></td>
             <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
             </tr>
             <td><label>Confirm Password</label></td>
             <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
             </tr>
             <tr>
             <td colspan="2"><input type="submit" name="submit" value="Submit"style="color : white; background: green; width : 20%;border-radius : 7%; height : 1cm; align : right; float:right " class="btnSubmit"></td>
             </tr>
             </table>
             </div>
             </form>
         </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary sec" data-dismiss="modal">Close</button>

           </div>
         </div>
       </div>
     </div>

   </li>
   <li class="nav-item">
   <a href="logout.php" class="nav-link  trigger_popup_fricc"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
   </li>

   <div class="stt" style="float: center;  padding-left : 10%"><center><h4> <label class="stt"> Welcome to the Profile</label></h4></center></div>

</ul>
 </div>
 <div class="row">

   <div class="sidenav">

         <div class="dropdown-btn">News and Updates
           <i class="fa fa-caret-down"></i>
         </div>
         <div class="dropdown-container">
           <div class="accordion " id="accordionExample" >

                   <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNewup" aria-expanded="false" aria-controls="collapseOne">
               Update Tab
                   </a>


                   <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNewop" aria-expanded="false" aria-controls="collapseTwo">
                 View Operations
               </a>

         </div>
       </div>
       <div class="dropdown-btn">Event Announcement
         <i class="fa fa-caret-down"></i>
       </div>
       <div class="dropdown-container">
         <div class="accordion " id="accordionExample" >

                 <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEveup" aria-expanded="false" aria-controls="collapseOne">
             Update Tab
                 </a>


                 <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEveop" aria-expanded="false" aria-controls="collapseTwo">
               View Operations
             </a>

       </div>
     </div>

     <div class="dropdown-btn">Home Page Slideshow
       <i class="fa fa-caret-down"></i>
     </div>
     <div class="dropdown-container">
       <div class="accordion " id="accordionExample" >

               <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEventimg" aria-expanded="false" aria-controls="collapseOne">
                 Event Image
               </a>

               <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseCampimg" aria-expanded="false" aria-controls="collapseOne">
                 Camp Image
               </a>

               <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseVisimg" aria-expanded="false" aria-controls="collapseOne">
                 Vismaya Image
               </a>



     </div>
   </div>
           <a class=" active" type="button" data-toggle="collapse" data-target="#collapseMssg" aria-expanded="false" aria-controls="collapseOne">
            Message Box
           </a>
           <a href="comm-profile.php" class=" active"  type="button" >
            Executive Council
           </a>
           <a href="doc_profile.php"class=" active" type="button" >
            Documents
           </a>

   </div>
   <div class="col-sm-8">
     <div id="collapseNewup" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
       <div class="tabs" style="color : #c5c6c7; text-shadow: 4px 4px 5px  black;">
         <a class="nav-link  trigger_popup_fricc"style="color : #fff; text-shadow: 4px 4px 5px  black;" href = "">
           <b>Announcements Tab</b>
         </a> <hr>
         <form action="announce.php" method = "POST">
           <input type="number"style="width:15% ;  margin-top: -8.5%; margin-left : 80%;" class="tbb"  name="slno" placeholder="sl.no." autocomplete="off"class="tbb" >
           <h5><center>Description</center></h5>
           <textarea id="subject" name="message"  placeholder="Write something.."class="btn"style="height:140px; width : 90%; margin-left: 4%;" required></textarea>
           <br><hr>
           <center><input type="submit" name="query" value="Upload" class="butn" style=""></center>
         </form>
       </div>
     </div>

     <div id="collapseNewop" class="collapse " style="width : 90%;" aria-labelledby="headingOne" data-parent="#accordionExample">

         <div class="modal-content announ-del " style="
margin-left: 5%;
           border-radius: 25px;
           color:#555;
           background:  #f9f9f9;
           height : 10cm;
           ">
           <div class="modal-header">
             <h5 class="modal-title" id="staticBackdropLabel">News and Updates Operation</h5>

           </div>
           <div class="modal-body announ-body scroll " style="  height :3.8cm;">

       <?php

     include("connection.php");
       error_reporting(0);
            $sql = "SELECT * FROM announce";
            $result = $conn-> query($sql);
      if($result -> num_rows >0){


            while($row = $result-> fetch_assoc()) {

              echo "  ". $row['message'] .  "";

              echo "<button ><a href='delete-announce.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button><hr> <br><br>";


            }


          }
          else{
            echo "No News and Updates";
          }
          $conn-> close();
            ?>
          </div>
            <div class="modal-footer">
            <br>
          </div>
          </div>

      </div>





      <div id="collapseEveup" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

        <div class="sec-column form" style="margin-left: 5%">
          <h3 class="headi">Event Announcements Tab</h3>
          <hr class="new1">
              <form action="eventauthent.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                        <label class="lab" for=""><b>Sl no</b></label>
                    <input type="number" class="tbb"  name="slno" placeholder="Serial number" autocomplete="off"class="tbb"><br>
                        <label class="lab" for=""><b>Event Name</b></label>
                        <input pattern="[a-zA-Z ]+"name="name" class="tbb" placeholder="Event name"  type="text" autocomplete="off" required ><br>

                <label class="lab" for="subject"><b>Description</b></label>
                  <textarea id="subject" class="tbb"name="description" placeholder="Write something.."required></textarea><br>
                  <label class="lab" for=""><b>Upload Poster</b></label>
                  <input type="file"  name="image" id="image" placeholder="" class="tbb"   title=""><br>
                  <hr>
                  <input type="submit" name="table" value="SUBMIT" id="submit" class="b">
             </form>
      </div>
      </div>

      <div id="collapseEveop" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">


            <div class=" modal-content " style = " margin-left : 5%;" >
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Event Announcement</h5>

              </div>
              <div class="modal-body announ-body scroll" style="  height :8cm;">

        <table>
          <tr>
            <th class="size">Serial-Number</th>
            <th class="size">Poster-Image</th>
            <th class="size">Event-Name</th>
              <th class="size">Operations</th>


          </tr>
          <?php

        include("connection.php");
          error_reporting(0);
               $sql = "SELECT * FROM event_announce";
               $result = $conn-> query($sql);
         if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {

                 echo "<tr>
                 <td>".$row['slno']."</td>
                 <td>" . '<img src="data:image;base64,'.base64_encode($row['image']).'"
                 alt="Image" style="width:100px; height:100px;"> '. "</td>
                     <td>" . $row['name'] ."</td>

                    <td><button><a href='eventdelete.php?slno=$row[slno]'> DELETE</a></button></td>
      </tr>


                 ";
               }

               echo "</table>";
             }
             else{
               echo "No Records";
             }
             $conn-> close();
               ?>
      </table>

      </div>
      <div class="modal-footer"><br>
      </div>
      </div>
      </div>

      <div id="collapseEventimg" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Event Image for Slideshow</center></h1><br></h5>
         <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="modal-body  scroll ">
          <div class="sec-column1">
            <form action="event-auth.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                  <input type="hidden" name="slno">
                        <label class="" for=""><b><br>Add Images:</b></label>
                    <input type="file"  name="image" id="image" placeholder="" class=""   title="">
                    <input type="submit" name="table" value="SUBMIT" id="" class="b"><hr>
                    <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM eventimg";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                          echo"<br><br><button> <a href='eventimg-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";
                      }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>
               </form>
        </div>

        </div>
        <div class="modal-footer">
          <a class="mod"href="station-profile.php">VIEW</a>
        </div>

      </div>

      <div id="collapseCampimg" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Camp Image for Slideshow</center></h1><br></h5>
         <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="modal-body  scroll ">
          <div class="sec-column1">
            <form action="camp-auth.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                  <input type="hidden" name="slno">
                        <label class="" for=""><b><br>Add Images:</b></label>
                    <input type="file"  name="image" id="image" placeholder="" class=""   title="">
                    <input type="submit" name="table" value="SUBMIT" id="" class="b"><hr>
                    <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM campimg";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                          echo"<br><br><button> <a href='campimg-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";
                      }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>
               </form>
        </div>

        </div>


      </div>

      <div id="collapseVisimg" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Vismaya Image for Slideshow</center></h1><br></h5>
         <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="modal-body  scroll ">
          <div class="sec-column1">
            <form action="vism-auth.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                  <input type="hidden" name="slno">
                        <label class="" for=""><b><br>Add Images:</b></label>
                    <input type="file"  name="image" id="image" placeholder="" class=""   title="">
                    <input type="submit" name="table" value="SUBMIT" id="" class="b"><hr>
                    <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM visimg";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                          echo"<br><br><button> <a href='visimg-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";
                      }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>
               </form>
        </div>

        </div>

      </div>

      <div id="collapseMssg" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

      <div class="column col" >

         <div class="modal-content modal-content1" >
           <div class="modal-header">
             <h5 class="modal-title" id="staticBackdropLabel">Message Box</h5>

           </div>
           <div class="modal-body modal-body1 scroll">
<table>
             <?php

           include("connection.php");
             error_reporting(0);
                  $sql = "SELECT * FROM queries";
                  $result = $conn-> query($sql);
            if($result -> num_rows >0){


                  while($row = $result-> fetch_assoc()) {


                    echo'<label>';
                    echo"Name: ". $row['name'] . "";
                    echo'</label>';
                    echo'<br><label>';
                     echo"Register Number:" . $row['regnum'] ."";
                      echo'</label>';

                      echo'<br><label>';
                       echo"Email:" . $row['email'] . "";
                       echo'</label>';

                       echo"<label>Title :" . $row['title'] . "<br></label><br>
                       <label >Description :" . $row['descrip'] . "<br></label><br>



                 </label><hr>
                 </div>
                    ";
                  }

                  echo "</table>";
                }
                else{
                  echo "0 result";
                }
                $conn-> close();
                  ?>
                </table>

       </div>
           <div class="modal-footer">
           <br>
         </div>
       </div>
         </div>
       </div>
</div>
   </div>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}
return output;
}

   var dropdown = document.getElementsByClassName("dropdown-btn");
   var i;

   for (i = 0; i < dropdown.length; i++) {
     dropdown[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var dropdownContent = this.nextElementSibling;
       if (dropdownContent.style.display === "block") {
         dropdownContent.style.display = "none";
       } else {
         dropdownContent.style.display = "block";
       }
     });
   }
 </script>
 </body>
 </html>
