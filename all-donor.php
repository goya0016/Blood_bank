<?php
	include_once("mainbond.php");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<center>
			<h1>All records</h1>
		
		<table width="1000" border="1" rules="all" style="background-color: gray ; border-color:black;">
			
			<?php
				$query="select * from donors";
				$table=mysqli_query($dbcon,$query);
				while($row=mysqli_fetch_array($table))	
				{
					echo "<tr><td>".$row["uid"]."<td>".$row["ppic"]."<td>".$row["dname"]."<td>".$row["bgroup"]."<td>".$row["address"]."<td>".$row["city"]."<td>".$row["gender"]."<td>".$row["mobile"]."<td>".$row["email"]."<td>".$row["dob"]."<td>".$row["nodo"]."<td>".$row["disease"]."
					";
				}
				
			
			?>
			
		</table>
		</center>
</body>
</html>