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
		Bank Statement Upload Page
		
		<a href="documents_photoid.php">Next</a>
	</body>
</html>