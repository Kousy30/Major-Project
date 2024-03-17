<!DOCTYPE html>
<html>
<head>
 <title>commitee Update</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="hom.css">
   <link rel="stylesheet" href="table.css">




 <style>
   @media print{
    body *{
      visibility:visible;
      -webkit-print-color-adjust: exact;
    }
      .print-container, .print-container *{
        visibilty:hidden;
      }
      .container{
        visibility:visible;
        -webkit-print-color-adjust: exact;
      }
      header *{
        visibility:visible;
      }
      nav *{
        visibility: hidden;
      }
     .pri *{
        visibility: hidden;
     }

   }

 table, th, td{
   border: 1px solid #B2BEB5;
   background-color: ;
   color:black;
   width: 20%;
   margin-left: 2%;
 }
 td{
   width: 5%;
   }

      .b:hover{background-color:lightgreen;
 text-transform: uppercase;
 border: none;
 }

 .tbb{
 margin-top: 5px;
 }

 .one{
      align-content: center;
     margin-left: 5%;
     margin-right: 60%;
     padding-left: 5%;
     padding-right: 2%;
     padding-top: 2%;
     padding-bottom: 2%;
     margin-bottom: 2%;
     background-color:#B2BEB5;
     border: none;
  }
  .size{
    width:50px;
  }

.two{
      float: left;
      width: 30%;
      padding: 20px;
    }
    .man:after {
      content: "";
      display: table;
      clear: both;
    }


 </style>
 </head>
 <body>


    <div style="font-family:castellar;color:black;">
    <h1><center>committee Updates</center></h1><br></div>
   <div class="man">
       <div class="one">
          <form action="comm-insert.php" method="post" enctype="multipart/form-data"  onsubmit="return validation()" >
    <table>
      <tr>
        <td>
            <b>Sl no</b>
        </td>

    <td>
        <input type="number"class="tbb"  name="slno" placeholder="" autocomplete="off"class="tbb" required ><br><br>
    </td>
  </tr>
  <tr>
          <td><br>
              <b> Enter Name </b>
          </td>

      <td><br>
          <input type="text"pattern="[a-zA-Z ]+" class="tbb"  name="name" placeholder="" autocomplete="off"class="tbb" required ><br><br>
      </td>
    </tr>
      <tr>
        <td><br>
           <b>Enter Post</b>
        </td>

    <td><br>
        <input type="text" pattern="[a-zA-z]+" class="tbb"  name="post" autocomplete="off" required><br><br>
    </td>
  </tr>
  <tr>
      <td><br>
          <b>Upload image</b>
      </td>
      <td><br>
        <input type="file"  name="image" id="image" placeholder="" class="tbb"  required title="" ><br><br>
      </td>
    </tr>
    <tr>
      <td><br>
        <input type="submit" name="table" value="ADD" id="submit" class="b" ></td>
</tr>

</table>
   </form>
 </div>
   <div class="two">
   <table>
     <tr>
       <th class="size"><center>Slno</center></th>
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

                <td><a href='delete-comm.php?slno=$row[slno]' onclick='checkdelete()'>DELETE</a></td>


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
</div>


      <script>
      function checkdelete()
      {
        return confirm('Are you sure you want to delete this data?');
      }

      </script>

 </body>

 </html>
