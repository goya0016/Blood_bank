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
				$query="select * from needs";
				$table=mysqli_query($dbcon,$query);
				while($row=mysqli_fetch_array($table))	
				{
					echo "<tr><td>".$row["uid"]."<td>".$row["nname"]."<td>".$row["address"]."<td>".$row["city"]."<td>".$row["contact"]."<td>".$row["acno"]."<td>".$row["belongs"]."<td>".$row["ngo"]."
					";
				}
				
			
			?>
			
		</table>
		</center>
</body>
</html>