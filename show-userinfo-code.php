<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
include("header.php");
  $name= $_POST['name'];

     $con=mysqli_connect("localhost","root","","pg");
     $qry="SELECT * From userinfo WHERE Pg_name='$name'";
     $result=mysqli_query($con,$qry);
     if (mysqli_num_rows($result)>0){
       ?>

         <h3 style="text-align:center;" >Userinfo</h3>
       <div style="width:auto; margin-left:250px;" class="">

                    <table cellpadding="20" style="text-align:center;" >
                  <tr style="background-color:#88ebf2;"><td> Name </td>  <td> Email </td><td> Phno </td> <td> Booking_date </td> <td> From_date</td><td> To_date</td> </tr> <br>

          <?php

      while($row = mysqli_fetch_array($result)) {

       ?> <tr style="background-color:">

            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Phno']; ?></td>
            <td><?php echo $row['Booking_date']; ?></td>
            <td><?php echo $row['From_date']; ?></td>
            <td><?php echo $row['To_date']; ?></td>

        </tr> <br>  <?php
     }
    ?> </table> <br>  </div> <?php

     }




     ?>


  </body>
</html>
