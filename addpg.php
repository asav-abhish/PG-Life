<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="header.css">
  </head>
  <body>
    <div class="">





      <div class="container1">
        <h1 class="sign-h1">Add Pg</h1>
         <form class="sign-form" action="addpg-code.php" method="post" enctype="multipart/form-data">

           <label class="sign-label" > Owner's Name</label>
           <input class="sign-inp" type="text" id="name" name="owner-name" required>

          <label class="sign-label" >Pg's Name</label>
          <input class="sign-inp" type="text" id="name" name="pg-name" required>

          <label class="sign-label">Country</label>
          <input class="sign-inp"  type="text" id="email" name="country" required>

          <label class="sign-label" >State</label>
          <input class="sign-inp" type="text" id="password" name="state" required>

          <label class="sign-label">District</label>
          <input class="sign-inp" type="text" name="district" required>

          <label class="sign-label" >Phone Number</label>
          <input class="sign-inp-phno" type="tel" name="Phno" pattern="[0-9]{10}" required>

          <label class="sign-label">Price per Month</label>
          <input class="sign-inp" type="text" name="price" required>

          <label class="sign-label">Address</label>
          <input class="sign-inp" type="text" name="address" required>


      <div class="">
             <h5>Building Detals</h5>
           <input class="" type="checkbox" name="btn[]" value="1"><label for="powerbackup"> powerbackup</label> <br>
           <input class="" type="checkbox" name="btn[]" value="2"><label for="lift">Lift</label>
             <h5>Common Area</h5>
           <input class="" type="checkbox" name="btn[]" value="3"><label for="wifi">Wifi</label> <br>
           <input class="" type="checkbox" name="btn[]" value="4"><label for="tv">Tv</label><br>
           <input class="" type="checkbox" name="btn[]" value="5"><label for="dining">Dining</label> <br>
           <input class="" type="checkbox" name="btn[]" value="6"><label for="washingmachine">Washing Machine</label>
             <h5>Bedroom</h5>
           <input class="" type="checkbox" name="btn[]" value="7"><label for="bed">Bed With Matress</label><br>
           <input class="" type="checkbox" name="btn[]" value="8"><label for="airconditioner">Air Conditioner</label>
           <h5>Washroom</h5>
           <input class="" type="checkbox" name="btn[]" value="9"><label for="geyser">Geyser</label>
            <h4>Discription:</h4>
           <h5>About The Property....</h5>
          <textarea name="disc" rows="8" cols="40"></textarea>
              <h5>Upload image:</h5>
                  <input type="file" name="image" />

      </div>

          <button class="sign-button" type="submit" name="submit">Submit</button>
        </form>
      </div>


    </div>
  </body>
</html>
