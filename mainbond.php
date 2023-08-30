<?php
$dbcon =mysqli_connect("localhost","root","","project");
$msg=mysqli_connect_error($dbcon);
/*if($msg=="")
    echo "connect";
else
    echo $msg;
?> */