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
		Photo ID Upload Page
		
		<a href="documents_cpaletter.php">Next</a>
	</body>
</html>