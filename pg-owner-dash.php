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

    <?php
    session_start();
    if (isset($_POST["ok"])) {

    $email=$_SESSION["email"]=$_POST["emaill"];
    $pswrd=$_SESSION["pswrd"]=$_POST["pswrd"];
  }else {
    $email=$_SESSION["email"];
      $pswrd=$_SESSION["pswrd"];
  }



    $con = mysqli_connect("localhost","root","","pg");
    $qry="SELECT * From pgowner WHERE Email ='$email' AND Password ='$pswrd'";
    $result=mysqli_query($con,$qry);
    if(mysqli_num_rows($result)>0)
    {
      while($row = mysqli_fetch_array($result)) {

                         $name=$row['Name'];
                  }
                  ?> <div style="margin-left:80px; font-size:20px;">Welcome:   <?php echo $name; ?> </div>   <?php
    $_SESSION["email"]=$email;
    $_SESSION["pswrd"]=$pswrd;

          ?>
  <div class="admincon" >


       <div class="opt1" >





      <form class="" action="" method="post">
        <input type="hidden" name="ca" value="addpg">
        <input class="optok"type="submit" name="adminok" value="Add New Pg   ">
        </form>

      <form class="" action="" method="post">
        <input type="hidden" name="ca" value="removepg">
      <input class="optok" type="submit" name="adminok" value="Remove Pg   ">
       </form>

       <form class="" action="" method="post">
         <input type="hidden" name="ca" value="showuser">
       <input class="optok" type="submit" name="adminok" value="Booked User Info  ">
        </form>






        </div>


        <div class="opt2">

         <?php
              if (isset($_POST['adminok']))
               {
                   $ca=$_POST['ca'];
                  if ($ca=='addpg') {
               include("addpg.php");
                  }
                   elseif ($ca=='removepg') {
                     include("removepg.php");
                   }elseif ($ca=='showuser') {
                     include("show-userinfo.php");
                   }


             }
          else {
            echo "<h2 style='margin-left:150px; color: #828282;'>Welcome to Dashboard</h2>";
          }


         ?>




          </div>


  </div>
  <div class="" style="margin-bottom:450px;">

  </div>


   <?php
   include('footer.php');
 }else {
    $val="Invalid Email or Password";
    header('location:pg-owner-login.php?val='.$val);
 }
   ?>
  </body>
</html>
