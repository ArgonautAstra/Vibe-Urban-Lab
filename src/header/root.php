<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Database</title>
</head>

<body>
	
	<?php
	$hostname="89.46.111.225";
	$username="Sql1464933";
	$password="55qs552r42";
	$database="Sql1464933_5";
	
	$conn = mysqli_connect($hostname, $username, $password);
	if (!$conn)
		die('Error during connection: ' . mysqli_error($conn)."<br>");
		
	$acc=mysqli_select_db($conn, $database);
		
	if (!$acc) 
		die ('Error during connection to database: ' . mysqli_error($conn)."<br>");
	?>
	
</body>
</html>