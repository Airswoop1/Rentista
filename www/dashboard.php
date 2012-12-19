<!DOCTYPE html>
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
<body>
	<div id="wrap">

		<!-- Main Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
			  <div class="container">
			    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			      <span class="icon-bar">1</span>
			      <span class="icon-bar">2</span>
			      <span class="icon-bar">3</span>
			    </a>
			    <a class="brand" href="#">CitiHabitats Portal</a>
			    <div class="nav-collapse collapse">
			      <ul class="nav">
			        <li class="active"><a href="#">My Portal</a></li>
			        <li><a href="#about">Help</a></li>
			        <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log Out <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
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
								<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/c50.50.621.621/s160x160/18707_10103647273167224_1201216139_n.jpg">
							</a>
						</div>
						<div class="span4">
							<p>Prospect</p>
				      <p class="prospect_name"><strong>Johnny Tenantbaum</strong></p>
							<!-- <span class=" badge badge-warning">8 messages</span> <span class=" badge badge-info">15 followers</span> -->
							<div id="badge_progress">
								<a href="#" class="task_badge"></a>
								<a href="#" class="task_badge"></a>
								<a href="#" class="task_badge"></a>
								<a href="#" class="task_badge"></a>
								<a href="#" class="task_badge"></a>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>

		<!-- Intro Well -->
		<div class="cntr_contain">
			<div class="intro well">
				<h4>Welcome to your CitHabitats Prospect Portal</h4>
				<p>File Upload widget with multiple file selection, drag&drop support, progress bars and preview images for jQuery.
