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
		Employment Letter Upload Page
		
		<a href="documents_taxreturn.php">Next</a>
	</body>
</html>