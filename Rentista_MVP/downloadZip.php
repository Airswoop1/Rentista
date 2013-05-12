<html>
<head>
	<title>Download Zip</title>
</head>
<body>
	
<?php
		ini_set('display_errors',1); 
	 	error_reporting(E_ALL);
	 	@session_start();
		include './SQL_Files/dbconnection.php';
		include './calcPercentComplete.php';
		include './createZip.php';

		$prospectID = $_GET['prospectID'];
		$groupID = $_GET['groupID'];
?>

<h3>Zip File Creation</h3>

<a href="brokerDashboardGroupDetail.php?groupID=<?php echo $groupID;?>">Go Back</a>

<?php

		$query = "select * from prospect where p_id='".$prospectID."'";
		$result = $dbcon->query($query);
		$row = $result->fetch_assoc();

		$ID = $row['ID_File_Loc'];
		$BS1 = $row['BankStatement1_File_Loc'];
		$BS2 = $row['BankStatement2_File_Loc'];
		$EMP = $row['EmploymentLetter_File_Loc'];
		$PS = $row['PayStub_File_Loc'];
		$REF = $row['References_File_Loc'];
		$W2 = $row['W2_File_Loc'];

		$fileArray = array("$ID","$BS1","$BS2","$EMP","$PS","$REF","$W2");

		$zippedFileLoc = "./ZippedFiles/".$prospectID."_zipped.zip";

		if(create_zip($fileArray, $zippedFileLoc))
			echo "<p>Zip File created successfully!</p>";
		else
			echo "<p>ZZip file already exists or something went wrong during the file creation. 
					</p><p>Zip File not created succesfully</p>";

	?>


</body>
</html>