<html>
<head>
 <title>Gallery</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="hom.css">

</head>
<style>
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
.topnav{
    padding-top:2%;
    font-size: 150%;
    color: #fff;
    height: 2.5cm;
    font-family: timesnewroman;
    margin-bottom: -40px;
}
.crumb, .breadcrumb, .topnav{

  background-color: #5d5c61;

}

.sim:hover{
  color:#f3d250;
  text-decoration: none;
}
.row{
  width : 100%;

  float:left;
height: auto;
margin: .5%;
}

.sidenav {
overflow-x: hidden;

  background-color: #5d5c61;
width : 18%;
height : 100%;
border: 1px solid #ddd;
float: left;
}
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
padding:9px;
text-decoration: none;
font-size: 100%;
font-weight: bold;

color: #f3d250;
display: block;
background: none;
width:100%;
border: 1px solid #ddd;
text-align: left;
cursor: pointer;
outline: none;

}
.collapse{

  border: 1px solid #ddd;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {

  background-color: #124456;
  color: white;
  text-decoration: none;
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
.midnav{
margin-top: 0.5%;
  width : 78%;
margin-left: 1%;
  border: 1px solid #124456;
  height: 1%;

}
.test{
  width : 31%;
  height: 9cm;
  box-shadow: 10px 5px 5px #124456;

  margin: 1%;
float : left;
  filter : grayscale(100%);
  transition:  1s;
}
a{
  color: white;
  text-decoration: none;
}
.test:hover{
  filter : grayscale(0);
  transform: scale(1.1);

  text-decoration: none;
}
div.scroll {
     width: 100%;
     height: 15cm;
     overflow: auto;
     text-align: center;

   }

</style>
<body style="background: #c2b9b0">
<!--header-->



<div class="topnav">
  <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
  <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
  <h6  class = "st"style="float : right; "><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></h6><br>
  <h6 class = "st"style="float : right; "><b>National Service Scheme UNIT II</b></font></h6>
</div>
<nav aria-label="breadcrumb" class="crumb">
   <ol class="breadcrumb"  >
  <li class="breadcrumb-item activ" aria-current="page" style="color: #f8e9a1;"> Gallery</li>
  <li class="breadcrumb-item"><a href="2.php" class="sim" >Student Support</a></li>
      <li class="breadcrumb-item"><a href="1.home.php"class="sim">Home</a></li>

  </ol>
 </nav>

<div class="row">

  <div class="sidenav">

    <a href="gallery.php"class=" active" type="button">
     Home
   </a>

    <div class="dropdown-btn">Recent Images
      <i class="fa fa-caret-down"></i>
    </div>
    <div class="dropdown-container">
      <div class="accordion " id="accordionExample" >

              <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#Recentevent" aria-expanded="false" aria-controls="collapseOne">
        Event Images
              </a>


              <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Recentcamp" aria-expanded="false" aria-controls="collapseTwo">
          Camp Images
          </a>
          <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Recentvismaya" aria-expanded="false" aria-controls="collapseTwo">
      Vismaya Images
      </a>

    </div>
  </div>
  <a class=" active" type="button" data-toggle="collapse" data-target="#Eventgal" aria-expanded="false" aria-controls="collapseOne">
  Event Gallery
  </a>
  <a class=" active" type="button" data-toggle="collapse" data-target="#Campgal" aria-expanded="false" aria-controls="collapseOne">
   Camp Gallery
  </a>

  <a class=" active" type="button" data-toggle="collapse" data-target="#Vismayagal" aria-expanded="false" aria-controls="collapseOne">
   Vismaya Gallery
  </a>
  <a class=" active" type="button" data-toggle="collapse" data-target="#Youtube" aria-expanded="false" aria-controls="collapseOne">
   You Tube Videos
  </a>
  </div>
  <div class="midnav">
    <h1 style="color:#314455;background-color: #fff; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>NSS-UNIT II  GALLERY</b></center></h1>


      <div id="Recentevent" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">


        <div class="modal-body  scroll ">
          <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Recent Event Images</b></center></h3>

          <div class="sec-column1">

                    <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM event_gal";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%;height : 100%;"> ';
                           echo" </div>";
                      }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>

        </div>

        </div>

