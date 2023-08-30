<?php
include_once("mainbond.php");
//$btn = $_POST["bttnn"];

$uid=$_GET["uid"];
$nname = $_GET["nname"];
$address = $_GET["address"];
$city = $_GET["city"];
$contact = $_GET["contact"];
$acno = $_GET["acno"];
$belongs = $_GET["belongs"];
$ngo = $_GET["ngo"];
    

$query = "insert into needs values('$uid','$nname','$address','$city','$contact','$acno','$belongs','$ngo')";
mysqli_query($dbcon,$query);
$msg  = mysqli_error($dbcon);
if($msg=="")
    echo "saved....";    
else
    echo $msg;


//$sql = "INSERT INTO Users (email, password, mobile, type) VALUE('$email','$password','$mobile','$type')";
//
//mysqli_query($dbcon,$sql);


//$query2 = "select * from Users where email="mail1";
//mysqli_query($dbcon,$query);
//$msg  = mysqli_error($dbcon);
//if($msg=="")
//    echo "saved....";
//else
//    echo $msg;

 ?>
 
 
 
 
 