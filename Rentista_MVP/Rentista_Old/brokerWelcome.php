<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);
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

	//query for the broker's transactions
	$query2 = "select * from transaction where b_id='".$brokerID."'";
	$result2 = $dbcon->query($query2);
	$numGroups = $result2->num_rows;

	//check to make sure that the broker has transactions, if not tell them to use rentista
	if($numGroups==0){
		
	}
	else{
?>

	
<?php
		//loop through the results from the query to print out the information for each group
		//in the brokers transactions
		/**for($i=0;$i<$numGroups; $i++){
			$row2 = $result2->fetch_assoc();
			echo "<tr><td align=\"center\"><a href=\"prospectGroupStatus.php?groupID=".$row2['g_id']."\">".$row2['g_id']."</td><td>".
			$row2['property']."</td><td>".$row2['unit']."</td><td align=\"center\">".calcPercentComplete("group",$row2['g_id'])."%</td><tr>";
		}
**/
	}
?>


</body>
</html>