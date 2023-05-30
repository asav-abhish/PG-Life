<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
     body{
   
     
     }
    </style>
  </head>

  <body>
    <?php



     $con=mysqli_connect("localhost","root","","pg");
     $qry="SELECT * From allpg";
     $result=mysqli_query($con,$qry);
     if (mysqli_num_rows($result)>0){
       ?>
       <div style="width:auto;margin:0px;" class="">

                    <table cellpadding="20" >
                  <tr style="background-color:#88ebf2;"><td> Name </td>  <td> Country </td><td> Phno </td> <td> District </td> <td> State </td> </tr> <br>

          <?php

      while($row = mysqli_fetch_array($result)) {

       ?> <tr style="background-color:">

            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Country']; ?></td>
            <td><?php echo $row['Phno']; ?></td>
            <td><?php echo $row['District']; ?></td>
            <td><?php echo $row['State']; ?></td>

        </tr> <br>  <?php
     }
    ?> </table> <br>  </div> <?php

     }




     ?>
  </body>
</html>
