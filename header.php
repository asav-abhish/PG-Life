<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_detail.css" rel="stylesheet" />


    <link rel="stylesheet" href="header.css">
  </head>
  <body>
  <!--  <div class="dibba1">
         <div class="logo"> <a href="index.html" style=""> PG SERVICES </a></div>

          <div class="con">

              <div class="dib1"> <a href="about.php">ABOUT</a>  </div>
              <div class="dib1"><a href="login_form.php"> ADMIN SITE</a> </div>
              <div class="dib1"><a href="google.php">GOOGLE MAP</a></div>

         </div>
     </div>
   -->
   <div class="header sticky-top">
       <nav class="navbar navbar-expand-md navbar-light">
           <a class="navbar-brand" href="index.html">
               <img src="img/logo.png" />
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
               <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" href="login_form.php" data-toggle="modal" data-target="#signup-modal">
                         <i class="fas fa-user"></i>Admin Site
                     </a>
                 </li>
                 <div class="nav-vl"></div>
                   <li class="nav-item">
                       <a class="nav-link" href="pg-owner-reg.php" data-toggle="modal" data-target="#signup-modal">
                           <i class="fas fa-user"></i>Register New PG owner
                       </a>
                   </li>
                   <div class="nav-vl"></div>
                   <li class="nav-item">
                       <a class="nav-link" href="user-reg.php" data-toggle="modal" data-target="#login-modal">
                           <i class="fas fa-sign-in-alt"></i>New User Registration
                       </a>
                   </li>
               </ul>
           </div>
       </nav>
   </div>

  </body>
</html>
