
<?php session_start();
include('connection.php');
$sql = "SELECT * FROM application WHERE regno = '" . $_SESSION['uname'] . "'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

 ?>
<html>
<head>
 <title>User Profile</title>
 <link rel="stylesheet" type="text/css" href="profile.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
       body{
         background-color: #ffffff;
        background-attachment: fixed;
         background-size: cover;
       }
       /* Add a black background color to the top navigation */
.topnav {
  background-color:#124456;
  overflow: hidden;
}


.text{
  float: right;
  font-style: calibri;
  padding-top: 12px;
  padding: 2%;
  color: white;
  font-size: 20px;
}

.container{
  float:left;
height: auto;
width : 100%;
}

.img{
vertical-align: middle;
width: 100%;
margin-top: 2%;
height: 8cm;/* Set a small width */
}

/* Fixed sidenav, full height */
.sidenav {
  width: 100%;
  background-color: white;
  overflow-x: hidden;
  color: #555;

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

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
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

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
input[type=text], select, textarea {
width: 99%; /* Full width */
padding: 10px; /* Some padding */
border: 1px solid #ccc; /* Gray border */
border-radius: 4px; /* Rounded borders */
box-sizing: border-box; /* Make sure that padding and width stays in place */
margin-top: 6px; /* Add a top margin */
margin-bottom: 16px; /* Bottom margin */
resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=email]{
 width: 99%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px; /
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical
    }
    input[type=date]{
     width: 99%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px; /
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical
        }

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #124456 !important;
  border-color: #357ebd;

color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #45a049;
}

