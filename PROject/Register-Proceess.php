<?php
include_once("Connection.php");
include_once("SMS_OK_sms.php");

$btn=$_GET["btn"];
if($btn=="register")
    dosave($dbcon);
else if($btn=="check")
    docheck($dbcon);
//===================================Save data============================
function dosave($dbcon)
{
$Email=$_GET["Uid"];
$password=$_GET["Pwd"];
$Mobile=$_GET["Mob"];
  
$query="insert into profile (Email,password,Mobile,Status) values('$Email','$password','$Mobile',-1)";
mysqli_query($dbcon,$query);
 $error=mysqli_error($dbcon);
    if($error==""){
        $msg="You are sucessfully Registerd with Email- $Email";
        $resp= SendSMS($Mobile,$msg);
        echo"$resp";
        echo"Record is Successfully Registered";
    }else
        echo $error;
}
/*==============================================*/
function docheck($dbcon)
{
    $Luser=$_GET["Luser"];
$query="select * from profile where Email='$Luser'";

$res=mysqli_query($dbcon,$query);
$count=mysqli_num_rows($res);
if($count==0)
    
    echo "";
else 
    echo "That userid is taken. Try another.";

}
/*=============================*/

?>
