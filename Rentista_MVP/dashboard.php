<!DOCTYPE html>

<?php
session_start();
include './prospectWelcome.php';
$_SESSION['prospectID_S'] = $prospectID;
error_log($_SESSION['prospectID_S']);
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
<script type="text/javascript">
function rentalAgreement(value){
	$.post(
		'updateFunction.php',
		{prospectID:"<?php echo $prospectID;?>"},
		function(){
	
		if(value=='true'){
		$('#myModal').modal('hide');
		var brokerAgreementBox = document.getElementById('brokerAgreementModalButton');
		brokerAgreementBox.style.visibility = 'hidden';
		var brokerAgreeHeader = document.getElementById('brokerAgreementHeader');
		brokerAgreeHeader.style.visibility = 'hidden';

		document.getElementById('noRegFlagMove').appendChild(
			document.getElementById('uploadHeader')
			);
		document.getElementById('noRegFlagMove').appendChild(
			document.getElementById('uploadBox')
			);

		var brokerAgTag = document.getElementById('brokerAgreementTag');
		brokerAgTag.style.color = "green";
		brokerAgTag.class = "icon-ok-sign";
	}
	});
};

</script>
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
				<div class="span6 	prospect">
					<div class="row">
						<div class="span2">
							<a href="#TODO" class="thumbnail">
								<img src="./assets/genericUser.jpg">
							</a>
						</div>
						<div class="span4">
							<p>Prospect</p>
				      <p class="prospect_name"><strong><?php echo $firstname; echo " "; echo $lastname;?></strong></p>
						</div>
					</div>
				</div>
		
			</div>
		</div>


		<div class="container">

			<div id="col1" class="row">
				<div id="col1_nav" class="span3">
					<div data-offset-top="162" class="nav_container">
					<h4>Agreement</h4>
						<li class="nav">
		    				<a id="brokerAgreementTag" href="#broker" 
		    					<?php if($registrationFlag!=null){
		    						echo "style=\"color:green; \"><i  class=\"icon-ok-sign\" ";
		    					}
		    					else{
		    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
		    					}
		    				?>></i>  Broker Agreement</a> 
						</li>
					 <!-- Contain col for affix -->
						<!--<i class="icon-th-list"></i>--><h4 style="margin-top:-20px">Required Documents</h4>
	    				
	    				<ul class="nav nav-pills nav-stacked">
 	    				<li><a href="#photo_id" 
	    					<?php if($ID=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Identification</a></li>
	    				<li><a href="#employ_letter" 
	    					<?php if($EL=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Employment Letter</a></li>
	    				<li><a href="#pay_stub" 
	    					<?php if($PS=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>	 ></i>Pay Stub</a></li>
	    				<li><a href="#tax_return"<?php if($W2=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>	 >></i>Tax Return</a></li>
	    				<li><a href="#references"<?php if($REF=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>	 >></i>References</a></li>
	    				<li><a href="#bank_statement1" <?php if($BS1=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Bank Statement 1</a></li>
	    				<li><a href="#bank_statement1" <?php if($BS2=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Bank Statement 2</a></li>
    				</ul>	
    				<ul class="nav nav-tabs nav-stacked" style="height:10px;margin-top:-20px" id="personal_progress">
    					<li><a href="">
    						<?php
    						echo "You are ".$percent."% complete!"
    						?>
    					</a></li>
    				</ul>
    				<h4 style="margin-top:-60px">Roommate Progress</h4>
    				<ul class="nav nav-tabs nav-stacked" id="roommate_progress">
    					<?php
    					for($i=0;$i<$numOtherProspects;$i++){
    						echo "<li><img src=\"./assets/genericUser.jpg\"><a style=\"font-size:12px\" href=\"\" >$otherProspectFirstName[$i] is $otherProspectPerComp[$i]% complete</a></li>";
    				}
    				?>
    				</ul>

    			</div>
				</div>
				<div class="span9" id="main">
					<div id="noRegFlagMove"></div>
				<?php if($registrationFlag==null){
					?>
				
					<h4 id="brokerAgreementHeader">Broker Agreement</h4>
					<div id="brokerAgreementModalButton" class="hero-unit">
						<a href="#" class="task_badge"></a>
						<!-- Button to trigger modal -->
  					<a href="#myModal" role="button" class="btn" data-toggle="modal">View Registration Agreement</a>

				    <!-- Modal -->
				    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						    <h3 id="myModalLabel">Broker Exclusivity Agreement</h3>
					    </div>
					    	<div class="modal-body"><p>
							Should I lease a residence in a building or complex show to me by Town Real Estate 
							within 90 days of such showing, I agree <br> to pay Town Real Estate a commission of 15% of 
							one years rent. This commission is earned and payable when I sign a lease<br> and/or the 
							landlord gives its approval for said residences</p>
				    	</div>
				    	<div class="modal-footer">
				    		<button class="btn" data-dismiss="modal" aria-hidden="true">I do not agree</button>
				    		<button id="modal-agree-btn" class="btn btn-primary" onclick="rentalAgreement('true')">I Agree</button>
				    	</div>
				    </div>		
					</div>
					<?php 
				}


					?>
					<h4 id="uploadHeader">Upload Documents</h4>
					<!-- Uploader -->
					<div id="uploadBox" class="hero-unit">
						<a href="#" class="task_badge"></a>


							<form name="docUpload" action="prospectUpload.php" method="POST" enctype="multipart/form-data" >
							<div><select class = "btn" name="docUploadDropdown">
									<option value="ID">ID</option>
									<option value="BS1">Bank Statement 1</option>
									<option value="BS2">Bank Statement 2</option>
									<option value="EL">Employment Letter</option>
									<option value="PS">Pay Stub</option>
									<option value="REF">References</option>
									<option value="W2">Tax Return</option>
									</select></div><br>
							<div> <input type="hidden" name="MAX_FILE_SIZE" value="10000000">	
							<input type="file" name="prospectFileUploaded" id="prospectFile"></div>

							<input class="btn btn-success fileinput-button" type="submit" value="submitFile" name="submit"> 
							</form>

						

					</div>

				</div>
			</div>

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