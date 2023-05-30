<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>

        <style>
          body{
            padding: 0;
            margin:0;
          }
           
           .box {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  font-weight: 200;
  bottom: 50px;
  right: 1000px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  padding-left: 30px;
  padding-right: 20px;
}
h4{
    text-align: center;
    font-size: 30px;
}
img{
    height:80vh;
    width:100%;
}



        </style>
   <body>
        <?php
             include("header.php");
     ?>
    
    <div class="box">
        <img src="img/about_us_thumb01png-514.png" alt="About " >
        <div class="text-block">
            <h4 >About Us</h4>
            <p>On this site we provide a platform from which we can find great PGs around us and can book for our living purpose' We are grateful to all 
                who have supported us in every tough time
            </p>
        </div>
    </div>

   
        
        <?php
             include("footer.php");
     ?>
</body>
</html>