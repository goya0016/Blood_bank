<?php
  include_once("mainbond.php");
//  session_start();

   //$btn= $GET["btn"];  
    
   $uid = $_GET["uid"];
   $nname = $_GET["nname"];
   $address = $_GET["address"];
   $city = $_GET["city"];
   $contact = $_GET["contact"];
   $acno = $_GET["acno"];
   $belongs = $_GET["belongs"];
   $ngo = $_GET["ngo"];
    
   $query="update needs set nname='$nname',address='$address',city='$city',contact='$contact',acno='$acno',belongs='$belongs',ngo='$ngo' where uid='$uid'";

   mysqli_query($dbcon,$query);
   //$count= mysqli_num_rows($table);   
  $msg  = mysqli_error($dbcon);
if($msg=="")
    echo "updated....";    
else
    echo $msg;
                
//      if($count==1)
//         href="http://localhost/PROject/DONOR-DASH.php";


//  if(mysqli_num_rows($table)==0)
//      echo "invalid";
//   else
//       $row=mysqli_fetch_array($table);
//   $_SESSION["email"]=$email;
//
//   echo $row["rad"];

?>




