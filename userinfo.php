<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="header.css">

  </head>
  <body>


    <?php
    include("header.php");

    if (isset($_POST['submit'])) {
     $pgname=$_POST['pgname'];
     $pgphno=$_POST['pgphno'];
     $name=$_POST['name'];
      $email=$_POST['email'];
      $ph=$_POST['phno'];
       $pswrd=$_POST['pswrd'];
      $conn = mysqli_connect("localhost","root","","pg");

      $qry= "INSERT INTO registered_users(Name,Email,Phno,Password) values('$name','$email','$ph','$pswrd')";

      mysqli_query($conn,$qry);

}
     ?>

       <div class="conta4">
         <h3 class="sign-h1">For Booking PG</h3>
         <h5>Pg name:   <?php  echo $pgname; ?></h5>
         <form class="sign-form" action="userinfo-code.php" method="post" >

           <label class="sign-label" for="fromdate">Check in Date</label>
           <input class="sign-inp"  type="date" id="fromdate" name="fromdate" required>

           <label class="sign-label" for="todate">Check out Date</label>
           <input class="sign-inp"  type="date" id="todate" name="todate" required>
           <br>
          <h4><input type="checkbox" name="tick" value="tick">&nbsp; Only Cash Accepted</h4>
             <br>
              <input type="hidden" name="pgname" value="<?php echo $pgname; ?>">
              <input type="hidden" name="pgphno" value="<?php echo $pgphno; ?>">
              <input type="hidden" name="name" value="<?php   echo $name; ?>">

              <input type="hidden" name="email" value="<?php echo $email; ?>">
              <input type="hidden" name="phno" value="<?php echo $ph; ?>">

           <button class="sign-button" type="submit" name="submit">Submit</button>
         </form>
       </div>





<?php

 include("footer.php");
 ?>


  </body>
</html>
