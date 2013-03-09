<?php


function calcPercentComplete($type, $id){
include './SQL_Files/dbconnection.php';
	if($type=="group"){
		$id_type = "g_id";
	}
	elseif($type=="single"){
		$id_type = "p_id";
	}

	$query = "select p_id, firstname, lastname, ID_File_Loc, BankStatement1_File_Loc, BankStatement2_File_Loc, 
	EmploymentLetter_File_Loc, PayStub_File_Loc, References_File_Loc, W2_File_Loc 
	from prospect where ".$id_type."='".$id."'"; 

	$result = $dbcon->query($query);
	$numRows = $result->num_rows;

	if($numRows>1){
		$totalPercent = 0;
		for($i=0;$i<$numRows;$i++){
			$row = $result->fetch_assoc();
			$totalPercent += calcPercentComplete("single",$row['p_id']);
		}
		return number_format(($totalPercent/$numRows),0);
	}
	else{
		$row = $result->fetch_assoc();
		$uploadCount = 0;

		if(!is_null($row['ID_File_Loc'])){
			$uploadCount++;
		}
		if(!is_null($row['BankStatement1_File_Loc'])){
			$uploadCount++;
		}
		if(!is_null($row['BankStatement2_File_Loc'])){	
			$uploadCount++;
		}
		if(!is_null($row['EmploymentLetter_File_Loc'])){
			$uploadCount++;
		}
		if(!is_null($row['PayStub_File_Loc'])){
			$uploadCount++;
		}
		if(!is_null($row['References_File_Loc'])){
			$uploadCount++;
		}
		if(!is_null($row['W2_File_Loc'])){
			$uploadCount++;
		}
		$percentComplete = $uploadCount/7;
		$percentComplete = $percentComplete*100;
		return number_format($percentComplete,0);
	}
}

?>