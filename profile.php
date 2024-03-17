<html>
<head>
 <title>Application Details</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<style>
	#left-logo {
	  width : 8.8%;
	  height: 3.05cm;

	}
	#right-logo{
	  width : 9.0%;
	  height: 3.05cm;
	}
	table, th, td {
	  border: 1px solid black;

	}
	table{
		margin-left: 4%;
		margin-top: 4%;
	}
	table.scroll {
			 width: 90%;
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
     .modal-footer{
       margin-right: 45%;
     }
     .coz{
       width : 10%;
       height : 1cm;
       background: blue;
       color : white;
       text-decoration: none
     }
	</style>
</head>
<body>
	<div class="header" id="myheader">
	  <header class = "start "  id= "new ">
	     <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
	     <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
	     <h2  class = "text"><center><font face="Algerian"><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></center></h2>
	     <h5 class = "text" ><center><font face="Algerian">36, Langford Rd, Bengaluru-27</font><br></center></h5>
	     <h2 class = "text"><center><font face="Algerian" ><b>National Service Scheme UNIT II</b></font></center></h2>
	  </header>
	</div>
	<table class="scroll">
		<tr>
			<th>Register Number</th>
			<th> Name</th>
			<th>Course</th>
			<th>Gender</th>
			<th>Father</th>
			<th>Mother</th>
			<th>Date of Birth</th>
			<th>Height</th>
			<th>Weight</th>
			<th>Blood Group</th>
			<th>Address</th>
			<th>Telephone</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Talent</th>
			<th>Experience</th>

		</tr>
	<?php

include("connection.php");
	error_reporting(0);
       $sql = "SELECT * FROM application";
			 $result = $conn-> query($sql);
 if($result -> num_rows >0){


       while($row = $result-> fetch_assoc()) {

         echo "<tr><td>" . $row['regno'] ."</td><td>". $row['name'] . "</td><td>" . $row['course'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['father'] . "</td><td>" . $row['mother'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['height'] . "</td><td>" . $row['weight'] . "</td><td>" . $row['blood'] . "</td><td>" . $row['address'] . "</td><td>" . $row['telephone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['health'] . "</td><td>" . $row['talent'] . "</td><td>" . $row['experience'] . "</td><tr>";
       }

       echo "</table>";
		 }
		 else{
			 echo "0 result";
		 }
		 $conn-> close();
       ?>
</table>
<div class="modal-footer">
   <button id="print" class="click c coz" onclick="window.print()">Export</button>
    <button id="back"class="coz" ><a href="doc_profile.php" class="coz">Back</a></button>
</div>

       </body>
       </html>
