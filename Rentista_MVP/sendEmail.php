<?php
/*
function sendEmail

Args: 
$type=either "newGroup", "nudge" to signify what type of email we're sending
$id = group's ID
$b_id = broker's ID

result email's the user based on $type 
*/

function sendEmail($type, $id, $brokerID){
	include './SQL_Files/dbconnection.php';
	
	$query1 = "select * from broker where b_id='".$brokerID."'";
	$result = $dbcon->query($query1);
	$row1 = $result->fetch_assoc();
	$brokerageName = $row1['brokerage'];
	$brokerEmail = $row1['email'];
	$brokerName = $row1['firstname']." ".$row1['lastname'];
	$brokerPhone = $row1['phone'];

	if($type=="nudge"){
		$idType = "p_id";

		$subject = 'Notification From '.$brokerName.' at '.$brokerageName;
		$query2 = "select * from prospect where $idType='".$id."'";
		$result = $dbcon->query($query2);	
		$numRows = $result->num_rows;
		$row = $result->fetch_assoc();

		$to = $row['email'];

		$notRec = "";
		$prospectName = $row['firstname']." ".$row['lastname'];

		if(is_null($row['ID_File_Loc'])){
			$notRec .="ID, ";
		}

		if(is_null($row['BankStatement1_File_Loc'])){
			$notRec .="Bank Statment1, ";
		}

		if(is_null($row['BankStatement2_File_Loc'])){
			$notRec .="Bank Statement 2, ";
		}

		if(is_null($row['EmploymentLetter_File_Loc'])){
			$notRec .="Employment Letter, ";
		}

		if(is_null($row['PayStub_File_Loc'])){
			$notRec .="Pay Stub, ";
		}

		if(is_null($row['References_File_Loc'])){
			$notRec .="References, ";
		}

		if(is_null($row['W2_File_Loc'])){
			$notRec .="W2 ";	
		}

		rtrim($notRec, ",");

		$message = 
		"
			<html>
			<head>
			  <title>Notification from $brokerName at $brokerageName</title>
			</head>
			<body>	
			  <p>Hi $prospectName,</p>
			  <p>Just a friendly reminder to upload your $notRec to the Rentista portal! This will ensure that we're prepared to close when we find your perfect apartment.</p>
			  <p>As always, please feel free to contact me at $brokerEmail or $brokerPhone if you have any questions.</p>
				<p>Best,<br>
				$brokerName</p>
			</body>
			</html>
			";
		

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Airswoop1@gmail.com" . "\r\n";
	//	$headers .= "From: $brokerEmail" . "\r\n";
		if(mail($to, $subject, $message, $headers)){
			return 1;
		}
		else{
				return 0;
			}
	}
	elseif($type=="newGroup"){
		$idType = "g_id";

		$subject = 'Welcome to '.$brokerageName;

		$query2 = "select * from prospect where $idType='".$id."'";
		$result = $dbcon->query($query2);	
		$numRows = $result->num_rows;
		

		for($i=0;$i<$numRows;$i++){
			$row = $result->fetch_assoc();
			$prospectName = $row['firstname']." ".$row['lastname'];
			$prospectID = $row['p_id'];

			$to = $row['email'];
			$message = "
			<html>
			<head>
			  <title>Welcome to $brokerageName</title>
			</head>
			<body>	
			  <p>Hello $prospectName,</p>
			  <p>Thank you for choosing to work with us at $brokerageName</p>
			  <p>Like most things in New York City, the rental market is incredibly fast paced. This means that we have to act as quickly as possible to find and secure your dream apartment. We've recently introduced a new online system to give you an even greater advantage!</p>
			  <p>Please follow the link below to our secure online portal, where you will be instructed to create an account and upload your real estate documents as soon as possible so that we can get started with your search! Keep in mind, apartments can be off the market in a matter of hours, so having this information online in advance will help increase your likelihood of landing your ideal place.</p>
			  <p>Use prospect ID: $prospectID</p>
				<a href=\"http://localhost:8888/Rentista/Rentista_MVP/prospect.html\" value=\"Secure Online Portal\">Secure Online Portal</a>		
				<br>
				<p>Here at $brokerageName, we strive to provide exceptional customer service, transparency of information, neighborhood expertise, and professional guidance. We look forward to working with you!</p>
				<p>Thanks,<br>
				$brokerName</p>
				<p>P.S. For more information about using this tool, go to SECURE RENTAL INFO SOURCE or call ###-###-####.</p>
			</body>
			</html>
			";

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Airswoop1@gmail.com" . "\r\n";
//		$headers .= "From: $brokerEmail" . "\r\n";
		if(mail($to, $subject, $message, $headers)){
			if($i==($numRows-1)){
				return 1;
			}
			else{
				continue;
			}
		}
		else{
			return 0;
		}
	}
	}
	elseif($type=="complete"){
		$idType = "g_id";

		//INSERT CODE FOR COMPLETION EMAIL

	}

}


?>