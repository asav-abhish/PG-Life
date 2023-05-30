<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_detail.css" rel="stylesheet" />
</head>

  <body>
    <?php
      include("header.php");
  if (isset($_POST['submit'])) {
      $phno=$_POST['Phno'];
      $name=$_POST['Name'];
     

      $con=mysqli_connect("localhost","root","","pg");
      $qry="SELECT * From allpg WHERE Name='$name' AND Phno='$phno'";
      $result=mysqli_query($con,$qry);
      if (mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_array($result)) {

                  $Price=$row['Price'];
                  $Address = $row['Address'];
                  $Country = $row['Country'];
                  $State = $row['State'];
                  $District= $row['District'];
                  $imgg=$row['Imagename'];
              }
      }

  }
     ?>


        <div id="loading">
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="property_list.html"><?php echo $District; ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $name; ?>
                </li>
            </ol>
        </nav>

        <div id="property-images" class="carousel slide" data-ride="carousel">


          <div class="" style=" position: relative; max-width:2500px;">


          <img class="mySlides " src="img/<?php echo $imgg; ?>" style="width:100%;height:300px;">

            <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2500);
            }
          </script>


          </div>


        </div>

        <div class="property-summary page-container">

            <div class="detail-container">
                <div class="property-name"><h2><?php echo $name; ?></h2> </div>
                <div class="property-address"><?php echo $Address; ?></div>
                <div class="property-gender">
                    <img src="img/unisex.png" />
                </div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent"><?php echo $Price; ?>/-</div>
                    <div class="rent-unit">per month</div>
                </div>
                <div class="button-container col-6">

                <form class="" action="userreg.php" method="post">
                        <input type="hidden" name="pgname" value="<?php echo $name; ?>">
                         <input type="hidden" name="pgphno" value="<?php echo $phno; ?>">
                         <a href="West Bengal_cloneofgooglemap/cloneofgooglemap.html">Show on map</a>
                        <input  class="btn btn-primary" type="submit" name="submit" value="Book now">
                </form>


                </div>
            </div>
        </div>

        <div class="property-amenities">
            <div class="page-container">
                <h1>Amenities</h1>
                   <?php
                   $con=mysqli_connect("localhost","root","","pg");
                   $qry="SELECT * From allpg WHERE Name='$name' AND Phno='$phno'";
                   $result=mysqli_query($con,$qry);
                   if (mysqli_num_rows($result)>0) {
                           while($row = mysqli_fetch_array($result)) {

                               $det[]=$row['Details'];
                               $dis=$row['Discription'];
                             }
                           }

                      $detail=implode(',',$det);

                        $jj=array();
                        $jj=explode(',',$detail);

                    ?>
                <div class="row justify-content-between">
                  <div class="col-md-auto">
                        <h5>Building</h5>
                               <?php

                               if (in_array(1,$jj)) {


                                echo '<div class="amenity-container">
                                               <img src="img/amenities/powerbackup.svg">
                                                 <span>Power backup</span>
                                                </div>'; }
                                        elseif (in_array(2,$jj)) {

                                      echo  '<div class="amenity-container">
                                               <img src="img/amenities/lift.svg">
                                                <span>Lift</span>
                                             </div>';
                                           }
                                           else {
                                              echo "";
                                           }
                                           ?>
                            </div>

                            <div class="col-md-auto">
                            <h5>Common Area</h5>
                                      <?php
                                  if (in_array(3,$jj)) {
                              echo '<div class="amenity-container">
                                         <img src="img/amenities/wifi.svg">
                                         <span>Wifi</span>
                                         </div>';
                                       }
                               if (in_array(4,$jj)) {

                                echo '<div class="amenity-container">
                                         <img src="img/amenities/tv.svg">
                                          <span>TV</span>
                                      </div>';
                                    }
                              if (in_array(5,$jj)) {
                                  echo '<div class="amenity-container">
                                         <img src="img/amenities/dining.svg">
                                        <span>Dining</span>
                                     </div>';
                                   }
                            if (in_array(6,$jj)) {
                                  echo '<div class="amenity-container">
                                       <img src="img/amenities/washingmachine.svg">
                                       <span>Washing Machine</span>
                                       </div>';
                                     }
                                     else {
                                       echo "";
                                     }

                               ?>
                    </div>

                    <div class="col-md-auto">
                        <h5>Bedroom</h5>
                                     <?php

                          if (in_array(7,$jj)) {
                                  echo '<div class="amenity-container">
                                       <img src="img/amenities/bed.svg">
                                        <span>Bed with Matress</span>
                                         </div>';
                                       }
                          if (in_array(8,$jj)) {
                                    echo '<div class="amenity-container">
                                      <img src="img/amenities/ac.svg">
                                        <span>Air Conditioner</span>
                                        </div>';
                                      }
                                      else {
                                        echo "";
                                      }
                                      ?>
                    </div>

                    <div class="col-md-auto">
                        <h5>Washroom</h5>
                        <?php
                              if (in_array(9,$jj)) {
                                  echo '<div class="amenity-container">
                                     <img src="img/amenities/geyser.svg">
                                       <span>Geyser</span>
                                      </div>';
                                    }
                                    ?>
                    </div>

                  <?php  ?>
                </div>
            </div>
        </div>

        <!-- <div class="property-about page-container">
            <h1>About the Property</h1>
            <p><?php echo $dis; ?></p>
        </div>

        <div class="property-rating">
            <div class="page-container">
                <h1>Property Rating</h1>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <div class="rating-criteria row">
                            <div class="col-6">
                                <i class="rating-criteria-icon fas fa-broom"></i>
                                <span class="rating-criteria-text">Cleanliness</span>
                            </div>
                            <div class="rating-criteria-star-container col-6" title="4.3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>

                        <div class="rating-criteria row">
                            <div class="col-6">
                                <i class="rating-criteria-icon fas fa-utensils"></i>
                                <span class="rating-criteria-text">Food Quality</span>
                            </div>
                            <div class="rating-criteria-star-container col-6" title="3.4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>

                        <div class="rating-criteria row">
                            <div class="col-6">
                                <i class="rating-criteria-icon fa fa-lock"></i>
                                <span class="rating-criteria-text">Safety</span>
                            </div>
                            <div class="rating-criteria-star-container col-6" title="4.8">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rating-circle">
                            <div class="total-rating">4.2</div>
                            <div class="rating-circle-star-container">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="property-testimonials page-container"> -->
            <!-- <h1>What people say</h1>
            <div class="testimonial-block">
                <div class="testimonial-image-container">
                    <img class="testimonial-img" src="img/man.png">
                </div>
                <div class="testimonial-text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
                </div>
                <div class="testimonial-name">- Ashutosh Gowariker</div>
            </div> -->
              <!-- <div class="testimonial-block">
                <div class="testimonial-image-container">
                    <img class="testimonial-img" src="img/man.png">
                </div>
                <div class="testimonial-text">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
                </div>
                <div class="testimonial-name">- Karan Johar</div>
            </div> -->
        </div>


        <?php include("rating.php"); ?>
        <?php include("submit_rating.php"); ?>


    <?php include("footer.php"); ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>

    </html>

  </body>
</html>
