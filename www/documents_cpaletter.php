<?php
	if (!isset($_COOKIE["username"]))
		{
		header('Location: login.php');
		}
?>

<html>
	<head>
		<title>Rentista</title>
	</head>
	<body>
		CPA Letter Upload Page
		
		<a href="landlordrentalapplication.php">Next</a>
	</body>
</html>