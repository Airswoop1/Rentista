<?php 
	session_start(); 
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
	include './SQL_Files/dbconnection.php';
	include './calcPercentComplete.php';

	//take the group ID sent from the previous page
	$groupID = $_GET['groupID'];

	//query to pull information about the entire prospect group
	$query = "select * from prospect where g_id='".$groupID."'";
	$result = $dbcon->query($query);
	$numProspects = $result->num_rows;

	//check to make sure that the query returned results
/**	if($numProspects<1){
		
	}
	else{
		//echo the groups % complete
		//echo "<p>Group ".$groupID." is ".calcPercentComplete("group",$groupID)."% complete.</p>";

//loop through the results of the query and generate table of each prospects information
for($i=0;$i<$numProspects; $i++){
	$row = $result->fetch_assoc();

	$prospectID = $row['p_id'];

	//checks the results of the query and determines which documents have been received or not received
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

	//grab the notes that a user has saved
	$prefFile = './UserNotes/'.$row['p_id'].'_preferences.txt';
	if(file_exists($prefFile)){
	$handle = fopen( $prefFile, 'r' );
	$contents = fread( $handle, filesize($prefFile) );
	fclose($handle);
	}
	else{
		$contents = "";
	}
	//print the other information about the prospect group
echo "<tr><td>".$row['firstname']." ".$row['lastname']."</td>
	<td align=\"center\">".calcPercentComplete("single",$row['p_id'])."%</td>
	<td>".$ID."</td><td>".$BS1."</td><td>".$BS2."</td><td>".$EL."</td><td>".$PS."</td><td>".$REF."</td>
	<td>".$W2."</td><td>";
	
	//calculate the prospects % complete and if not complete allow the broker to 
	//nudge otherwise let them download the entire file package
	if(calcPercentComplete("single",$row['p_id'])<100){
		echo "<a href=\"nudgeProspect.php?prospectID=$prospectID&groupID=$groupID\">Nudge!</a>";

	}
	elseif(!file_exists("./ZippedFiles/".$row['p_id']."_zipped.zip"))
	{
		echo "<a href=\"downloadZip.php?prospectID=$prospectID&groupID=$groupID\">Create Zip</a>";
	}
	else
	{
		echo "<a href=\"./ZippedFiles/".$row['p_id']."_zipped.zip\">Download Zip</a>";
	}
	
	//print the notes
	echo "</td><td>$contents</td><tr>";
}
}**/
?>

</table>

</body>
</html>