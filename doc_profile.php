<?php session_start();
include('connection.php');
 ?>

 <html>
 <head>
  <title>Document Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="hom.css">
  <style>
  .column{
    width : 20%;
    float: left;
  }


  .sub-column1{
    width:97%;
    height : 1.2cm;
    margin-left : 9%;
    background-color: white;
    color: #555;
    border-radius: 0%;
  }

  .sub-column1:hover{
    background-color: #124456;
  }

  .sub-link{
    color: #555;
  }
  .sub-link:hover{
    background-color: #124456;
    color: #fff;
    text-decoration: none;
  }

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
.row{
  margin-top : 2%;
}
.col{
  margin-left: 2%;
  width : 60%;
padding : 1.4%;
border: 1px solid #ddd;

}

	table, th, td {


    padding: 1%;

    height : auto;
    border: 1px solid #ddd;
	}
  tr:nth-child(odd){
    background: #fff;
    height: 1.2cm;


  }
  tr:nth-child(even){
    background:  #f9f9f9;
      height: 1.2cm;


  }
  table{
  width : 100%;
  color : #666;

  }
  .modal-header, .modal-footer{
    background-color: #124456;
    color: #fff;
  }
  .mod{
    color: #fff;
  }
  div.scroll {
       width: 100%;
       height: 10cm;
       overflow: auto;
       text-align: center;

     }
     @media print{
      body *{
        visibility:visible;
        -webkit-print-color-adjust: exact;
      }
        .print-container, .print-container *{
          visibilty:hidden;
        }
        .collapse{
          visibility:visible;
          -webkit-print-color-adjust: exact;
        }
        header *{
          visibility:hidden;
        }
        nav *{
          visibility: hidden;
        }
       .pri *{
          visibility: hidden;
       }
     .jumbotron *{
       visibility:hidden;
     }
     }
     .hea{
       width : 20%;
       font-size: 80%;
     }
.b{
  background-color: green !important;
color: white;
border-radius: 8%;
}
button{
  background-color:red !important;
  color: white;
  text-decoration: none;
 border-radius: 9%;
 float: center;

 border: 1px solid #ddd;
}
a{
  color: white;
  text-decoration: none;
}

.test{
  width : 15%;
  height: 4.5cm;
  box-shadow: 10px 5px 5px #124456;
  border-radius: 3%;
  margin: 2%;
  float: left;
  filter : grayscale(100%);
  transition: : 1s;
}