</div>
      <div id="Recentcamp" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

        <div class="modal-body  scroll ">
          <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Recent Camp Images</b></center></h3>

          <div class="sec-column1">
              <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM camp_gal";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%;height : 100%;"> ';
                           echo" </div>";
                        }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>

        </div>

        </div>
      </div>
      <div id="Recentvismaya" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">

        <div class="modal-body  scroll ">
          <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Recent Vismaya Images</b></center></h3>

          <div class="sec-column1">
            <?php

                  include("connection.php");
                    error_reporting(0);
                         $sql = "SELECT * FROM vismaya_gal";
                         $result = $conn-> query($sql);
                   if($result -> num_rows >0){


                     while($row = $result-> fetch_assoc()) {

                       echo '<div class="test">'.'<img src="data:image;base64,'.base64_encode($row['image']).'"
                           alt="Image" style="width:100%;height : 100%;"> ';
                           echo" </div>";
                        }


                   }
                   else{
                     echo "No Images in Gallery";
                   }
                       $conn-> close();
                         ?>

        </div>
        </div>
      </div>

      <div id="Eventgal"class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="modal-body  scroll ">
          <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Event Images</b></center></h3>

          <a href="img37.jpg"><img src="img37.jpg" class="test"></a>
          <a href="img38.jpg"><img src="img38.jpg"class="test"></a>
          <a href="img39.jpg"><img src="img39.jpg"class="test"></a>
          <a href="img40.jpg"><img src="img40.jpg" class="test"></a>
          <a href="img41.jpg"><img src="img41.jpg" class="test"></a>

          <a href="img43.jpg"><img src="img43.jpg" class="test"></a>
          <a href="img44.jpg"><img src="img44.jpg" class="test"></a>
          <a href="img45.jpg"><img src="img45.jpg" class="test"></a>
          <a href="img46.jpg"><img src="img46.jpg"class="test"></a>

      </div>
      </div>

      <div id="Campgal"class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="modal-body  scroll ">
          <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Camp Images</b></center></h3>

          <a href="img8.jpg"><img src="img8.jpg"class="test"></a>
          <a href="img9.jpg"><img src="img9.jpg"class="test"></a>
          <a href="img10.jpg"><img src="img10.jpg"class="test"></a>
          <a href="img11.jpg"><img src="img11.jpg" class="test"></a>
          <a href="img12.jpg"><img src="img12.jpg"class="test"></a>
          <a href="img13.jpg"><img src="img13.jpg"class="test"></a>
          <a href="img14.jpg"><img src="img14.jpg" class="test"></a>
          <a href="img15.jpg"><img src="img15.jpg" class="test"></a>
          <a href="img16.jpg"><img src="img16.jpg" class="test"></a>
          <a href="img17.jpg"><img src="img17.jpg" class="test"></a>
          <a href="img18.jpg"><img src="img18.jpg"class="test"></a>
          <a href="img19.jpg"><img src="img19.jpg"class="test"></a>
          <a href="img20.jpg"><img src="img20.jpg" class="test"></a>
          <a href="img21.jpg"><img src="img21.jpg" class="test"></a>
          <a href="img22.jpg"><img src="img22.jpg" class="test"></a>
          <a href="img33.jpg"><img src="img33.jpg" class="test"></a>
          <a href="img24.jpg"><img src="img24.jpg" class="test"></a>
          <a href="img25.jpg"><img src="img25.jpg" class="test"></a>
          <a href="img26.jpg"><img src="img26.jpg"class="test"></a>
          <a href="img27.jpg"><img src="img27.jpg"class="test"></a>
          <a href="img28.jpg"><img src="img28.jpg" class="test"></a>
          <a href="img29.jpg"><img src="img29.jpg" class="test"></a>
          <a href="img30.jpg"><img src="img30.jpg" class="test"></a>
          <a href="img31.jpg"><img src="img31.jpg" class="test"></a>
          <a href="img32.jpg"><img src="img32.jpg" class="test"></a>
          <a href="img33.jpg"><img src="img33.jpg" class="test"></a>
          <a href="img34.jpg"><img src="img34.jpg" class="test"></a>
          <a href="img35.jpg"><img src="img35.jpg" class="test"></a>
          <a href="img36.jpg"><img src="img36.jpg" class="test"></a>

      </div>
    </div>

    <div id="Vismayagal"class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="modal-body  scroll ">
        <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Vismaya Images</b></center></h3>

        <a href="img47.jpg"><img src="img47.jpg" class="test"></a>
        <a href="img48.jpg"><img src="img48.jpg"class="test"></a>
        <a href="img49.jpg"><img src="img49.jpg"class="test"></a>
        <a href="img50.jpg"><img src="img50.jpg" class="test"></a>
        <a href="img51.jpg"><img src="img51.jpg" class="test"></a>

        <a href="img53.jpg"><img src="img53.jpg" class="test"></a>
        <a href="img54.jpg"><img src="img54.jpg" class="test"></a>
        <a href="img55.jpg"><img src="img55.jpg" class="test"></a>
        <a href="img56.jpg"><img src="img56.jpg"class="test"></a>

    </div>
    </div>

    <div id="Youtube"class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="modal-body  scroll ">
        <h3 style="color:#314455; font-family:algerian;text-shadow: 3px 4px 4px #e4c580 ;"><center><b>Youtube Videos</b></center></h3>

        <iframe class="test"style="width : 48%" src="https://www.youtube.com/embed/wmg1DvhmnM4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="test"style="width : 48%" src="https://www.youtube.com/embed/_CovZCBoo_Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="test" style="width : 48%"src="https://www.youtube.com/embed/Vj30qRNMqZc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="test" style="width : 48%"src="https://www.youtube.com/embed/birsh8HTg1w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


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
