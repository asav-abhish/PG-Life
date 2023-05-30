<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="header.css">
  </head>
  <body>


      <div class="container1">
        <h1 class="sign-h1">Remove Pg</h1>
        <form class="sign-form" action="remove-pg-code.php" method="post">
          <label class="sign-label" for="name">Name</label>
          <input class="sign-inp" type="text" id="name" name="pg-name" required>


          <label class="sign-label" for="password">Phone number</label>
          <input class="sign-inp" type="number" id="password" name="ph-no" required>

          <button class="sign-button" type="submit" name="submit">Submit</button>
        </form>
      </div>

  </body>
</html>
