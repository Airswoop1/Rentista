<?php
	if (isset($_POST['username']))
		{
		include "../db_connect.php";
		
		$username = htmlentities(preg_replace('/[^(\x20-\x7F)]*/' ,'', preg_replace("/\\\\/", "", trim($_POST['username']))));
		$password = htmlentities(preg_replace('/[^(\x20-\x7F)]*/' ,'', preg_replace("/\\\\/", "", trim($_POST['password']))));
		
		$query = "INSERT INTO users (username,
																	password) values('" . utf8_encode(mysql_real_escape_string($username)) . "', 
																							 '" . utf8_encode(mysql_real_escape_string($password)) . "')";
																							 
		mysql_query($query) or die(mysql_error()); #submit data to main table
		
		setcookie("username", $_POST['username'], time()+(3600*1000), '/');
		header('Location: documents_overview.php');
		}
?>

<html>
	<head>
		<title>Rentista</title>
		<script type="text/javascript">//<![CDATA[
			function validateForm()
				{
				return true;
				}
			//]]>
			</script>
		
	</head>
	<body>
		
		Login Page
		
		<form name="login" action="login.php" onsubmit="return validateForm()" method="post">
		<input id="textfield" type="text" name="username" maxlength="255" size="30" tabindex="1"><br>
		<input id="textfield" type="password" name="password" maxlength="255" size="30" tabindex="2">
		<input type="submit" value="Submit">
		</form>
		
		
	</body>
</html>