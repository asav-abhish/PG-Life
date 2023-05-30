
<?php


if(isset($_POST['ok'])){
$emaill=$_POST['email'];

$con=mysqli_connect("localhost","root","","pg");
$qry="DELETE FROM userinfo WHERE Email='$emaill'";

$result=mysqli_query($con,$qry);
if($result){
    echo "Ticket Has Been Cancalled";
}else{

    echo "Unable to Cancel Booking";
}
}
?>