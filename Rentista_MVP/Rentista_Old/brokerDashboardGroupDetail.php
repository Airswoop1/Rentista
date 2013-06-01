<!DOCTYPE html>

<?php
include './prospectGroupStatus.php';


?>	
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rentista</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fileupload-ui.css">
<!-- [if IE]>
	<script src="http://html5shiv.gogglecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>	
<body data-spy="scroll" data-target=".nav_contain">

	<!-- For Sticky Footer -->
	<div id="wrap" >

		<!-- Main Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
			  <div class="container">
			    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			      <span class="icon-bar">1</span>
			      <span class="icon-bar">2</span>
			      <span class="icon-bar">3</span>
			    </a>
			    <a class="brand" href="#">Rentista Portal</a>
			    <div class="nav-collapse collapse">
			      <ul class="nav">
			        <li class="active"><a href="#">My Portal</a></li>
			        <li><a href="#about">Help</a></li>
			        <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log Out <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li><a href="./logoff.html">Log Out</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li class="nav-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
			      </ul>
			    </div>
			  </div>
			</div>
		</div>
		<!-- Secondary Navigation -->


		<div class="row-fluid" style="margin-top:60px">
		  
		  <span class="span7 offset2">
		    <h3 >Group Detail</h3><a href="BrokerDashboard.php">Go Back</a>
		    <div>
		      <table class="table table-striped table-bordered table-hover pull-center">
			        <thead style="text-align:center; vertical-align:middle;" >
		          <tr>
		            <th style="text-align:center; vertical-align:middle;">Name</th>
					<th style="text-align:center; vertical-align:middle">Percent Complete</th>
					<th style="text-align:center; vertical-align:middle">ID</th>
					<th style="text-align:center; vertical-align:middle">Bank Statement 1</th>
					<th style="text-align:center; vertical-align:middle">Bank Statement 2</th>
					<th style="text-align:center; vertical-align:middle">Employment Letter</th>
					<th style="text-align:center; vertical-align:middle">Pay Stub</th>
					<th style="text-align:center; vertical-align:middle">References</th>
					<th style="text-align:center; vertical-align:middle">W2</th>
					<th style="text-align:center; vertical-align:middle">Action</th>
					<th style="text-align:center; vertical-align:middle">Comments</th>
		          </tr>
		        </thead>
		        <tbody>
		         <?php 
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
					echo "<tr class=\"";
					$perComplete = calcPercentComplete("single",$row['p_id']);
					if($perComplete==100){
						echo "success";
					}
					elseif($perComplete==0){
						echo "error";
					}
					else{
						echo "warning";
					}
					echo "\" ><td style=\"vertical-align:middle;\">".$row['firstname']." ".$row['lastname']."</td>
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
				?>
		        </tbody>
		      </table>
		    </div>
		  </span>

		</div>
		

		<div id="footer">
		  <div class="container">
		    <p class="muted credit">Rentista <a href="#">Footer</a> </p>
		  </div>
		</div>

	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>