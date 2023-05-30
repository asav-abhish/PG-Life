<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{

    }
  </style>
  <body>
    <?php

     $con=mysqli_connect("localhost","root","","pg");
     $qry="SELECT * From admin";
     $result=mysqli_query($con,$qry);
     if (mysqli_num_rows($result)>0){
       ?>
             <h1>Admin Details</h1>
              <table  cellpadding="20">
         <tr style="background-color:#88ebf2;"><td> Name </td>  <td> Email </td><td> Password</td>  </tr> <br>   <?php

      while($row = mysqli_fetch_array($result)) {

       ?> <tr>

            <td><?php echo $row['Admin_name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Password']; ?></td>

        </tr> <br>  <?php
     }
    ?> </table> <?php

     }




     ?>
  </body>
</html>
