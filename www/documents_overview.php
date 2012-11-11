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
		
		Documents Overview Page
		<br>
		<?php echo "Hello, " . $_COOKIE['username']; ?>
		
		
		
	</body>
</html>