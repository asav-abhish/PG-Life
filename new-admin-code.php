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
    $name=$_POST['name'];
    $con=mysqli_connect("localhost","root","","pg");
    $qry="INSERT into Admin(Admin_name,Email,Password)values('$name','$email','$pswrd')";

    $myqry=mysqli_query($con,$qry);
    if ($myqry) {
      echo "<p style='font-size:30px;padding-left:450px;'>New Admin Has Been Added </p>";
    }else {
      echo "unsuccessfull";
    }
  }

  ?>

  </body>
</html>
