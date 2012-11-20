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
		Paystub Upload Page
		
		<a href="documents_employmentletter.php">Next</a>
	</body>
</html>