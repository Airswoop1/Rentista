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
		Non-Compete Contract <a href="documents_overview.php">Next</a>
		<br>
		<iframe src="http://docs.google.com/viewer?url=jackfrisoli.com%2Fsample.docx&embedded=true" width="600" height="780" style="border: none;"></iframe>
		
	</body>
</html>