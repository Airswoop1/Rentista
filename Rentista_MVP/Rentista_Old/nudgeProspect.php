<html>
<head>
	<title>Nudge Send</title>
</head>
<?php
		//error reporting
		ini_set('display_errors',1); 
	 	error_reporting(E_ALL);
	 	
	 	//Session Initialization
	 	@session_start();
	 	$groupID = $_GET['groupID'];
	 	//inlcude necessary files
		include './SQL_Files/dbconnection.php';
		include './calcPercentComplete.php';
		include './sendEmail.php';
?>

<a href="prospectGroupStatus.php?groupID=<?php echo $groupID;?>">Go Back</a>
<body>
<?php

		$prospectID = $_GET['prospectID'];
		$brokerID = $_SESSION['brokerID'];

		if(sendEmail("nudge", $prospectID, $brokerID)){
			echo "<p>Nudge email sent successfully.</p>";
		}
		else
			echo "<p>Nudge email not sent successfully.</p>";


		?>

</body>
</html>
