


    <?php
    if (isset($_POST['submit'])) {
      $pg=mb_strtoupper( $_POST['pg-name']);
       $ph=$_POST['ph-no'];

       $con=mysqli_connect("localhost","root","","pg");
      $qry="DELETE from Allpg WHERE Name='$pg' AND Phno='$ph' ";
       $conqry=mysqli_query($con,$qry);
       if ($conqry) {
         echo "<p style='font-size:30px;padding-left:450px;'>Pg Have been Removed..!</p>";
       }else {
         echo "not done";
       }
   }


  ?>
