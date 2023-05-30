<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pg";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_POST['submit'])) {
      $ow=mb_strtoupper( $_POST['owner-name']);
      $pg=mb_strtoupper( $_POST['pg-name']);
      $cn=mb_strtoupper($_POST['country']);
      $st=mb_strtoupper($_POST['state']);
      $ds=mb_strtoupper($_POST['district']);
      $pr=$_POST['price'];
      $add=$_POST['address'];
      $ph=$_POST['Phno'];
      $disc=$_POST['disc'];


     if (empty($_POST['btn'])) {
         $btn="";
     }else {
        $btn=array();
       $btn=$_POST['btn'];

     }
    $btnn= implode(',',$btn);



      $image_name=$_FILES['image']['name'];
      $temp=$_FILES['image']['tmp_name'];
      move_uploaded_file($temp,"img/$image_name");
      $query=mysqli_query($conn,"INSERT INTO allpg(Owner_name,Name,Price,Address,Country,District,State,Phno,Discription,Details,Imagename) values('$ow','$pg','$pr','$add','$cn','$ds','$st','$ph','$disc','$btnn','$image_name')");

      if($query){
        echo "done";
      }else {
        echo "not done";
      }
    }
    ?>

  </body>

</html>
