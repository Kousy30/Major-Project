
 <html>
 <head>
  <title>Committee Profile</title>
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
  padding-left: 5%;
  }

  #subject{
    height : 3cm;
  }
  #submit{
    border-radius: 10px;
    width: 20%;
    height : 1cm;
    color:  Green;
    background:none ;
    border-color: 10px green;
  float: right;
  margin-top: 2%;
  margin-bottom: 2%;
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
  }
  #submit:hover{
    background-color: green;
    color:white;
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
 .facform{
   background-color: #7f5a83;
background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    margin-top: 3%;
      }
   .facform:hover{
     background-color: #0cbaba;
  background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);
        }
    .facop{
    }
      .headi{
    font-family: timesnewroman;
    color:#fff ;
    text-shadow: 4px 4px 5px  black;
    background-color: ;
    padding-left: 2%;
    padding-top: 1%;
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
         <a class=" nav-link  trigger_popup_fricc" href="president-profile.php" ></i>Back</a>
       </li>

   <li class="nav-item">
     <a class=" nav-link  trigger_popup_fricc" href="comm-profile.php" ><i class="fa fa-fw fa-home"></i>Home</a>
   </li>

   <li class="nav-item">
   <a href="logout.php" class="nav-link  trigger_popup_fricc"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
   </li>

   <div class="stt" style="float: center;  padding-left : 10%"><center><h4> <label class="stt"> Welcome to Committee Profile</label>
   </h4></center></div>

</ul>
 </div>
 <div class="row">

   <div class="sidenav">

         <div class="dropdown-btn">Faculty Committee
           <i class="fa fa-caret-down"></i>
         </div>
         <div class="dropdown-container">
           <div class="accordion " id="accordionExample" >

                   <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFacup" aria-expanded="false" aria-controls="collapseOne">
               Update Tab
                   </a>


                   <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFacop" aria-expanded="false" aria-controls="collapseTwo">
                 View Operations
               </a>

         </div>
       </div>
       <div class="dropdown-btn">Executive Committee
         <i class="fa fa-caret-down"></i>
       </div>
       <div class="dropdown-container">
         <div class="accordion " id="accordionExample" >

                 <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseExeup" aria-expanded="false" aria-controls="collapseOne">
             Update Tab
                 </a>


                 <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseExeop" aria-expanded="false" aria-controls="collapseTwo">
               View Operations
             </a>

       </div>
     </div>

   </div>
   <div class="col-sm-8">
     <div id="collapseFacup" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
       <div class="facform">
       <h3 class="headi">Faculty Updates</h3>
       <hr class="new1">
           <form action="fac-insert.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                     <br><label class="lab" for=""><b>Serial Number</b></label>
                     <input type="number"class="tbb"  name="slno" placeholder="" autocomplete="off"class="tbb" required ><br>
                    <br>   <label class="lab" for=""><b>Faculty Name</b></label>
                  <input type="text"pattern="[a-zA-Z-.  ]+" class="tbb"  name="name" placeholder="" autocomplete="off"class="tbb" required ><br>
            <br><label class="lab" for="subject"><b>Faculty Post</b></label>
             <input type="text" pattern="[a-zA-Z-.  ]+" class="tbb"  name="post" placeholder=""autocomplete="off" required><br>
             <br><label class="lab" for="subject"><b>Faculty Department </b></label>
             <input type="text" pattern="[a-zA-Z-. ]+" name="department" id="" placeholder="" class="tbb"  required title="" ><br>
               <br><label class="lab" for=""><b>Upload Image Of Faculty</b></label>
               <input type="file"  name="image" id="image" placeholder="" class="tbb"  required title="" ><br>
                  <hr>
                  <b><input type="submit" name="table" value="SUBMIT" id="submit" class="" ></b>
                 </form>
      </div>
     </div>

        <div class="facop">
     <div id="collapseFacop" class="collapse " style="width : 90%;" aria-labelledby="headingOne" data-parent="#accordionExample">
         <div class="modal-content announ-del " style="
margin-left: 5%;
           border-radius: 25px;
           color:#555;
           background:  #f9f9f9;
           height : 10cm;
           ">
           <div class="modal-header">

             <h5 class="modal-title" id="staticBackdropLabel" style=font:"timesnewroman">Faculty Operation</h5>

           </div>
           <div class="modal-body announ-body scroll " style="  height :3.8cm;">
             <table class="two">
               <tr class="two">
                 <th class="size"><center>Serial Number</center></th>
                 <th class="size"><center>Name</center></th>
                 <th class="size"><center>Post</center></th>
                 <th class="size"><center>Department</center></th>
                 <th class="size"><center>Image</center></th>
                 <th class="size"><center>Operations</center></th>


               </tr>

       <?php

     include("connection.php");
       error_reporting(0);
            $sql = "SELECT * FROM fac_data";
            $result = $conn-> query($sql);
      if($result -> num_rows >0){


            while($row = $result-> fetch_assoc()) {
              echo "
              <tr>
               <td>". $row['slno'] . "</td>
                <td>". $row['name'] . "</td>
                <td>" . $row['post'] ."</td>
                <td>" . $row['department'] ."</td>
                 <td>" . '<img src="data:image;base64,'.base64_encode($row['image']).'"
                 alt="Image" style="width:50px; height:50px;"> '. "</td>
                  <td><button><a href='delete-fac.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></td>

            </tr>
              ";
            }
            echo "</table>";
          }
          else{
            echo "No Faculty Updates Yet!";
          }
          $conn-> close();
            ?>
          </table>

          </div>
          <div class="modal-footer">
              <a class="mod"href="fac-view.php">VIEW</a>
              </div>
  </div>
      </div>
      </div>

      <div id="collapseExeup" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

        <div class="facform">
          <h3 class="headi">Executive Updates</h3>
          <hr class="new1">
          <form action="comm-insert.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                    <br><label class="lab" for=""><b>Serial Number</b></label>
                    <input type="number"class="tbb"  name="slno" placeholder="" autocomplete="off"class="tbb" required ><br>
                   <br>   <label class="lab" for=""><b>Enter Student Name</b></label>
                 <input type="text"pattern="[a-zA-Z-.  ]+" class="tbb"  name="name" placeholder="" autocomplete="off"class="tbb" required ><br>
           <br><label class="lab" for="subject"><b>Enter Student Post</b></label>
            <input type="text" pattern="[a-zA-Z-.  ]+" class="tbb"  name="post" placeholder=""autocomplete="off" required><br>
              <br><label class="lab" for=""><b>Upload Image Of Student</b></label>
              <input type="file"  name="image" id="image" placeholder="" class="tbb"  required title="" ><br>
                 <hr>
                 <b><input type="submit" name="table" value="SUBMIT" id="submit" class="" ></b>
                </form>
      </div>
      </div>

      <div id="collapseExeop" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">


            <div class=" modal-content " style = " margin-left : 5%;" >
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel" font-style="timesnewroman">Executive Operation</h5>

              </div>
              <div class="modal-body announ-body" style="  height :8cm;">
                <table>
                  <tr>
                    <th class="size"><center>Serial Number</center></th>
                    <th class="size"><center>Name</center></th>
                    <th class="size"><center>Post</center></th>
                    <th class="size"><center>Image</center></th>
                    <th class="size"><center>Operations</center></th>

                  </tr>

          <?php

        include("connection.php");
          error_reporting(0);
               $sql = "SELECT * FROM comm_data";
               $result = $conn-> query($sql);
         if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {
                 echo "
                 <tr>
                  <td>". $row['slno'] . "</td>
                   <td>". $row['name'] . "</td>
                   <td>" . $row['post'] ."</td>
                    <td>" . '<img src="data:image;base64,'.base64_encode($row['image']).'"
                    alt="Image" style="width:50px; height:50px;"> '. "</td>

                     <td><button><a href='delete-comm.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></td>


               </tr>
                 ";

               }

               echo "</table>";
             }
             else{
               echo "No Committee Updates yet!";
             }
             $conn-> close();
               ?>
      </table>

      </div>
      <div class="modal-footer">
          <a class="mod"href="comm-view.php">VIEW</a>
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
