<?php
if (isset($_POST['submit'])) {

    $email=$_POST['email'];
    $password=$_POST['password'];
   if (empty($email)||empty($password)) {
     $val="Invalid Email or Password";
     header('location:index.php?val='.$val);

     $con=mysqli_connect("localhost","root","","test");
     $qry="INSERT into registration(email,password)values('$email','$password')";

     $myqry=mysqli_query($con,$qry);
     if ($myqry) {
       echo "Data has been added";
     }
     else {
       echo "unable to add data";
     }
   }
}

 ?>
