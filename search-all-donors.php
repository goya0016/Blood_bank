<?php
	include_once("mainbond.php");

   $bg=$_GET["bgroup"];


    $query="select * from donors where bgroup='$bg'";
				$table=mysqli_query($dbcon,$query);
				
$ary=array();
while($row=mysqli_fetch_array($table))	
				{
					$ary[]=$row;
				}
				
			echo json_encode($ary);
    ?>