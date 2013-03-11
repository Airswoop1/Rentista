<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
	include './SQL_Files/dbconnection.php';
	
	@session_start();
	
	//retreive variables from the prospectWelcome.php page
	$prospectID = $_SESSION['prospectID_S']; //prospect ID
	$uploadClass = $_POST['docUploadDropdown']; //what type of document
	$fileUploadedName = $_FILES['prospectFileUploaded']['name']; //name of the file to be uploaded

	//file error checking
	if($_FILES['prospectFileUploaded']['error']>0){

		echo "<p>ERROR: ".$_FILES['prospectFileUploaded']['error']."<br>";
		exit;

	}

	//name the file based on the type and prospect ID and generate path
	$upFile = 'UploadedFiles/'.$prospectID."_".$uploadClass."_File";

	//check that the file came from the previous pages' POST
	if(is_uploaded_file($_FILES['prospectFileUploaded']['tmp_name'])){
		//move the file into the location identified by $upFile
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
	//query for updating database to record the file location
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