<?php

	include './SQL_Files/dbconnection.php';
	if(isset($_POST['prospectID'])){

		$updateQuery = "UPDATE prospect SET Registration_Flag='Yes' WHERE p_id=".$_POST['prospectID'];
		$dbcon->query($updateQuery);
		echo "1";
	}
	else
	{
		echo "There was a funky dunk error";
	}

?>