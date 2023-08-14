<?php
	include_once("mainbond.php");



     $query="select distinct bgroup from donors";
				$table=mysqli_query($dbcon,$query);
				
$ary=array();
while($row=mysqli_fetch_array($table))	
				{
					$ary[]=$row;
				}
				
			echo json_encode($ary);
    ?>