<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best PG's in Mumbai | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/dashboard.css" rel="stylesheet" />

    <link rel="stylesheet" href="header.css">
  </head>

  <body>
       <?php
        session_start();
        include('header.php');


     if(isset($_GET['codes']))
    {
       $dist=$_GET['codes'];
       

     



      $con=mysqli_connect("localhost","root","","pg");
      $qry="SELECT * From allpg WHERE District='$dist'";
      $result=mysqli_query($con,$qry);
      if (mysqli_num_rows($result)>0) {
         ?>
         <div class="result" style="width:800px; margin: auto;">

          <p align="center" style="font-size:30px;"> Available PG's in <?php echo mb_strtoupper($dist); ?>   </>


        <?php    for ($i=0; $i <=$row=mysqli_fetch_array($result) ; $i++) { ?>


                  <form class="" action="book-room.php" method="post">
                    <input type="hidden" name="Name" value="<?php echo $row['Name']; ?>">
                    <input type="hidden" name="Phno" value="<?php echo $row['Phno']; ?>">
                      

                    <div class="property-card row">
                        <div class="image-container col-md-4">
                            <img src="img/<?php echo $row['Imagename'] ?>" />
                        </div>
                        <div class="content-container col-md-8">
                        <!--  <div class="row no-gutters justify-content-between">
                              <div class="star-container" title="4.5">
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                              </div>
                              <div class="interested-container">
                                  <i class="far fa-heart"></i>
                                  <div class="interested-text">3 interested</div>
                              </div>
                          </div>
                        -->
                            <div class="detail-container">
                                <div class="property-nam"><h3><?php echo $row['Name']; ?></h3> </div>
                                <div class="property-address"><?php echo $row['Address']; ?></div>
                                <div class="property-gender">
                                    <img src="img/male.png" />
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="rent-container col-6">
                                    <div class="rent"><?php echo $row['Price']; ?>/-</div>
                                    <div class="rent-unit">per month</div>
                                </div>
                                <div class="button-container col-6">
                                    <button type="submit" class="btn btn-primary" name="submit">View</button>
                                </div>
                            </div>
                        </div>
                    </div>






                </form>


      <?php      } ?>


           </div>
<?php
}else {
     $val="City Not Registered yet,";
     header("location:index.html?val=$val");
}
}   ?>




  </body>
</html>
