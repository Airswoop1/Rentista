<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
	include './SQL_Files/dbconnection.php';
	
	@session_start();
	
	$prospectID = $_SESSION['prospectID_S'];

	$uploadClass = $_POST['docUploadDropdown'];
	$fileUploadedName = $_FILES['prospectFileUploaded']['name'];

	if($_FILES['prospectFileUploaded']['error']>0){

		echo "<p>ERROR: ".$_FILES['prospectFileUploaded']['error']."<br>";
		exit;

	}

	$upFile = 'UploadedFiles/'.$prospectID."_".$uploadClass."_File";

	if(is_uploaded_file($_FILES['prospectFileUploaded']['tmp_name'])){
		if(!move_uploaded_file($_FILES['prospectFileUploaded']['tmp_name'], $upFile)){
			echo 'Probelm: Could not move file to dest directory.';
			exit;
		}

	}
	else{
			echo "Problem: Possible malicious file";
			exit;
		}

	$fileLocArray = array("ID"=>"ID_File_Loc","BS1"=>"BankStatement1_File_Loc", "BS2"=>"BankStatement2_File_Loc",
		"EL"=>"EmploymentLetter_File_Loc", "PS"=>"PayStub_File_Loc", "REF"=>"References_File_Loc", "W2"=>"W2_File_Loc",
		);
	

	$updateQuery = "UPDATE prospect SET ".$fileLocArray[$uploadClass]."='".$upFile."' where p_id='".$prospectID."'";

	$updateStatus = $dbcon->query($updateQuery);

	//echo "<br><p>The status of the update was: ".$updateStatus." </p><br>";

	
	//echo "File ".$fileUploadedName." uploaded successfully!";
?>

<html>
<head>
	<title>Upload Confirmation Screen</title>
</head>
<body>
	<p><strong>File <?php echo $fileUploadedName; ?> Uploaded Successfully for the <?php echo $uploadClass; ?> requirement</strong></p><br>
	<a href="prospectWelcome.php">Navigate back to upload page</a>
</body>
</html>