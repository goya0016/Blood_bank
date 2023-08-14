<?php
include_once("mainbond.php");
include_once("SMS_OK_sms.php");
//$btn = $_POST["bttnn"];

$email=$_GET["email"];
$password=$_GET["password"];
$mobile=$_GET["mobile"];
$type=$_GET["type"];

$query = "insert into users values('$email','$password','$mobile','$type')";
mysqli_query($dbcon,$query);
$msg  = mysqli_error($dbcon);
if($msg=="")
    
{
    echo "saved...."; 
$resp=SendSMS($mobile,"Ur Pwd:".$pwd);
echo "record is successfully registered;".$resp;
}
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
 
 
 
 
 