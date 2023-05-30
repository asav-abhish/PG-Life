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

     ?>
  <div class="container1">

<h1 class="sign-h1" style="  font-family: Arial, sans-serif;">Add New Admin</h1>
          <form class="sign-form" action="new-admin-code.php" method="post" >

            <label class="sign-label" for="name">Name</label>
            <input class="sign-inp" type="text" id="name" name="name" required>

            <label class="sign-label" for="email">Email</label>
            <input class="sign-inp"  type="email" id="email" name="email" required>

            <label class="sign-label" for="password">Password</label>
            <input class="sign-inp" type="password" id="password" name="pswrd" required>

            <button class="sign-button" type="submit" name="submit">Submit</button>

          </form>
        </div>


  </body>
</html>
