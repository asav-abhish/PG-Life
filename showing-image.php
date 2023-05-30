<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pg";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {


  $image_name=$_FILES['image']['name'];
  $temp=$_FILES['image']['tmp_name'];
  move_uploaded_file($temp, "img/$image_name");
  $query=mysqli_query($conn,"INSERT INTO allpg(Imagename)values('$image_name')");
  if($query){
    echo "done";
  }else {
    echo "not done";
  }
}
?>
<form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">

  <input type="file" name="image" value="">
  <input type="submit" name="submit" value="submit">
</form>

  <!--  <a href="data.php">Data</a> -->
  </body>
</html>