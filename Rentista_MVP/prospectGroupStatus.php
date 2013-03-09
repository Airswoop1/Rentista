<html>
<head>
	<title>Broker Dashboard: Prospect Group Detail</title>
</head>

<body>
<h1>Broker Dashboard</h1>
<a href="brokerWelcome.php">Go Back</a>

<h2>Prospect Group Detail</h2>

<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
 	@session_start();
	include './SQL_Files/dbconnection.php';
	include './calcPercentComplete.php';

	$groupID = $_GET['groupID'];

	$query = "select * from prospect where g_id='".$groupID."'";

	$result = $dbcon->query($query);
	$numProspects = $result->num_rows;

	if($numProspects<1){
		echo "Invalid group ID!";
		exit;
	}
	else{

		echo "<p>Group ".$groupID." is ".calcPercentComplete("group",$groupID)."% complete.</p>";

?>
<table border="2" bordercolor="#FFCC00" style="background-color:#FFFFCC" 
	width="700" cellpadding="3" cellspacing="6">
	<tr>
		<th>Name</th>
		<th>Percent Complete</th>
		<th>ID</th>
		<th>Bank Statement 1</th>
		<th>Bank Statement 2</th>
		<th>Employment Letter</th>
		<th>Pay Stub</th>
		<th>References</th>
		<th>W2</th>
		<th>Action</th>
	</tr>
<?php

for($i=0;$i<$numProspects; $i++){
	$row = $result->fetch_assoc();

	if(is_null($row['ID_File_Loc'])){
		$ID="Not Received";
	}
	else{
		$ID="Received";
	}

	if(is_null($row['BankStatement1_File_Loc'])){
		$BS1="Not Received";
	}
	else{
		$BS1="Received";
	}

	if(is_null($row['BankStatement2_File_Loc'])){
		$BS2="Not Received";
	}
	else{
		$BS2="Received";
	}

	if(is_null($row['EmploymentLetter_File_Loc'])){
		$EL="Not Received";
	}
	else{
		$EL="Received";
	}

	if(is_null($row['PayStub_File_Loc'])){
		$PS="Not Received";
	}
	else{
		$PS="Received";
	}

	if(is_null($row['References_File_Loc'])){
		$REF="Not Received";
	}
	else{
		$REF="Received";
	}

	if(is_null($row['W2_File_Loc'])){
		$W2="Not Received";
	}
	else{
		$W2="Received";
	}

	echo "<tr><td>".$row['firstname']." ".$row['lastname']."</td>
	<td align=\"center\">".calcPercentComplete("single",$row['p_id'])."%</td>
	<td>".$ID."</td><td>".$BS1."</td><td>".$BS2."</td><td>".$EL."</td><td>".$PS."</td><td>".$REF."</td>
	<td>".$W2."</td><td>";

	if(calcPercentComplete("single",$row['p_id'])<100){
		echo "<a href=\"mailTemplate.php\">Nudge!</a>";

	}
	else{
		echo "Complete";
	}

	echo "</td><tr>";
}
}
?>

</table>



</body>
</html>