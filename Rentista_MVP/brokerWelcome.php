<html>
<head>
	<title>Broker Dashboard</title>
</head>
<body>
	<p>Welcome to the Rentista Broker Dashboard page!</p>
	<div><strong><a href="logoff.html">Log Off</a></strong></div>
<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
 	@session_start();
	include './SQL_Files/dbconnection.php';
	include './calcPercentComplete.php';

	if(isset($_POST['brokerID'])){
		$brokerID = $_POST['brokerID'];
		$_SESSION['brokerID'] = $brokerID;
	}
	else{
		$brokerID = $_SESSION['brokerID'];
	}

	$query = "select firstname, lastname, brokerage from broker where b_id='".$brokerID."'"; 

	$result = $dbcon->query($query);

	$row = $result->fetch_assoc();
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$brokerage = $row['brokerage'];
	//$numrows = mysqli_num_rows($result);
?>

	<p>Welcome <?php echo $firstname; echo " "; echo $lastname; ?> of <?php echo $brokerage; ?> </p>
	<p>Your current list of prospects is as follows: </p>
<?php
	//$result->free();

	$query2 = "select * from transaction where b_id='".$brokerID."'";
	$result2 = $dbcon->query($query2);
	$numGroups = $result2->num_rows;

	if($numGroups==0){
		echo "<tr>You have no prospects in progress, get to work and use Rentista!</tr>"; 
	}
	else{
?>
	<table border="1" bordercolor="#FFCC00" style="background-color:#FFFFCC" 
	width="500" cellpadding="3" cellspacing="5">
	<tr>
		<th>GroupID</th>
		<th>Property</th>
		<th>Unit</th>
		<th>Percent Complete</th>
	</tr>
<?php

		for($i=0;$i<$numGroups; $i++){
			$row2 = $result2->fetch_assoc();
			echo "<tr><td align=\"center\"><a href=\"prospectGroupStatus.php?groupID=".$row2['g_id']."\">".$row2['g_id']."</td><td>".
			$row2['property']."</td><td>".$row2['unit']."</td><td align=\"center\">".calcPercentComplete("group",$row2['g_id'])."%</td><tr>";
		}

	}
?>

</table>

</body>
</html>