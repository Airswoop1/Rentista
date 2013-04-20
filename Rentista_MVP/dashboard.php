<!DOCTYPE html>

<?php
include './prospectWelcome.php';

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
					<div data-spy="affix" data-offset-top="162" class="nav_contain"> <!-- Contain col for affix -->
						<!--<i class="icon-th-list"></i>--><h4>Checklist</h4>
						<ul class="nav nav-tabs nav-stacked">
	    				<li><a href="#broker" 
	    					<?php if($registrationFlag!=null){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Broker Agreement</a></li>
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
	    				<li><a href="#bank_statement" <?php if($BS1=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Bank Statement</a></li>
	    				<li><a href="#photo_id" 
	    					<?php if($ID=="Received"){
	    						echo "style=\"color:green\"><i  class=\"icon-ok-sign\" ";
	    					}
	    					else{
	    						echo "style=\"color:red\"><i class=\"icon-remove-sign\"";
	    					}
	    				?>></i>Identification</a></li>
    				</ul>
    				<ul class="nav nav-tabs nav-stacked" id="personal_progress">
    					<li><a href="">
    						<?php
    						echo "You are ".$percent."% complete!"
    						?>
    					</a></li>
    				</ul>
    				<h4>Roommate Progress</h4>
    				<ul class="nav nav-tabs nav-stacked" id="roommate_progress">
    					<?php
    					for($i=0;$i<$numOtherProspects;$i++){
    						echo "<li><img src=\"./assets/genericUser.jpg\"><a href=\"\" >$otherProspectFirstName[$i] has $otherProspectPerComp[$i]% complete</a></li>";
    				}
    				?>
    				</ul>
    				<div class="span12" style="bottom-padding=12px"></div>
    			</div>
				</div>
				<div class="span9" id="main">
				<?php if($registrationFlag==null){
					?>
				
					<h4>Broker Agreement</h4>
					<div id="broker" class="hero-unit">
						<a href="#" class="task_badge"></a>
						<!-- Button to trigger modal -->
  					<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

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
				    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				    		<button class="btn btn-primary">I Agree</button>
				    	</div>
				    </div>		
					</div>
					<?php 
				}


					?>
					<h4>Upload Documents</h4>


					<!-- Uploader -->
					<div id="employ_letter" class="hero-unit">
						<a href="#" class="task_badge"></a>


							<form name="docUpload" action="prospectUpload.php" method="POST" enctype="multipart/form-data" >
							<div><select class = "btn" name="docUploadDropdown">
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

							<input class="btn btn-success fileinput-button" type="submit" value="submitFile" name="submit"> 
							</form>

						

					</div>

					<!--
					<h4>PayStub</h4>
					<div id="pay_stub" class="hero-unit">
						<a href="#" class="task_badge"></a>
					</div>
					<h4>Tax Return</h4>
					<div id="tax_return" class="hero-unit">
						<a href="#" class="task_badge"></a>
					</div>
					<h4>References</h4>
					<div id="references" class="hero-unit">
						<a href="#" class="task_badge"></a>
					</div>
					<h4>Bank Statement</h4>
					<div id="bank_statement" class="hero-unit">
						<a href="#" class="task_badge"></a>
					</div>
					<h4>Identification</h4>
					<div id="photo_id" class="hero-unit">
						<a href="#" class="task_badge"></a>
					</div>
					//-->
				</div>
			</div>

		</div>



		<!-- Footer 
		<div id="footer">
		  <div class="container">
		    <p class="muted credit">Rentista <a href="#">Footer</a> </p>
		  </div>
		</div>-->

	</div>
	<!-- Scripts -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>