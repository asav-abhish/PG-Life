<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="header.css">
  <body>
       <?php
        session_start();
        include('header.php');


     if(isset($_POST['submit']))
    {
      $dist=$_POST['dist'];
      $con=mysqli_connect("localhost","root","","pg");
      $qry="SELECT * From allpg WHERE District='$dist'";
      $result=mysqli_query($con,$qry);
      if (mysqli_num_rows($result)>0) {
         ?>
         <div class="result" style="padding-left:;">
         <table align="center">
          <h1 align="center"> Available PG's in <?php echo mb_strtoupper($dist); ?>   </h1>
             <tr style="font-size:30px;">
                <th>Name</th>
                <th>Country</th>
                <th>Phone number</th>
                <th>State</th>
                <th>District</th>
            </tr>




        <?php    for ($i=0; $i <=$row=mysqli_fetch_array($result) ; $i++) { ?>


                  <form class="" action="book-room.php" method="post">
                  <?php    if ($i%2==0){ ?>


                    <tr style="font-size:25px; color:#959595;background-color:#f2f2f2;" >

                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Country']; ?></td>
                    <td><?php echo $row['Phno']; ?></td>
                    <td><?php echo $row['State']; ?></td>
                    <td><?php echo $row['District']; ?></td>
                    <input type="hidden" name="Name" value="<?php echo $row['Name']; ?>">
                    <input type="hidden" name="Phno" value="<?php echo $row['Phno']; ?>">
                    <td> <input type="submit" name="submit" value="OK"> </td>


            <?php   } else { ?>

                      <tr style="font-size:25px;">
                         <td><?php echo $row['Name']; ?></td>
                         <td><?php echo $row['Country']; ?></td>
                         <td><?php echo $row['Phno']; ?></td>
                         <td><?php echo $row['State']; ?></td>
                         <td><?php echo $row['District']; ?></td>
                         <input type="hidden" name="Name" value="<?php echo $row['Name']; ?>">
                         <input type="hidden" name="Phno" value="<?php echo $row['Phno']; ?>">
                         <td> <input type="submit" name="submit" value="OK"> </td>



                    <?php   } ?>

                </form>
                </tr>

      <?php      } ?>
        </table>

           </div>
<?php
}else {
     $val="Search Doesn't Matched";
     header("location:index.html?val=$val");
}
    } ?>




  </body>
</html>
