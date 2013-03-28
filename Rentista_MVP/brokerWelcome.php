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

	//check if page is coming from logon or from another page and set the variables appropriately
	if(isset($_POST['brokerID'])){
		$brokerID = $_POST['brokerID'];
		$_SESSION['brokerID'] = $brokerID;
	}
	else{
		$brokerID = $_SESSION['brokerID'];
	}

	//query to retreive the brokers information
	$query = "select firstname, lastname, brokerage from broker where b_id='".$brokerID."'"; 

	$result = $dbcon->query($query);

	$row = $result->fetch_assoc();
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$brokerage = $row['brokerage'];

?>

	<p>Welcome <?php echo $firstname; echo " "; echo $lastname; ?> of <?php echo $brokerage; ?> </p>
	<p>Your current list of prospects is as follows: </p>

<?php
	//query for the broker's transactions
	$query2 = "select * from transaction where b_id='".$brokerID."'";
	$result2 = $dbcon->query($query2);
	$numGroups = $result2->num_rows;

	//check to make sure that the broker has transactions, if not tell them to use rentista
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
		//loop through the results from the query to print out the information for each group
		//in the brokers transactions
		for($i=0;$i<$numGroups; $i++){
			$row2 = $result2->fetch_assoc();
			echo "<tr><td align=\"center\"><a href=\"prospectGroupStatus.php?groupID=".$row2['g_id']."\">".$row2['g_id']."</td><td>".
			$row2['property']."</td><td>".$row2['unit']."</td><td align=\"center\">".calcPercentComplete("group",$row2['g_id'])."%</td><tr>";
		}

	}
?>

</table>


<form action="onBoardPG.php" method="POST">
<table border="3">
	<thead><h4>Onboard A New Prospective Tenant</h4></thead>
	<tr>
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone #</th>
	</tr>
	<tr>
		<td>1</td>
		<td><input type="text" Name="firstName1" /></td>
		<td><input type="text" Name="lastName1" /></td>
		<td><input type="text" Name="email1" /></td>
		<td><input type="text" Name="phone1" /></td>
	</tr>
		<tr>
		<td>2</td>
		<td><input type="text" Name="firstName2" /></td>
		<td><input type="text" Name="lastName2" /></td>
		<td><input type="text" Name="email2" /></td>
		<td><input type="text" Name="phone2" /></td>
	</tr>
		<tr>
		<td>3</td>
		<td><input type="text" Name="firstName3" /></td>
		<td><input type="text" Name="lastName3" /></td>
		<td><input type="text" Name="email3" /></td>
		<td><input type="text" Name="phone3" /></td>
	</tr>
		<tr>
		<td>4</td>
		<td><input type="text" Name="firstName4" /></td>
		<td><input type="text" Name="lastName4" /></td>
		<td><input type="text" Name="email4" /></td>
		<td><input type="text" Name="phone4" /></td>
	</tr>
</table>
		<td colspan="2"><input type="submit"><td>
		<td colspan="2"><input type="button" value="Add Additional Prospects"></td>

</form>
</body>
</html>