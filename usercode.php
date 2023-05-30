<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bus.css">
    <?php
include("printpage.php");
     ?>
  </head>
  <body>
    <?php
    if(isset($_POST['source']))
    {

     ?>
     <?php
     include("busheader.php");
      ?>

  <?php
       $Bus_no=$_POST['bus'];
       $udate=$_POST['cdate'];
      $tota=$_POST['tot'];

    $as=$_POST['as'];
    $bc=$_POST['bs'];


                    $name=$_POST['name'];
                    $emal=$_POST['email'];
                    $pno=$_POST['phno'];
                    $stat=$_POST['state'];
                    $dis=$_POST['District'];


  $con=mysqli_connect("localhost","root","","travel");
  $qry="INSERT into userinfo(Name,Email,Phno,State,District,Ticket_date,Useat,B_seat,Bus_no,Total_seat)values('$name','$emal','$pno','$stat','$dis','$udate','$as','$bc','$Bus_no','$tota')";

  $myqry=mysqli_query($con,$qry);
    /* if ($myqry) {
           $subject="Bus Ticket information";
           $content="you have successfully booked your ticket..!";
        if(mail($emal,$subject,$content))
        {
          echo "Email send";
        }else {
          echo "Email not send";
        }

  }
  else {
  echo "unsuccessful";

} */
  $ucon=mysqli_connect("localhost","root","","travel");
 $uqry="SELECT * From userinfo WHERE Email = '$emal' ";
$uresult=mysqli_query($ucon,$uqry);

if(mysqli_num_rows($uresult)>0)
  {
        while ($resul = mysqli_fetch_array($uresult))
        {
          $name=$resul['Name'];
          $email=$resul['Email'];
          $phno=$resul['Phno'];
          $state=$resul['State'];
          $dis=$resul['District'];
          $tic=$resul['Ticket_date'];
          $aseat=$resul['Useat'];
          $busno=$resul['Bus_no'];
          $bseat=$resul['B_seat'];
          $allseat=$resul['Total_seat'];
          }

    }

    $ucon=mysqli_connect("localhost","root","","travel");
   $uqry="SELECT * From bus WHERE Bus_no='$Bus_no' ";
  $uresult=mysqli_query($ucon,$uqry);

  if(mysqli_num_rows($uresult)>0)
    {
          while ($resul = mysqli_fetch_array($uresult))
          {
            $busname=$resul['Bus_name'];
            $busno=$resul['Bus_no'];
            $source=$resul['Source'];
            $des=$resul['Destination'];
            $dept=$resul['Departure_time'];
            $arrival=$resul['Arrival_time'];
            $price=$resul['Price'];
          }
        }

?>

<div class="" style="height:auto;width:auto;">
                      <?php
                           date_default_timezone_set('Asia/kolkata');
                          $date= date('d-m-y h:i:s A');
                          $total_price=$allseat*$price;
                       ?>


                   <p style="text-align:center;font-size:30px;padding:0px;margin:0px;text:bold;">HAPPY JOURNEY</p>
                      <p style="text-align:center;font-size:30px;padding:0px;margin:0px;">Your Ticket</p>
          <div id="pri1">


            <table  border=1 style=" border:5px solid black; border-collapse:collapse;color: blue;text-align: center; font-size:20px;background-color:#f4f4f4;"  width=100% align="center" >
                   <tr > <td colspan="3"rowspan="2" ><?php echo $busname; ?> Agency <br>

                   </td><td colspan="2" >   Original <br>
                   </td><td rowspan="9">journey Date:- <?php echo $tic; ?> <br>
                                                    <table width="100%" border="1"  style="border-collapse:collapse;">
                                                       <tr> <td colspan="4"><u>Fare Details</u></td></tr>
                                                       <tr> <td colspan="4">Description  Amount(InRs.)</td> </tr>
                                                       <tr> <td colspan="4"></td> </tr>
                                                       <tr > <td ></td> <td>QTY</td>  <td>Fare</td>  <td>Total</td>  </tr>
                                                       <tr> <td >Seat</td> <td><?php echo $allseat; ?></td>  <td><?php echo $price; ?></td>  <td><?php echo $total_price; ?></td>  </tr>

                                                       <tr> <td colspan="2">Total Basic Fare</td>   <td colspan="2"><?php echo $total_price; ?></td>   </tr>
                                                    </table>
                                                                         </td></tr>
                    <tr> <td colspan="2"> Ticket approved <br>
                    By: jharkhandbus.com</td></tr>
                     <tr> <td colspan="5">PASSENGER INFORMATION</td></tr>
                      <tr> <td colspan="5" align=left>
                       Passenger Name:- <?php echo $name; ?>  &nbsp;&nbsp; District:- <?php echo $dis; ?> &nbsp;&nbsp; State:- <?php echo $state; ?><br>
                       Mobile No:- <?php echo $phno; ?>  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; E-Mail ID:- <?php echo $email; ?> </td></tr>
                       <tr> <td colspan="5">BOOKING/TRAP DETAIL</td></tr>
                       <tr> <td >Bus Name</td>&nbsp;&nbsp;<td>Bus Number </td> &nbsp;&nbsp; <td>Leaving From</td> &nbsp;&nbsp;<td>Going To</td> &nbsp;&nbsp;<td>Bus_Type</td></tr>
                        <tr> <td> <?php echo $busname; ?> </td><td><?php echo $busno; ?></td><td><?php echo $source; ?></br><?php echo $dept; ?></td><td><?php echo $des; ?></br><?php echo $arrival; ?></td><td>Non_AC</td></tr>

                         <tr> <td colspan="5">Seat:- <?php echo $aseat,",",$bseat; ?> <!-- &nbsp;&nbsp;Sleeper:- B,C --></td></tr>
                            <tr> <td colspan="5">Pick Up detail:-<?php echo $source; ?> Bus Stop</td></tr>
                           <tr> <td colspan="5">Subject To <?php echo $source; ?> Jurisdiction <br>
                                                This is a Computer Generated Bus Ticket. </td><td></td></tr>
                           <tr> <td colspan="6" align=left><y align=left>Ticket Booking in:-www.JharkhandBus.com</y>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Printing Date And Time:-<?php echo $date; ?></td></tr>
                       </table>
    </div>
    <input type="button" name="print" onclick="printContent('pri1');" value="PRINT">
  <?php
include('footer.php');
   ?>
</div>
<?php
}else {
  echo "gape not accessable..!";
}


  ?>



  </body>
</html>
