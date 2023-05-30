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
     ?>

       <div class="conta4">
         <h1 class="sign-h1">USER LOG IN</h1>
         <form class="sign-form" action="user-login-dash.php" method="post" >

           <label class="sign-label" for="email">Email</label>
           <input class="sign-inp"  type="email" id="email" name="emaill" required>

           <label class="sign-label" for="password">Password</label>
           <input class="sign-inp" type="password" id="password" name="pswrd" required>

           <button class="sign-button" type="submit" name="ok">Log in</button>
         </form>
       </div>


<?php
    if($_GET){
        echo '<p  style="font-size:30px;text-align:center;color:#8c8c8c;">'.$_GET['val'].'</p>';
    }
?>


<?php
 include("footer.php");
 ?>


  </body>
</html>
