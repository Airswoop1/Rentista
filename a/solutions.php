<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/header.php' ?>
</head>
<body>
	<header class="orange">
		<nav>
			<?php include 'php/nav.php' ?>
		</nav>
		<div class="header_content_center">
			<h5 class="header_center">Worldnow Solutions</h5>
			<div id="solutions_nav">
				<ul>
					<li><a id="tech_link" href="javascript:void(0)"><img src="images/solutions1.png" /><span>CMS</span></a></li>
					<li><a id="design_link" href="javascript:void(0)"><img src="images/solutions2.png" /><span>Video</span></a></li>
					<li><a id="custom_link" href="javascript:void(0)"><img src="images/solutions3.png" /><span>Mobile</span></a></li>
					<li><a id="adop_link" href="javascript:void(0)"><img src="images/solutions4.png" /><span>Revenue</span></a></li>
				</ul>
			</div>
			<?php include 'php/social_links.php' ?>
		</div>
	</header>
	<div id="one">
		<div id="two">
			<img src="images/orange_band.png" id="orange_band"/>
		</div>
	</div>
	<div id="back_to_top">
		<span>Back to Top</span><a href="javascript:void(0)"><img src="images/backtotop.png"/></a>
	</div>
<!-- Solutions Block -->
	<div class="body_content_center">
		<div id="technical_support" class="sol_l">
			<div class="sol_contain">
				<img src="images/solutions_cms.png" />
			</div>
			<div class="sol_content">
				<h2>Content Management System</h2>
				<p>With more than 13 years of digital media experience, Worldnow has developed the most efficient and flexible browser-based content management system in the media industry. That is why local media clients representing 73 percent of DMAs in the United States leverage WorldNow to distribute their digital content.</p>
				<a href="cms.php">Find out more</a>
			</div>
		</div>
<!-- Solutions Block -->		
		<div id="design_services" class="sol_r">
			<div class="sol_content">
				<h2>Video</h2>
				<p>Worldnow's video platform dominance is driven by its patent-pending technology designed specifically for local media enterprises.  Our feature-rich end-to-end solution encompasses live video broadcasting/streaming, HD encoding, frame-accurate editing and a broad selection of distribution options include web, mobile and connected TV. </p>
				<a href="video.php">Find out more</a>
			</div>
			<div class="sol_contain">
				<img src="images/solutions_video.png" />
			</div>
		</div>
<!-- Solutions Block -->		
		<div id="custom_development" class="sol_l">
			<div class="sol_contain">
				<img src="images/solutions_mobile.png" />
			</div>
			<div class="sol_content">
				<h2>Mobile</h2>
				<p>Worldnow offers a media-focused mobile content management system that allows clients to fully control their consumers' mobile experience via a single workflow. With market leading news and information apps for iPad, iPhone and Android devices and two-way SMS messaging backed by 24/7/365 support, Worldnow offers a flexible and comprehensive mobile solution. </p>
				<a href="mobile.php">Find out more</a>
			</div>
		</div>
<!-- Solutions Block -->		 
		<div id="ad_ops" class="sol_r last">
			<div class="sol_content">
				<h2>Revenue</h2>
				<p>Worldnow is an industry leader in creating local and national advertising revenue for our clients because we offer advertisers the ability to deliver display, video and rich media advertisements to your network of news and information websites. In addition, our experienced sales directors work with local sales teams to build revenue through training and packaged sales projects.</p>
				<a href="revenue.php">Find out more</a>
			</div>
			<div class="sol_contain">
				<img src="images/solutions_revenue.png" />
			</div>
		</div>
	</div>
	<footer>
		<?php include 'php/footer.php' ?>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>