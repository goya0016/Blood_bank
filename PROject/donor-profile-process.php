<?php
include_once("mainbond.php");

$btn = $_POST["btn"];
 
if($btn=="save")
    dosave($dbcon);

else
    doupdate($dbcon);

   function dosave($dbcon)
    {

$uid=$_POST["uid"];
$ppic=$_FILES["ppic"]["name"];
$tpic=$_FILES["ppic"]["tmp_name"];
$dname = $_POST["dname"];
$bgroup = $_POST["bgroup"];
$address = $_POST["address"];
$city = $_POST["city"];
$gender = $_POST["gender"]; 
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$nodo = $_POST["nodo"];
$disease = $_POST["disease"];
move_uploaded_file($tpic,"upload/".$ppic);

    $query = "insert into donors values('$uid','$ppic','$dname','$bgroup','$address','$city','$gender','$mobile','$email','$dob','$nodo','$disease')";
mysqli_query($dbcon,$query);
$msg  = mysqli_error($dbcon);
if($msg=="")
    echo "saved....";
else
    echo $msg;
}

if($btn=="update")
    doupdate($dbcon);

function doupdate($dbcon)
{
    $uid=$_POST["uid"];
$ppic=$_FILES["ppic"]["name"];
$tpic=$_FILES["ppic"]["tmp_name"];
$dname = $_POST["dname"];
$bgroup = $_POST["bgroup"];
$address = $_POST["address"];
$city = $_POST["city"];
$gender = $_POST["gender"]; 
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$nodo = $_POST["nodo"];
$disease = $_POST["disease"];

    if($ppic!="")
    {
        $query = "update donors set ppic='$ppic',dname='$dname',bgroup='$bgroup',address='$address',city='$city',gender='$gender',mobile='$mobile',email='$email',dob='$dob',nodo='$nodo',disease='$disease'where uid='$uid'";
        move_uploaded_file($tpic,"upload/".$ppic);
    }
     else
     {
        $query = "update donors set dname='$dname',bgroup='$bgroup',address='$address',city='$city',gender='$gender',mobile='$mobile',email='$email',dob='$dob',nodo='$nodo',disease='$disease'where uid='$uid'";
         
     }
        
        
        mysqli_query($dbcon,$query);
$msg  = mysqli_error($dbcon);
if($msg=="")
    echo "updated....";
else
    echo $msg;

}
?>