Supports cross-domain, chunked and resumable file uploads and client-side image resizing.
Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
			</div>
		</div>

		<!-- Main Dashboard -->
		<div id="dash_contain">
			<!-- Left Column -->
			<div id="dash_lCol">
				<h4>Tasks</h4>

		<!-- Experimental Table
		<table class="table table-condensed table-hover">
    <thead>
    <tr>
    <th class="span1"></th>
    <th class="span3"></th>
    <th class="span2"></th>
    <th class="span4"></th>
    <th class="span2"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
    <td><strong>Broker Agreement</strong></td>
    <td><span class="label pull-right">Notifications</span></td>
    <td><strong>Message body goes here</strong></td>
    <td><strong>11:23 PM</strong></td>
    </tr>
    </tbody>
    </table>
  	-->



				<!-- Tasks -->
				<ul>
					<li id="agree" class="task first">
						<div class="banner">
							<h4>Broker Exclusivity Agreement</h4><span class="label label-important">Incomplete</span>
						</div>
						<!-- Button to trigger modal -->
    					<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 
					    <!-- Modal -->
					    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							    <h3 id="myModalLabel">Broker Exclusivity Agreement</h3>
						    </div>
					    	<div class="modal-body">
					    		<p>On all NO FEE marked apartments, you must negotiate through Peter*Ashe ONLY, failing to negotiate through Peter*Ashe and obtain the apartment through other sources will obligate you, the tenant, to pay Peter*Ashe the commission and expenses of collecting such fee, including attorney’s fee, according to this agreement. On all rental buildings, this agreement shall apply to all future availability of any apartments.</p>
									<p>You understand that remittance for such commission shall be due in full upon signing the lease agreement for an apartment or property shown to you by Peter*Ashe, made payable via certified check to Peter*Ashe. The brokerage commission shall be refunded to you in the event that a lease agreement is not executed or you fail to qualify.</p>
									<p>In the event that you purchase a property initially shown to you by Peter*Ashe for rental purposes, Peter*Ashe will be recognized as the broker of record and you agree to remit payment for brokerage commission in the amount equivalent to six (6%) percent of the total purchase price, less any rental commission if already paid, at closing.</p>
									<p>Peter*Ashe will use its best efforts to represent your interests in the procurement of an apartment/property. You understand that in the event that you rent or buy an apartment or property shown to you by Peter*Ashe through the service of a broker other than Peter*Ashe or through the seller/owner directly, you will still be responsible for paying the entire commission due to Peter*Ashe. You understand that Peter*Ashe is not responsible for the repair, maintenance of the property, or any other aspect of the management. You hereby acknowledge that Peter*Ashe has disclosed to you that it may collect a real estate brokerage commission from both the Buyer/Tenant, through its agent, and the Seller/Landlord in connection with the sale/rent of the referenced properties; and that it may represent both Buyer/Tenant and Seller/Landlord for certain properties. We represent the Purchaser/ Tenant with respect to the exclusive listings of another brokerage firm. We represent the Seller/Landlord on our firm’s exclusive listings and all open listings.</p>
									<p>Any claim that you may have arising from the services provided to you by Peter*Ashe shall be limited to the amount of the brokerage commission. You shall be responsible for all and any fees, including but not limited to attorney’s fees with regards to collecting and or enforcing this agreement. Any disputes arising from this agreement shall be subject to settlement solely by binding arbitration under the rules and jurisdiction of the Real Estate Board of New York, Inc.</p>
									<p>By signing below, you understand that you have authorized Peter*Ashe to act as your agent for the procurement of a rental/purchase apartment/property. This agreement can change only by the Peter*Ashe manager in writing.</p>
					    	</div>
					    	<div class="modal-footer">
					    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					    		<button class="btn btn-primary">I Agree</button>
					    	</div>
					    </div>			
					</li>
					<li id="tax" class="task">
						<div class="banner">
							<h4>Tax Returns</h4><span class="label label-important">Incomplete</span>
						</div>
						<!-- The file upload form used as target for the file upload widget -->
					    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
					        <!-- Redirect browsers with JavaScript disabled to the origin page -->
					        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
					        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
					        <div class="row fileupload-buttonbar">
					            <div class="span7">
					                <!-- The fileinput-button span is used to style the file input field as button -->
					                <span class="btn btn-success fileinput-button">
					                    <i class="icon-plus icon-white"></i>
					                    <span>Add files...</span>
					                    <input type="file" name="files[]" multiple>
					                </span>
					            </div>
					            <!-- The global progress information -->
					            <div class="span5 fileupload-progress fade">
					                <!-- The global progress bar -->
					                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
					                    <div class="bar" style="width:0%;"></div>
					                </div>
					                <!-- The extended global progress information -->
					                <div class="progress-extended">&nbsp;</div>
					            </div>
					        </div>
					        <!-- The loading indicator is shown during file processing -->
					        <div class="fileupload-loading"></div>
					        <br>
					        <!-- The table listing the files available for upload/download -->
					        <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
					    </form>				
					</li>

					<li id="references" class="task">
						<div class="row">
							<div class="span5">
								<h4><a href="#">Lesson 1</a></h4>
								<p>Overview of the course, prerequisites, instructor contact information, syllabus, location information</p>
							</div>
							<div class="span3">
								Progress: <span class="pull-right strong">36%</span>
								<div class="progress">
									<div class="bar" style="width: 36%;"></div>
								</div>
							</div>
						</div>
						<hr>
					</li>
					<li class="task">
						<h4>Photo ID</h4>
					</li>
					<li class="task">
						<h4>Employment Letter</h4>
					</li>
					<li class="task">
						<h4>W-2 Form</h4>
					</li>
					<li class="task last">
						<h4>Bank Statements</h4>
					</li>
				</ul>
			</div>

			<!-- Right Column -->
			<div id="dash_rCol">
				<h4>Progress</h4>

				<!-- Group Progress -->
				<div id="group" class="rCol">
					<span>Team Progress</span>
					<div class="pad">
	  				<ul>
	  					<li class="first">
	  						<img src="http://dribbble.s3.amazonaws.com/users/14268/avatars/original/me.jpg?1335028411">
	  						<p>Other Prospect 1</p>
	  						<div class="progress progress-warning">
	  							<div class="bar" style="width: 50%;" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" rel="popover" class="btn" href="#" data-original-title="Popover on top"></div>
	  						</div>
	  					</li>
	  					<li>
	  						<img src="http://dribbble.s3.amazonaws.com/users/3856/avatars/original/littlenono.png?1330635344">
	  						<p>Other Prospect 2</p>
	  						<div class="progress progress-success">
	  							<div class="bar" style="width: 80%;" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" rel="popover" class="btn" href="#" data-original-title="Popover on top"></div>
	  						</div>
	  					</li>
	  					<li>
	  						<img src="http://dribbble.s3.amazonaws.com/users/41613/avatars/original/av.png?1314126990">
	  						<p>Other Prospect 3</p>
	  						<div class="progress progress-warning">
	  							<div class="bar" style="width: 50%;" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" rel="popover" class="btn" href="#" data-original-title="Popover on top"></div>
	  						</div>
	  					</li>
	  					<li class="last">
	  						<img src="http://dribbble.s3.amazonaws.com/users/96287/avatars/original/Screen%20shot%202012-03-12%20at%202.58.41%20PM.png?1331578761">
	  						<p>Other Prospect 4</p>
	  						<div class="progress progress-danger">
	  							<div class="bar" style="width: 20%;" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" rel="popover" class="btn" href="#" data-original-title="Popover on top"></div>
	  						</div>
	  					</li>
	  				</ul>
	  			</div>
				</div>
			</div>
			<div class="clear_floats"></div>
		</div>

		<!-- Footer -->
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