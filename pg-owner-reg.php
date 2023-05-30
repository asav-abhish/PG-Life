<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="header.css">
    <style media="screen">
    body {
  background-color: #f5f5f5;


}
    </style>
  </head>
  <body>
    <?php
             include("header.php");
     ?>
  <div class="container2">

<h1 class="sign-h1" style="  font-family: Arial, sans-serif;">New Registration</h1>
          <form class="sign-form" action="" method="post" >

            <label class="sign-label" for="name">Name</label>
            <input class="sign-inp" type="text" id="name" name="name" required>

            <label class="sign-label" for="email">Email</label>
            <input class="sign-inp"  type="email" id="email" name="email" required>

            <label class="sign-label" for="password">Password</label>
            <input class="sign-inp" type="password" id="password" name="pswrd" required>
            <a href="pg-owner-login.php">Already Have Account?</a>

            <button class="sign-button" type="submit" name="submit">Submit</button>

          </form>
       </div>

        <?php

        if (isset($_POST['submit'])) {


        $email=$_POST['email'];
        $pswrd=$_POST['pswrd'];
        $name=$_POST['name'];
        $con=mysqli_connect("localhost","root","","pg");
        $qry="INSERT into pgowner(Name,Email,Password)values('$name','$email','$pswrd')";

        $myqry=mysqli_query($con,$qry);
        if ($myqry) {
          echo "<p style='font-size:30px;padding-left:480px;'>New Owner Registered</p>";
          echo '<form class="" action="pg-owner-dash.php" method="post">';
          ?>
          <input type="hidden" name="emaill" value="<?php echo $email; ?>">
          <input type="hidden" name="pswrd" value="<?php echo $pswrd; ?>">
          <?php
            echo '<input style="margin-left:570px; background-color:black; color:white;margin-bottom:50px;" type="submit" name="ok" value="click here for login" >';
            echo '</form>';
        }else {
          echo "unsuccessfull";
        }
      }

      ?>
<?php include("footer.php"); ?>

  </body>
</html>
