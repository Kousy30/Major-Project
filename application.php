<!DOCTYPE html>
<html>
<head>
 <title>Application Form</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="hom.css">




 <style>



    .col1{
        padding: 10px 30px;
        column-gap: 40px;
        width: 50%;
        float: left;

    }

        .row:after {

          display: table;
        }
        .footer{
            text-align: center;
        }

        .start{
          color: black;
          background-color: #A9CCE3;
          opacity: 1;
        }
        .b:hover{background-color: green;
 text-transform: uppercase;}
 .b{
    text-align: center;
    border-radius: 7px;
    padding: 10px 30px;
 border-color: #daad86;
    background-color:#bc986a;
 color:#fbeec1;

 }
 .c{
    text-align: center;
    border-radius: 7px;
    padding: 10px 30px;
 border-color: #daad86;
    background-color:#bc986a;
 color:#fbeec1;

 }
 .c:hover{background-color: green;
 text-transform: uppercase;
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
 .topnav, .coll{
     padding-top:2%;
     font-size: 150%;
     color: #fff;
     height: 2cm;
     font-family: timesnewroman;
     margin-bottom: -40px;
 }
 .coll, .topnav{

   background: #bc986a;
 }
 </style>
 </head>
 <body style="background:#fbeec1">

   <div class="topnav">
     <img src="https://drive.google.com/thumbnail?id=1uNGHm8OlHAaXhBMyx23jEEaORGh2EwSw" align="left"  id = "left-logo">
     <img src="https://drive.google.com/thumbnail?id=1tIMjb3NX-ykojjPorf1v2EwcagC5qSAr" align="right"  id = "right-logo" >
     <h6  class = "stt"style="float : right; "><b>ST.JOSEPH'S COLLEGE (AUTONOMOUS)</b></font></h6><br>
     <h6 class = "stt"style="float : right; "><b>National Service Scheme UNIT II</b></font></h6>
  </div>
      <div class="coll" >

      <ul class="nav nav-pills nav " style="padding-left:30px;">

        <li class="breadcrumb-item active" aria-current="page" style="color:#fbeec1">Application Form</li>
        <li class="breadcrumb-item"><a href="2.php" style="color:#2e151b">Student Support</a></li>
         <li class="breadcrumb-item"><a href="1.home.php" style="color:#2e151b">Home</a></li>


 </ul>
  </div>

<br><br><br>
 <h1 style="font-family: Algerian; color:#8d8741; text-shadow:2px 3px 5px #bc986a;margin-bottom:18px;"><b><center>APPLICATION FORM</center></b></h1>
    <form action="insert.php" method="post"  enctype="multipart/form-data"  onsubmit="return validation()" >
        <div class="container">
            <div class="row">
                    <div class="col1">
                        <table>

                            <tr>
                                <td>
                                    <b>Name of the Student:</b>

                                </td>

                            <td>
                                <input pattern="[a-zA-Z ]+"name="name" placeholder="" title="Only Alphabets are allowed" type="text" autocomplete="off" required ><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Registration number:</b>

                            </td>

                           <td>
                             <input type="text" name="pass" id="reg" placeholder="" autocomplete="off" required><br><br>

                           </td>
                       </tr>
                       <tr>
                           <td>
                               <b>Password:</b>

                           </td>

                          <td>
                            <input type="text" name="regno" id="reg"placeholder="" autocomplete="off" required><br><br>

                          </td>
                      </tr>

                       <tr>
                        <td>
                            <b>Name of the course:</b>
                        </td>

                          <td>
                            <input type="text" pattern="[a-zA-Z ]+" name="course" placeholder="" required title="name allowed only text" ><br><br>
                          </td>
                        </tr>
                        <tr>
                            <td><p><b>Select gender:<b></b></p></td>
                        <td>
                            <b> <input type="radio" name="gender" required>Male
                                <input type="radio" name="gender" required>Female
                                <input type="radio" name="gender" required>Other</b><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <b> Father's name:</b>
                        </td>

                    <td>
                        <input pattern="[a-zA-Z ]+" title="Only alphabets are allowed"  name="father" type="text" autocomplete="off"  required><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                       <b> Mother's name:</b>
                    </td>

                <td>
                    <input pattern="[a-zA-Z ]+" title="Only alphabets are allowed"name="mother" type="text" autocomplete="off" required><br><br>
                </td>
                </tr>
                <tr>
                    <td>
                       <b> Date of birth:</b>
                    </td>

                <td>
                    <input type="date" name="dob" autocomplete="off" required><br><br>
                </td>
                </tr>


                <tr>
                    <td>
                        <b>Height(cms):</b>
                    </td>

                <td>
                    <input type="number" name="height" placeholder="" autocomplete="off"  required ><br><br>
                </td>
                </tr>
                <tr>
                    <td>
                        <b>Weight(kgs):</b>
                    </td>

                <td>
                    <input type="number" name="weight" placeholder="" autocomplete="off" required ><br><br>
                </td>
                </tr>

                        </table>
                    </div>
                <div class="col1">
                    <table>
                      <tr>
                          <td>
                          <input pattern=""name="slno" placeholder="" title="Only Alphabets are allowed" type="hidden" autocomplete="off" required ><br><br>
                      </td>
                  </tr>

                        <tr>
                            <td>
                               <b> Blood group:</b>
                            </td>

                        <td>
                            <input type="text" name="blood" pattern="[A-Za-z-+]+" title="Only alphabets,+ and - are allowed" placeholder="" autocomplete="off" required><br><br>
                        </td>
                        </tr>

                        <tr>
                            <td>
                               <b> Address:</b>
                            </td>

                        <td>
                            <input type="text" name="address" placeholder="" autocomplete="off" required><br><br>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Telephone number:</b>
                            </td>

                        <td>
                            <input type="number" name="telephone" placeholder=""  required title="this allowed only  numbers"><br><br>

                        </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Email:</b>
                            </td>

                        <td>
            <input type="email"name="email" placeholder="" required ><br><br>
                            <span id="mail" class="text"></span>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mobile number:</b>
                                <select >
                                    <option value="">+91</option>
                                    <option value="">+976</option>
                                    <option value="">+989</option>
                                </select>
                            </td>

                        <td>
                            <input id="id2"name="phone" type="number" placeholder="" required><br><br>
                      </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Health status <br>(illness if any):</b>

                            </td>

                        <td>
                            <input type="text" name="health" palceholder="" autocomplete="off" required><br><br>
                        </td>
                        </tr>
                        <tr>
                            <td>
                               <b>Extracurricular talents(specify):</b>

                            </td>

                        <td>
                            <input type="text" name="talent" placeholder="" required><br><br>

                        </td>
                        </tr>
                        <tr>
                            <td>
                               <b> Previous experience in <br>NSS\NCC\ANY (specify):</b>
                            </td>

                        <td>
                            <input type="text" name="experience" placeholder="" required><br><br>

                        </td>
                        </tr>
                        <tr>
                          <td><b>Upload Profile: </b></td>
                          <td>

                              <input type="file"  name="image" id="image" placeholder="" class="tbb"  required title="" ><br><br>
                            </td>
                          </tr>

                        </table>

                </div>
            </div>
        </div>

        <div class= "pri">
        <div align="center">
           <input type="submit" name="login" value="submit" id="submit" class="b" >
       </div>

         <marquee style="font-family:timesnewroman;color:red;background:linear-gradient(to bottom ,#daad86,#bc986a);height:1cm;font-size:20px;margin-top:5%;margin-bottom:-9px;">Kindly fill all the details properly </marquee>
</div>
    </form>

 </body>

 </html>
