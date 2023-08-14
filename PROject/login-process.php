<?php
  session_start();
  include_once("mainbond.php");

   $email=$_GET["email"];
   $password = $_GET["password"];
//   $type = $_GET["type"];

   $query="select * from users where email='$email' and password='$password'";

   $table= mysqli_query($dbcon,$query);
   $count= mysqli_num_rows($table);
  if($count==1)
  {
      //header("location:donor-dash.php");
      //for opening of another page
      $row= mysqli_fetch_array($table);
      $_SESSION["email"]=$email;
      echo $row["type"];
  }
        
  else{
       echo "Sorry not found";
  }
                
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