.test:hover{
  filter : grayscale(0);
  transform: scale(1.1);
  color: white;
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
<body>
 <!--header-->

 <div class="topnav">
   <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
   <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
   <h6  class = "stt"style="float : right; "><center><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></center></h6><br>
   <h6 class = "stt"style="float : right; "><center><b>National Service Scheme UNIT II</b></font></center></h6>
</div>
    <div class="coll" >

    <ul class="nav nav-pills nav " style="padding-left:30px;">

  <li class="nav-item">
    <a class=" nav-link  trigger_popup_fricc" href="" ><i class="fa fa-fw fa-home"></i>Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link w3-button w3-black trigger_popup_fricc"  data-toggle="modal" data-target="#staticBackdrop"href="#" role="button" aria-haspopup="true"onclick="document.getElementById('id01').style.display='block'" aria-expanded="false">Change Password</a>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
            <button type="button" style="color : white; background:#124456; "class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form name="frmChange" method="post" action="doc-pass.php" onSubmit="return validatePassword()">
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

       <div class="stt"style="padding-left : 9%;"><center> <label class="stt"><h5> Welcome to Document Profile</h5></label></center></div>
</ul>
</div>
<div class="row">

<div class="column">
  <div  class="sub-column1  accordion card " id="accordionExample"id="headingEight">
    <a href = ""class="sub-link " type="button" data-toggle="collapse" data-target="#collapseAppl" aria-expanded="false" aria-controls="collapseOne"><center>Application Form</center></a>
  </div>

  <div  class="sub-column1 accordion card " id="accordionExample"id="headingOne">
    <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseEvent" aria-expanded="false" aria-controls="collapseOne"><center>Event List</center></a>
</div>
  <div  class="sub-column1 accordion card " id="accordionExample"id="headingTwo" >
    <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseMom" aria-expanded="false" aria-controls="collapseOne"><center>Minutes Of Meeting</center></a>
  </div>
  <div class="sub-column1 accordion card " id="accordionExample"id="headingThree" >
    <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseDoc" aria-expanded="false" aria-controls="collapseOne"><center>Final Document</center></a>
  </div>
  <div class="sub-column1 accordion card " id="accordionExample"id="headingFour">
    <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseAchieve" aria-expanded="false" aria-controls="collapseOne"><center>Achievement</center></a>
  </div>
  <div class="sub-column1 accordion card " id="accordionExample"id="headingFive">
      <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapsestat" aria-expanded="false" aria-controls="collapseOne"><center>Stationary Stock</center></a>
    </div>
    <div class="sub-column1 accordion card " id="accordionExample"id="headingSix">
        <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseUten" aria-expanded="false" aria-controls="collapseOne"><center>Utensil Stock</center></a>
    </div>
    <div class="sub-column1 accordion card " id="accordionExample"id="headingSeven">
      <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseMan" aria-expanded="false" aria-controls="collapseOne"><center>Manual Stock</center></a>
    </div>
    <div class="sub-column1 accordion card " id="accordionExample"id="headingSeven">
      <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseEven" aria-expanded="false" aria-controls="collapseOne"><center>Event Gallery</center></a>
    </div>
    <div class="sub-column1 accordion card " id="accordionExample"id="headingSeven">
      <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseCamp" aria-expanded="false" aria-controls="collapseOne"><center>Camp Gallery</center></a>
    </div>
    <div class="sub-column1 accordion card " id="accordionExample"id="headingSeven">
      <a href = ""class="sub-link" type="button" data-toggle="collapse" data-target="#collapseVismay" aria-expanded="false" aria-controls="collapseOne"><center>Vismaya Gallery</center></a>
    </div>

  </div>
<div class="col">

  <div id="collapseAppl" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
   <div class="modal-header">
          <h6 class="modal-title" id="staticBackdropLabel">APPLICATION FORMS</h6>

          <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>


        </div>
        <div class="modal-body  scroll ">
          <table>
           <tr>
             <th>Sl. No.</th>
             <th> Name</th>
             <th>Register Number</th>
             <th>Course</th>
             <th>Blood Group</th>
             <th>Email</th>
             <th>Phone Number</th>
           </tr>
          <?php

          include("connection.php");
          error_reporting(0);
                $sql = "SELECT * FROM application";
               $result = $conn-> query($sql);
          if($result -> num_rows >0){


                while($row = $result-> fetch_assoc()) {

                  echo "<tr><td>". $row['slno'] . "</td><td>". $row['name'] . "</td><td>" . $row['regno'] ."</td><td>" . $row['course'] . "</td><td>" . $row['blood'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><tr>";
                }

                echo "</table>";
             }
             else{
               echo "0 result";
             }
             $conn-> close();
                ?>

       </div>
     <div class="modal-footer">
          <a class="mod"href="profile.php"><b>VIEW</b></a>
     </div>
       </div>


  <div id="collapseEvent" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
   <div class="modal-header">
          <h5 class="modal-title"id="staticBackdropLabel">NSS EVENTS</center></h1><br></h5>
          <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="modal-body  scroll ">

              <form action="tableinsert.php" method="post"   onsubmit="return validation()" >
              <table>
                <tr>
                    <th class="hea">
                        <b>Serial Number</b>
                    </th>
                    <th class="hea">
                       <b> Event Date</b>
                    </th>
                    <th class="hea">
                        <b>Event Name</b>
                    </th>

                  <th class="hea">
                      <b>Operations</b>
                  </th>
                </tr>
                  <tr>


                <td>
                    <input type="number"class="tbb"  name="slno" placeholder="In cms" autocomplete="off"class="tbb" ><br><br>
                </td>


              <td>
                  <input type="date"class="tbb"  name="date" autocomplete="off" required><br><br>
              </td>



                <td>
                  <input type="text" pattern="[a-zA-Z ]+" name="event" placeholder="" class="tbb"  required title="name allowed only text" ><br><br>
                </td>
                <td><input type="submit" name="table" value="ADD" id="submit" class="b" ></td>

          </table>

             </form>
             <table>
               <tr>
                 <th class="size">Serial-Number</th>
                 <th class="size">Event-Date</th>
                 <th class="size">Event-Description</th>
                 <th class="size" colspan="2">Operations</th>


               </tr>
               <?php

             include("connection.php");
               error_reporting(0);
                    $sql = "SELECT * FROM event_table";
                    $result = $conn-> query($sql);
              if($result -> num_rows >0){
                while($row = $result-> fetch_assoc()) {
                  echo "
                  <tr>
                  <td>". $row['slno'] . "</td>
                  <td>" . $row['date'] ."</td>
                  <td>" . $row['event'] . "</td>";

                  echo"<td><button> <a href='delete.php?slno=$row[slno]' onclick='checkdelete()' >DELETE</a></button></td>
                    </tr>
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
                    <a class="mod"href="eventprofile.php">VIEW</a>
                </div>
                </div>

  <div id="collapseMom" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
   <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">MINUTES OF MEETING</center></h1><br></h5>
          <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>
        <div class="modal-body  scroll ">

              <form action="meetinsert.php" method="post"   onsubmit="return validation()" >
              <table>
                <tr>
                    <th class="hea">
                        <b>Serial Number</b>
                    </th>
                    <th class="hea">
                       <b> Meeting Date</b>
                    </th>
                    <th class="hea">
                        <b>Description</b>
                    </th>

                  <th class="hea">
                      <b>Operations</b>
                  </th>
                </tr>
                  <tr>


                <td>
                    <input type="number"class="tbb"  name="slno" placeholder="In cms" autocomplete="off"class="tbb"  ><br><br>
                </td>


              <td>
                  <input type="date"class="tbb"  name="date" autocomplete="off" required><br><br>
              </td>



                <td>
                  <textarea id="subject" name="meet"  placeholder="Write something.."class="btn"style="height:90px; width : 90%; margin-left: 4%;" required></textarea>
</td>
                <td><input type="submit" name="table" value="ADD" id="submit" class="b" ></td>

          </table>

             </form>
             <table>
               <tr>
                 <th class="size">Serial-Number</th>
                 <th class="size">Meeting-Date</th>
                 <th class="size">Meeting-Description</th>
                 <th class="size" colspan="2">Operations</th>


               </tr>
               <?php

             include("connection.php");
               error_reporting(0);
                    $sql = "SELECT * FROM meet_table";
                    $result = $conn-> query($sql);
              if($result -> num_rows >0){


                    while($row = $result-> fetch_assoc()) {

                      echo "
                      <tr>
                        <td>". $row['slno'] . "</td>
                        <td>" . $row['date'] ."</td>
                        <td>" . $row['meet'] . "</td>";

                     echo"<td><button> <a href='meetdelete.php?slno=$row[slno]' onclick='checkdelete()' >DELETE</a></button></td>

                    </tr>
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
                  <a class="mod"href="meetprofile.php">VIEW</a>
                </div>
                </div>

  <div id="collapseDoc" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Documentation of the year 2017-2018</center></h1><br></h5>
     <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
    </div>
    <div class="modal-body  scroll ">
    <iframe src="https://drive.google.com/file/d/11aHAw8XlcpMX7dKrRBf2TkqBhlJAmR-t/preview" width="100%" height="100%"></iframe>
  </div>
  <div class="modal-footer"><br>
  </div>
  <hr>
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Documentation of the year 2018-2019</center></h1><br></h5>
   <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
  </div>
  <div class="modal-body  scroll ">
    <iframe src="https://drive.google.com/file/d/1Qx-IrlWAxYx_NrK7DGBCCwQUZrNYIjkM/preview" width="100%" height="100%"></iframe>
</div>
<div class="modal-footer"><br>
</div>
<hr>
<div class="modal-header">
  <h5 class="modal-title" id="staticBackdropLabel">Documentation of the year 2019-2020</center></h1><br></h5>
 <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
</div>
<div class="modal-body  scroll ">

  <iframe src="https://drive.google.com/file/d/11pVzXLRVhZUiGvM7kjMwEIY5z4_9nJZn/preview" width="100%" height="100%"></iframe>
</div>
<div class="modal-footer">
</div>



  </div>
  <div id="collapseAchieve" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
   <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Achievements</h5>
    <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
        </div>

        <div class="modal-body  scroll ">
          <form action="achieve-insert.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()" >
            <table>
              <tr>
                <th class="hea">
                  <b>Serial Number</b>
                </th>
                <th class="hea">
                   <b>Winner Name</b>
                </th>
                <th class="hea">
                    <b>Description</b>
                </th>
                <th class="hea">
                    <b>Upload Image</b>
                </th>
                <th class="hea">
                    <b>Operations</b>
                </th>
                </tr>
                <tr>
                  <td>
                    <input type="number"class="tbb"  name="slno" placeholder="" autocomplete="off"class="tbb"  ><br><br>
                  </td>
                  <td>
                    <input type="text" pattern="[a-zA-z-.]+" class="tbb"  name="name" autocomplete="off" required><br><br>
                  </td>
                  <td>
                    <input type="text"class="tbb"  name="description" autocomplete="off" required><br><br>
                  </td>
                  <td>
                    <input type="file"class="tbb"  name="image" autocomplete="off" required><br><br>
                  </td>
                  <td>
                    <input type="submit" name="table" value="ADD" id="submit" class="b" >
                  </td>
                </tr>

          </table>
          </form>
          <table>
          <tr>
            <th class="size">Serial-Number</th>
            <th class="size">Winners Name</th>
            <th class="size">Description</th>
            <th class="size">Image</th>
            <th class="size">Operations</th>
          </tr>
          <?php

          include("connection.php");
          error_reporting(0);
               $sql = "SELECT * FROM achieve_data";
               $result = $conn-> query($sql);
          if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {

                 echo "
                 <tr>
                 <td>". $row['slno'] . "</td>
                   <td>" . $row['name'] ."</td>
                   <td>" . $row['description'] . "</td>
                     <td>" . '<img src="data:image;base64,'.base64_encode($row['image']).'"
                     alt="Image" style="width:50px; height:50px;"> '. "</td>";

                     echo" <td><button> <a href='delete-achieve.php?slno=$row[slno]' onclick='checkdelete()' >DELETE</a></button></td>


               </tr>
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
          <a class="mod"href="achieve-profile.php">VIEW</a>
          </div>

          </div>
<div id="collapsestat" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">STATIONARY STOCK</center></h1><br></h5>
   <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
  </div>
  <div class="modal-body  scroll ">
    <form action="stat-insert.php" method="post"   onsubmit="return validation()" >
      <table>
        <tr>
          <th class="hea">
            <b>Serial Number</b>
          </th>
          <th class="hea">
             <b>Stock-Item</b>
          </th>
          <th class="hea">
              <b>Quantity</b>
          </th>
          <th class="hea">
              <b>Operations</b>
          </th>
          </tr>
          <tr>
            <td>
              <input type="number"class="tbb"  name="slno" placeholder="In cms" autocomplete="off"class="tbb"  ><br><br>
            </td>
            <td>
              <input type="text"class="tbb"  name="item" autocomplete="off" required><br><br>
            </td>
            <td>
              <input type="text"class="tbb"  name="quan" autocomplete="off" required><br><br>
            </td>
            <td>
              <input type="submit" name="table" value="ADD" id="submit" class="b" >
            </td>
          </tr>

  </table>
  </form>
  <table>
    <tr>
      <th class="size">Serial-Number</th>
      <th class="size">Item Name</th>
      <th class="size">Quantity</th>
      <th class="size">Operations</th>
    </tr>
    <?php
    include("connection.php");
    error_reporting(0);
    $sql = "SELECT * FROM station_table";
    $result = $conn-> query($sql);
    if($result -> num_rows >0){
      while($row = $result-> fetch_assoc()) {
        echo "
        <tr>
        <td>". $row['slno'] . "</td>
        <td>" . $row['item'] ."</td>
        <td>" . $row['quan'] . "</td>";
      echo"<td><button><a href='station-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></td>
        </tr>

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
    <a class="mod"href="station-profile.php">VIEW</a>
  </div>

</div>
<div id="collapseUten" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
<div class="modal-header">
  <h5 class="modal-title" id="staticBackdropLabel">UTENSILS STOCK</center></h1><br></h5>
 <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
</div>
<div class="modal-body  scroll ">
  <form action="utensil-insert.php" method="post"   onsubmit="return validation()" >
    <table>
      <tr>
        <th class="hea">
          <b>Serial Number</b>
        </th>
        <th class="hea">
           <b>Stock-Item</b>
        </th>
        <th class="hea">
            <b>Quantity</b>
        </th>
        <th class="hea">
            <b>Operations</b>
        </th>
        </tr>
        <tr>
          <td>
            <input type="number"class="tbb"  name="slno" placeholder="In cms" autocomplete="off"class="tbb"  ><br><br>
          </td>
          <td>
            <input type="text"class="tbb"  name="item" autocomplete="off" required><br><br>
          </td>
          <td>
            <input type="text"class="tbb"  name="quan" autocomplete="off" required><br><br>
          </td>
          <td>
            <input type="submit" name="table" value="ADD" id="submit" class="b" >
          </td>
        </tr>

</table>
</form>
<table>
  <tr>
    <th class="size">Serial-Number</th>
    <th class="size">Item Name</th>
    <th class="size">Quantity</th>
    <th class="size">Operations</th>
  </tr>
  <?php
  include("connection.php");
  error_reporting(0);
  $sql = "SELECT * FROM utensil_table";
  $result = $conn-> query($sql);
  if($result -> num_rows >0){
    while($row = $result-> fetch_assoc()) {
      echo "
      <tr>
      <td>". $row['slno'] . "</td>
      <td>" . $row['item'] ."</td>
      <td>" . $row['quan'] . "</td>";
    echo"<td><button><a href='utensils-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></td>
      </tr>

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
  <a class="mod"href="uten-profile.php">VIEW</a>
</div>
</div>
<div id="collapseMan" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
<div class="modal-header">
  <h5 class="modal-title" id="staticBackdropLabel">MANUAL-ITEM STOCK</center></h1><br></h5>
  <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
</div>
<div class="modal-body  scroll ">
  <form action="manual-insert.php" method="post"   onsubmit="return validation()" >
    <table>
      <tr>
        <th class="hea">
          <b>Serial Number</b>
        </th>
        <th class="hea">
          <b>Stock-Item</b>
        </th>
        <th class="hea">
          <b>Quantity</b>
        </th>
        <th class="hea">
          <b>Operations</b>
        </th>
      </tr>
      <tr>
        <td>
          <input type="number"class="tbb"  name="slno" placeholder="In cms" autocomplete="off"class="tbb"  ><br><br>
        </td>
        <td>
          <input type="text"class="tbb"  name="item" autocomplete="off" required><br><br>
        </td>
        <td>
          <input type="text"class="tbb"  name="quan" autocomplete="off" required><br><br>
        </td>
        <td>
          <input type="submit" name="table" value="ADD" id="submit" class="b" >
        </td>
      </tr>

</table>
</form>
<table>
  <tr>
    <th class="size">Serial-Number</th>
    <th class="size">Item Name</th>
    <th class="size">Quantity</th>
    <th class="size" colspan="2">Operations</th>
  </tr>
<?php
include("connection.php");
error_reporting(0);
$sql = "SELECT * FROM manual_table";
$result = $conn-> query($sql);
  if($result -> num_rows >0){
while($row = $result-> fetch_assoc()) {
    echo "
    <tr>
    <td>". $row['slno'] . "</td>
    <td>" . $row['item'] ."</td>
    <td>" . $row['quan'] . "</td>";
  echo"<td><button><a href='manual-delete.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></td>
    </tr>
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
      <a class="mod"href="manual-profile.php">VIEW</a>
    </div>
    </div>

<div id="collapseEven" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">EVENT GALLERY</center></h1><br></h5>
   <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
  </div>
  <div class="modal-body  scroll ">
    <div class="sec-column1">
      <form action="eventgal-authent.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
            <input type="hidden" name="slno">
                  <label class="" for=""><b><br>Add Images:</b></label>
              <input type="file"  name="image" id="image" placeholder="" class=""   title="">
              <input type="submit" name="table" value="SUBMIT" id="" class="b"><hr>
              <?php

            include("connection.php");
              error_reporting(0);
                   $sql = "SELECT * FROM event_gal";
                   $result = $conn-> query($sql);
             if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {

                 echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                     alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                    echo"<br><br><button> <a href='delete-event.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";
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
<br>
  </div>

</div>
<div id="collapseCamp" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">CAMP GALLERY</center></h1><br></h5>
   <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
  </div>
  <div class="modal-body  scroll ">

          <form action="camp-authent.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                  <label class="lab" for=""><b>Add Images:</b></label>
                  <input type="hidden" name="slno">
              <input type="file"  name="image" id="image" placeholder="" class="tbb"   title="">
              <input type="submit" name="table" value="SUBMIT" id="submit" class="b"><hr>
              <?php
              include("connection.php");
                error_reporting(0);
               $sql = "SELECT * FROM camp_gal";
              $result = $conn-> query($sql);
             if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {
                 echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                     alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                    echo"<br><br><button> <a href='delete-camp.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";

               }


             }
             else{
               echo "No Images in Gallery";
             }
                 $conn-> close();
                   ?>
         </form>
    </div>
    <div class="modal-footer">
<br>
    </div>



</div>
<div id="collapseVismay" data-spy="scroll" data-target="#list-example"data-offset="0" class="collapse  modal-content" aria-labelledby="headingOne" data-parent="#accordionExample" >
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">VISMAYA GALLERY</center></h1><br></h5>
   <a class=" nav-link  trigger_popup_fricc" href="doc_profile.php" ><span aria-hidden="true">&times;</span></a>
  </div>
  <div class="modal-body  scroll ">
    <div class="sec-column1 ">

          <form action="vismaya-authent.php" method="post"  enctype="multipart/form-data" onsubmit="return validation()">
                  <label class="lab" for=""><b>Add Images:</b></label>
                  <input type="hidden" name="slno">
              <input type="file"  name="image" id="image" placeholder="" class="tbb"   title="">
              <input type="submit" name="table" value="SUBMIT" id="submit" class="b"><hr>
              <?php

            include("connection.php");
              error_reporting(0);
                   $sql = "SELECT * FROM vismaya_gal";
                   $result = $conn-> query($sql);
             if($result -> num_rows >0){


               while($row = $result-> fetch_assoc()) {
                 echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                     alt="Image" style="width:100%; height:100px;border-radius: 5%;"> ';
                    echo"<br><hr><button> <a href='delete-vis.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></button></div>";

               }

               echo "</table>";
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
    <br>
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

$(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
</script>

</body>
</html>