/* Add a background color and some padding around the form */
.contai {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}
.col-sm-4{
  border: 1px solid #ddd;
    margin: 2%;
    width : 18.8%;
    padding: : -2%;
}
.col-sm-8 {
  border: 1px solid #ddd;
  width : 70%;
  margin: 2%;

}
table, tr{
  width : 100%;
  height : auto;
    border: 1px solid #ddd;
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
tr:nth-child(even){
  background: #fff;
  height: 1.2cm;


}
tr:nth-child(odd){
  background:  #f9f9f9;
    height: 1.2cm;


}
.panel-heading {
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    border: none!important;
  }
  form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.col-m{
  position: relative;
    min-height: 1px;
      margin:  2%;
}
.btn-primary{
  background-color: #124456 !important;
  border-color: #357ebd;

}

@media print{
 body *{
   visibility:visible;
   -webkit-print-color-adjust: exact;
 }
   .print-container, .print-container *{
     visibilty:visible;
   }
   .collapse{
     visibility:visible;
     -webkit-print-color-adjust: exact;
   }
   header *{
     visibility:visible;
   }
 table{
   visibility:visible;
 }
   .click{
     visibility: hidden;
   }
  button{
     visibility: hidden;
  }
}
   </style>
</head>
<body>
<div class="topnav">
  <div class= " text heed" style="float : left; "><label> Welcome</label><?php
  echo " " . $row['name'] . " ";?>
</div>
  <div class="text"  style="float : right"> National Service Scheme Unit-II<br> St. Joseph's College(Autonomous) Bengaluru</div>

  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <?php
      include('connection.php');
      $sql = "SELECT * FROM application WHERE regno = '" . $_SESSION['uname'] . "'";
      $result = mysqli_query($conn,$sql);

       if($result -> num_rows >0){
             while($row = $result-> fetch_assoc()) {


               echo '<div class="img">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                   alt="Image" style="width:100%; height : 100%"> ';
                   echo"</div>";



             }

           }
           else{
             echo "NO Image";
           }
           $conn-> close();
             ?>

    <div class="sidenav">
      <a class="active" href="student-profile.php"><i class="fa fa-fw fa-home"></i>Home</a>


      <button class="dropdown-btn">  <i class="fa fa-fw fa-user"></i> Profile
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <div class="accordion " id="accordionExample" >
          <div class="card">
            <div class="card-header" id="headingOne" >
              <h2 class="mb-0">
                <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
             My Profile
                </a>
              </h2>
            </div>
          </div>

          <div class="card ">
            <div class="card-header" id="headingTwo" >
              <h2 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
              Change Password
            </a>
              </h2>
            </div>
          </div>
      </div>
    </div>
    

            <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
         <i class="fa fa-fw fa-envelope"></i>Queries
            </a>


      <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
  </div>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>

    <div class="col-sm-8">


      <div id="collapseThree" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <h5 style="padding: 10px 15px;color: #666!important;"><b>MY PROFILE</b></h5>

<table>
          <?php
          include('connection.php');
          $sql = "SELECT * FROM application WHERE regno = '" . $_SESSION['uname'] . "'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result);

          echo'<tr class="top">';
          echo'<th class="left">';
          echo " 1. Name: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['name'] . "";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 2. Register Number: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "".$_SESSION['uname'];
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 3. Course: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['course'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 4. Father's Name: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['father'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 5. Mother's Name: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['mother'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 5.Date of Birth: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['dob'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 6.Gender: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['gender'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 7. Height: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['height'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 8.Weight: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['weight'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 9.Email-Id: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['email'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 10.Phone Number: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo "" . $row['phone'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 11. Address: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['address'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 12. Blood-Group: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['blood'] . " <br> ";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 13. health status: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['health'] . " <br>" ;
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 14. Talents: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['talent'] . " <br>";
          echo'</th>';
          echo'</tr><tr class="top">';
          echo'<th class="left">';
          echo "<label> 15. NSS/NCC Experience: </label>";
          echo'</th>';
          echo'<th class="right">';
          echo " " . $row['experience'] . " <br><br> ";
          echo'</th>';
          echo'</tr>';

        ?>
      </table><br>
      <button id="print" class="click c btn btn-primary" onclick="window.print()"><center>PRINT</center></button><br>
       </div>
         <div id="collapseFour" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
           <form name="frmChange" method="post" action="changepass.php" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message">
  <?php if(isset($message)) { echo $message; } ?></div>
  <div class="panel-heading no-padding-left-xs">CHANGE PASSWORD</div>
  <div>
    <div class="panel-body min-h-82vh">
<div class="row">
<form id="change-password-form">
<div class="col-md form-div">
<div class="col-m">Old password</div>
<div class="col-md">
<input type="password" class="form-control" name="oldpassword">
</div>
<div class="col-m">New password</div>
<div class="col-md">
<input type="password" name="password" class="form-control">
</div>
<div class="col-m">Re-enter password</div>
<div class="col-md">
<input type="password" class="form-control" name="rePassword">
</div>
<div class="col-m"></div>
<div class="col-md">
<input name="upload" type="submit" class="btn btn-primary pull-right-xs" id="change-password-btn" value=" Change Password ">
</div>
</div>
</form>
</div>
</div>

</div>
</div>
</form>
         </div>

      <div id="collapseTwo" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="contain">
            <form action="query.php" method="POST">
              <h5>QUERIES / SUGGESTIONS</h5>

              <label for="name">Name</label>
              <input pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" type="text" id="name" name="name" placeholder="Your name.." required >

              <label for="Reg num">Register number</label>
              <input type="text" id="reg" name="regnum" placeholder="Your Register number.." required >

              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Your email.." required >

              <label for="Leave type">Subject</label>
              <input type="text" name="title" id="title" name="leave" placeholder=".." required >

              <label for="subject">Description</label>
              <textarea id="subject" name="descrip" placeholder="Write something.." style="height:200px" required></textarea>


              <input type="hidden" name="date" id="date" placeholder="..">

<br>
              <input type="submit" class=""name="query" value="Submit">

            </form>
          </div>

      </div>


      </div>

    </div>
      <br>
   </div>


     </table>

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
