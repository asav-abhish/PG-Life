<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include("printpage.php"); ?>
  </head>
  <body>

<?php
        include("header.php");

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
   $email=$_POST['email'];
    $phno=$_POST['phno'];
    $fromdate=$_POST['fromdate'];
  $todate=$_POST['todate'];
   $pgname=$_POST['pgname'];
    $pgphno=$_POST['pgphno'];
      $tick=$_POST['tick'];



    date_default_timezone_set('Asia/kolkata');
    $datee= date('d-m-y ');


    $con=mysqli_connect("localhost","root","","pg");
    $qry="INSERT into userinfo(Name,Email,Phno,Booking_date,From_date,To_date,Pg_name,Pg_phno)values('$name','$email','$phno','$datee','$fromdate','$todate','$pgname','$pgphno')";

    $myqry=mysqli_query($con,$qry);
    if ($myqry) {

    }else {

    }


}

$con = mysqli_connect("localhost","root","","pg");
$qry="SELECT * From allpg WHERE Name ='$pgname' AND Phno ='$pgphno'";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) {

                      $price=$row['Price'];
                      $Address=$row['Address'];
                     $country=$row['Country'];
                     $state=$row['State'];
                     $District=$row['District'];

              }
}


                 date_default_timezone_set('Asia/kolkata');

                 $date= date('d-m-y h:i:s A');
 ?>
             <h3 align="center" >Your Booking details</h3>

       <div class="" id="pri1">

 <table  border=1 style=" border:5px solid black; border-collapse:collapse;color: blue;text-align: center; font-size:20px;background-color:#f4f4f4;"  width=100% align="center" >
        <tr > <td colspan="3"rowspan="2" ><?php echo $pgname; ?> <br>

        </td><td colspan="5" >   Original <br>
        </td>
              </tr>
         <tr> <td colspan="5"> Room Booking approved <br>
         By: PGlife.com</td></tr>
          <tr> <td colspan="6">RENTER INFORMATION</td></tr>
           <tr> <td colspan="8" align=left>
            Name:- <?php echo $name;  ?>  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Check in Date:-<?php echo $fromdate; ?> &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;Check out Date:- <?php echo $todate; ?>
          <br>  Mobile No:- <?php echo $phno; ?>  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; E-Mail ID:- <?php echo $email;  ?> </td></tr>
            <tr> <td colspan="8">PG'S DETAILS</td></tr>
            <tr> <td >PG's Name</td>&nbsp;&nbsp;<td>Ph.Number </td> &nbsp;&nbsp; <td>Price per month</td> &nbsp;&nbsp;<td>State</td> &nbsp;&nbsp;           <td>District</td>  </tr>
             <tr> <td> <?php echo $pgname; ?> </td><td><?php echo $pgphno;  ?></td><td><?php echo $price;  ?></br></td><td><?php echo $state;  ?></br></td><td><?php echo $District; ?></td></tr>

              <tr> <td colspan="8">... <?php  ?> <!-- &nbsp;&nbsp;Sleeper:- B,C --></td></tr>
                 <tr> <td colspan="8">PG's Address:-<?php echo $Address; ?> </td></tr>
                <tr> <td colspan="8">Subject To <?php echo $District ?> Jurisdiction <br>
                                     This is a Computer Generated booking. </td><td></td></tr>
                <tr> <td colspan="8" align=left><y align=left>Room Booking through:-www.PGlife.com</y>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Printing Date And Time:-<?php echo $date; ?><input style="margin-left:400px;" type="button" name="print" onclick="printContent('pri1');" value="PRINT"></td> </tr>
            </table>


  </div>





         <?php include("footer.php"); ?>
  </body>
</html>
