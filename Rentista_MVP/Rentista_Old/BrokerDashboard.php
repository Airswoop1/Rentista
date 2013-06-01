<!DOCTYPE html>

<?php
include './brokerWelcome.php';

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
		<div class="navbar second">
			<div class="cntr_contain">
				<!-- Prospect -->
				<div class="span6 prospect">
					<div class="row">
						<div class="span2">
							<a href="#TODO" class="thumbnail">
								<img src="./assets/genericUser.jpg">
							</a>
						</div>
						<div class="span4">
							<p>Broker</p>
				      <p class="prospect_name"><strong>Joey Broker of Broker Properties</strong></p>
						</div>
					</div>
				</div>
		
			</div>
		</div>

		<div class="row-fluid">
		  <span class="span2 offset2">
		    <h3>Actions</h3>
		    <ul class="nav">
		      <li>
		        <a href="#">Prospect Groups</a>
		      </li>
		      <li>
		        <a href="#">Add Group</a>
		      </li>
		      <li>
		        <a href="#"></a>
		      </li>
		      <li>
		        <a href="#">Edit Profile</a>
		      </li>
		    </ul>
		  </span>
		  <span class="span7 offset-1">
		    <h3 >Prospect Group Status</h3>
		    <div>
		      <table class="table table-striped table-bordered pull-center">
		        <thead>
		          <tr>
		            <th class="th-1">Group ID</th>
		            <th class="th-1">Property</th>
		            <th class="th-1">Unit</th>
		            <th class="th-1">% Complete</th>
		          </tr>
		        </thead>
		        <tbody>
		         <?php 
		          for($i=0;$i<$numGroups; $i++){
						$row2 = $result2->fetch_assoc();
						echo "<tr><td align=\"center\"><a href=\"brokerDashboardGroupDetail.php?groupID=".$row2['g_id']."\">".$row2['g_id']."</td><td>".
						$row2['property']."</td><td>".$row2['unit']."</td><td align=\"center\">".calcPercentComplete("group",$row2['g_id'])."%</td><tr>";
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