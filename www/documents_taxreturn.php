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
		Tax Return Upload Page
		
		<a href="documents_bankstatement.php">Next</a>
	</body>
</html>