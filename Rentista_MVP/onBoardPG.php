<html>
<head>
	<title>Add New Prospect Group</title>
</head>
<body>
	<h2>Add New Prospect Group</h2>
	<a href="brokerWelcome.php">Navigate Back</a>
<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
	include './SQL_Files/dbconnection.php';
	include './sendEmail.php';
	@session_start();

	$brokerID = $_SESSION['brokerID'];

	//Get max group ID from db to increment for next group
	$query = "select max(g_id) from prospect";
	$result = $dbcon->query($query);
	$row = $result->fetch_assoc();
	$newGroupID = $row['max(g_id)']+1;
	$newGroupSuccessFlag = 0;

	for($i=1;$i<5;$i++){
		$fnameVar = "firstName".($i);
		$lnameVar = "lastName".($i);
		$emailVar = "email".($i);
		$phoneVar = "phone".($i);

		if(($_POST["$fnameVar"]=="") && ($_POST["$lnameVar"]=="") && ($_POST["$emailVar"]=="")){
			unset($_POST["$fnameVar"]);
			unset($_POST["$lnameVar"]);
			unset($_POST["$emailVar"]);
		}

		if(isset($_POST["$fnameVar"]) || isset($_POST["$lnameVar"]) || isset($_POST["$emailVar"])){
			$firstName = $_POST["$fnameVar"];
			$lastName = $_POST["$lnameVar"];
			$email = $_POST["$emailVar"];
			$phone = $_POST["$phoneVar"];

			$query2 = "INSERT INTO prospect (g_id, firstname, lastname, email, phone, ID_File_Loc, BankStatement1_File_Loc, BankStatement2_File_Loc, EmploymentLetter_File_Loc, PayStub_File_Loc, References_File_Loc, W2_File_Loc) VALUES ($newGroupID, '$firstName', '$lastName', '$email', '$phone', null, null, null, null, null, null, null)";
			$dbcon->query($query2);
			if($newGroupSuccessFlag==0){
				$newGroupSuccessFlag=1;
			}
		}

	}
	if($newGroupSuccessFlag==1){
		$query3 = "INSERT INTO transaction (g_id, b_id) VALUES ($newGroupID, $brokerID)";
		$dbcon->query($query3);
		if(sendEmail("newGroup", $newGroupID, $brokerID)){
			echo "New group successfully added with group ID: ".$newGroupID."<br>";
			echo "An email has been sent to on board the new group.";
		}
		else
			echo "The email was not send successfully.";
	}
	else
		echo "No group added";

?>

</body>
</html>