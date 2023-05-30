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
   $pgname=$_POST['pgname'];
   $pgphno=$_POST['pgphno'];



 ?>
    <div class="conta4">
      <h3 class="sign-h1">User Registration:</h3>
      <form class="sign-form" action="userinfo.php" method="post" >

        <label class="sign-label" for="name">Name</label>
        <input class="sign-inp"  type="text" id="name" name="name" required>

        <label class="sign-label" for="email">Email</label>
        <input class="sign-inp"  type="email" id="email" name="email" required>


        <label class="sign-label" >Phone Number</label>

        <input class="sign-inp-phno" type="tel" name="phno" pattern="[0-9]{10}" required>

        <label class="sign-label" for="password">Password</label>
            <input class="sign-inp" type="password" id="password" name="pswrd" required>

        <input type="hidden" name="pgname" value="<?php echo $pgname; ?>">
        <input type="hidden" name="pgphno" value="<?php echo $pgphno; ?>">

        <button class="sign-button" type="submit" name="submit">Submit</button>
      </form>
</div>
<?php
}
 ?>
  </body>
</html>
