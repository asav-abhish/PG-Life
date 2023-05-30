<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

       <?php
              include("header.php");

           if (isset($_POST['submit'])) {
               $email=$_POST['email'];
               $pswrd=$_POST['pswrd'];

       $con=mysqli_connect("localhost","root","","pg");
      $qry="DELETE from Admin WHERE Email='$email' AND Password='$pswrd' ";
       $conqry=mysqli_query($con,$qry);
       if ($conqry) {
         echo "<p style='font-size:30px;padding-left:450px;'>Admin Has Been Removed Successfully</p>";
       }else {
         echo "not done";
       }
    }


        ?>
  </body>
</html>
