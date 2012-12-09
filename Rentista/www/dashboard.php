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
			        <li class="active"><a href="#">Home</a></li>
			        <li><a href="#about">About</a></li>
			        <li><a href="#contact">Contact</a></li>
			        <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
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
				<img src="http://placehold.it/100x100" class="img-circle tenantPhoto">
			</div>
		</div>

		<!-- Intro Well -->
		<div class="cntr_contain">
			<div class="well">
				<h3>Intro</h3>
				<p>File Upload widget with multiple file selection, drag&drop support, progress bars and preview images for jQuery.
Supports cross-domain, chunked and resumable file uploads and client-side image resizing.
Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
			</div>
		</div>

		<!-- Main Dashboard -->
		<div id="dash_contain">
			<!-- Left Column -->
			<div id="dash_lCol">
				<div id="dash_labels">
					<ul>
						<li>Label 1</li>
						<li>Label 2</li>
						<li>Label 3</li>
						<li>Label 4</li>
					</ul>
				</div>
				<!-- Tasks -->
				<ul>
					<li id="agree" class="task first">
						<h3>Broker Agreement Form</h3>
						<button id="photoID" data-original-title="blahblahblah" class="btn btn-mini btn-primary info_blip" type="button">Mini button</button>
					</li>
					<li id="photo_id" class="task">
						<h3>Indentification</h3>
						<div class="task_inner">
						</div>
					</li>

					<li id="tax" class="task">
						<h3>Tax Returns</h3>
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
				                <button type="submit" class="btn btn-primary start">
				                    <i class="icon-upload icon-white"></i>
				                    <span>Start upload</span>
				                </button>
				                <button type="reset" class="btn btn-warning cancel">
				                    <i class="icon-ban-circle icon-white"></i>
				                    <span>Cancel upload</span>
				                </button>
				                <button type="button" class="btn btn-danger delete">
				                    <i class="icon-trash icon-white"></i>
				                    <span>Delete</span>
				                </button>
				                <input type="checkbox" class="toggle">
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
						<h3>References</h3>
					</li>
					<li class="task">
						<h3>Photo ID</h3>
					</li>
					<li class="task">
						<h3>Photo ID</h3>
					</li>
					<li class="task">
						<h3>Photo ID</h3>
					</li>
					<li class="task last">
						<div class="task_label">
							<p>Photo ID</p>
						</div>
						<h3>Photo ID</h3>
					</li>
				</ul>
			</div>
			<!-- Right Column -->
			<div id="dash_rCol">
				<!-- Prospect Progress -->
				<div id="prospect" class="rCol">
					<p>Prospect Progress</p>
					<!-- Prospect Info Blip -->
					<button data-original-title="blahblahblah" class="btn btn-mini btn-primary info_blip" type="button">i</button>
				  <div class="progress">
  					<div class="bar bar-success" style="width: 00%;"></div>
  				</div>
				</div>
				<!-- Group Progress -->
				<div id="group" class="rCol">
					<p>Team Progress</p>
					<!-- Team Info Blip -->
					<button data-original-title="blahblahblah" class="btn btn-mini btn-primary info_blip" type="button">i</button>
  				<ul>
  					<li class="first"><img src="http://placehold.it/50x50" class="img-circle"></li>
  					<li><img src="http://placehold.it/50x50" class="img-circle"></li>
  					<li><img src="http://placehold.it/50x50" class="img-circle"></li>
  					<li class="last"><img src="http://placehold.it/50x50" class="img-circle"></li>
  				</ul>
				</div>
			</div>
			<div class="clear_floats"></div>
		</div>

		<!-- Footer -->
		<div id="footer">
		  <div class="container">
		    <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
		  </div>
		</div>

	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/backstretch.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>