<?php 
	session_start();
	//error reporting
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);

 	//inlcude necessary files
	include './SQL_Files/dbconnection.php';
	include './calcPercentComplete.php';
	include './sendEmail.php';
	
	//check if prospectID is from login or from Upload Successful page
	if(isset($_POST['prospectID'])){
		$prospectID = $_POST['prospectID'];
		$_SESSION['prospectID_S'] = $prospectID;
		error_log("set prospect ID from POST");
	}
	else{
		$prospectID = $_SESSION['prospectID_S'];
	}

	//counter for uploaded docs
	$uploadCount = 0;

	//query for pull from prospect table
	$query = "select g_id, firstname, lastname, ID_File_Loc, BankStatement1_File_Loc, BankStatement2_File_Loc, EmploymentLetter_File_Loc, PayStub_File_Loc, References_File_Loc, W2_File_Loc, Registration_Flag from prospect where p_id='".$prospectID."'"; 
	$result = $dbcon->query($query);

	//extract information from query results
	$row = $result->fetch_assoc();
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$groupID = $row['g_id'];
	$numrows = mysqli_num_rows($result);
	$registrationFlag = $row['Registration_Flag'];
?>
<!--
	<h3>Welcome <?php echo $firstname; echo " "; echo $lastname; ?> </h3>
	<h4>Registration Agreement</h4>
//-->
<?php
	if(($row['Registration_Flag']==null) AND (!isset($_POST['registrationCheckBox']))){
		
		//echo "<a href=\"registrationAgreement.php\">Click here to view and sign your Registration Agreement</a>";
	}
	elseif(($row['Registration_Flag']==null) AND (isset($_POST['registrationCheckBox']))){
		if($_POST['registrationCheckBox']=='agree'){
			$updateQuery = "UPDATE prospect SET Registration_Flag='Yes' WHERE p_id=$prospectID";
			$dbcon->query($updateQuery);
		}
		//echo "You have successfully completed your registration agreement.";

	}
	elseif($row['Registration_Flag']=='Yes'){
		//echo "You have successfully completed your registration agreement.";
	}

?>

<!--
	<h4>Documentation Upload</h4>
	<p>The current status of your documentation upload is as follows: <br></p>
//-->
<?php
	//check status of uploaded files
	if(is_null($row['ID_File_Loc'])){
		$ID="Not Received";
	}
	else{
		$ID="Received";
		$uploadCount++;
	}

	if(is_null($row['BankStatement1_File_Loc'])){
		$BS1="Not Received";
	}
	else{
		$BS1="Received";
		$uploadCount++;
	}

	if(is_null($row['BankStatement2_File_Loc'])){
		$BS2="Not Received";
	}
	else{
		$BS2="Received";
		$uploadCount++;
	}

	if(is_null($row['EmploymentLetter_File_Loc'])){
		$EL="Not Received";
	}
	else{
		$EL="Received";
		$uploadCount++;
	}

	if(is_null($row['PayStub_File_Loc'])){
		$PS="Not Received";
	}
	else{
		$PS="Received";
		$uploadCount++;
	}

	if(is_null($row['References_File_Loc'])){
		$REF="Not Received";
	}
	else{
		$REF="Received";
		$uploadCount++;
	}

	if(is_null($row['W2_File_Loc'])){
		$W2="Not Received";
	}
	else{
		$W2="Received";
		$uploadCount++;
	}
?>
<!---
	<table border="1">
		<tr>
			<th>Document</th>
			<th>Status</th>
			<th>Approved?</th>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $ID; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Bank Statement 1</td>
			<td><?php echo $BS1; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Bank Statement 2</td>
			<td><?php echo $BS2; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Employment Letter</td>
			<td><?php echo $EL; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>Pay Stub</td>
			<td><?php echo $PS; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>References</td>
			<td><?php echo $REF ?></td>
			<td></td>
		</tr>
		<tr>
			<td>W2</td>
			<td><?php echo $W2; ?></td>
			<td></td>
		</tr>
	
	</table>
	<br>
	//---->

<?php
	//initialize notes 
	$file = './UserNotes/'.$prospectID.'_preferences.txt';
	$header = $firstname." ".$lastname."'s Notes";

	if(!file_exists($file)){
		@$handle = fopen($file, 'w');
		@fwrite($handle, $header);
		@fclose($handle);
	}

	if ( isset( $_REQUEST['save'] ) && isset( $_REQUEST['editor'] ) ) {
	    // Save the new contents

	    $handle = fopen( $file, 'w' );
	    fwrite( $handle, $_REQUEST['editor'] );

	    fclose($handle);

	}

	// Open the contents of the file
	@$handle = fopen( $file, 'r' );
	@$contents = fread( $handle, filesize($file) );
	@fclose($handle);

?>

<!--
	<form action="" method="post">
	<input type="hidden" name="save" value="1" />
	<textarea cols="50" rows="7" name="editor" id="editor">
		<?php echo $contents; ?>
	</textarea>
	<input type="submit" value="Save" />
	</form>

	<p>You are currently 
//-->
		<?php 
			//calculate percent complete of upload 
			$percentComplete = $uploadCount/7; 
			$percentComplete = $percentComplete*100; 
			$percent = number_format($percentComplete, 0);
	//		echo $percent;
			?><!--% complete! </p> //-->

<!--	<p>Your group is <?php echo calcPercentComplete("group",$groupID); ?>% complete.<br>  
//-->
		<?php
			//query for other prospects in group
			$otherProspectQuery = "select * from prospect where g_id='".$groupID."' AND p_id!='".$prospectID."'";
			$otherProspectResult = $dbcon->query($otherProspectQuery);
			$numOtherProspects = $otherProspectResult->num_rows;

			if($numOtherProspects<1){

			}
			else{
				//output completion percentage 
				$otherProspectFirstName = array();
				$otherProspectLastName = array();
				$otherProspectPerComp = array();
				for($i=0;$i<$numOtherProspects;$i++){
					$otherProspectRow = $otherProspectResult->fetch_assoc();
					$otherProspectFirstName[$i] = $otherProspectRow['firstname'];
					$otherProspectLastName[$i] = $otherProspectRow['lastname'];
					$otherProspectPerComp[$i] = calcPercentComplete("single",$otherProspectRow['p_id']);
					/**echo "~".$otherProspectRow['firstname']." ".$otherProspectRow['lastname']." is ".
					calcPercentComplete("single",$otherProspectRow['p_id'])."% complete.<br>";	
				**/
				}
			}
		?>
<!--	</p>

	<p>Upload a Document: </p>
	<form name="docUpload" action="prospectUpload.php" method="POST" enctype="multipart/form-data" >
	<div><select name="docUploadDropdown">
			<option value="ID">ID</option>
			<option value="BS1">Bank Statement 1</option>
			<option value="BS2">Bank Statement 2</option>
			<option value="EL">Employment Letter</option>
			<option value="PS">Pay Stub</option>
			<option value="REF">References</option>
			<option value="W2">W2</option>
			</select></div><br>
	<div> <input type="hidden" name="MAX_FILE_SIZE" value="10000000">	
	<input type="file" name="prospectFileUploaded" id="prospectFile"></div>

	<input type="submit" value="submitFile" name="submit"> 
	</form>


</body>
</html> //-->