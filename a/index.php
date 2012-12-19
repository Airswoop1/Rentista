<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/header.php' ?>
	<!-- formats Twitter time into human readable time -->
	<script src="js/wn_time_ago.js"></script>
</head>
<body>
	<header id="home">
		<nav>
			<?php include 'php/nav.php' ?>
		</nav>
		<div id="rotator_header">
			<div class="homepage_rotator current">
				<img src="images/home_r1.png" />
				<div class="slide_content">
					<h1>Powering Local<br/> Television's Future</h1>
					<p> Providing local broadcasters the best<br> technology, service and strategies to drive <br>their audience and revenue.</p>
					<a href="about_us.php"></a>
				</div>
			</div>
			<div class="homepage_rotator">
				<img src="images/home_r2.png" />
				<div class="slide_content">
					<h1>Video Services</h1>
					<p>Worldnow's video platform dominance is driven<br/> by its patent-pending technology designed<br/>specifically for local media enterprises.</p>
					<a href="video.php"></a>
				</div>
			</div>
			<div class="homepage_rotator">
				<img src="images/home_r3.png" />
				<div class="slide_content">
					<h1>Local Media CMS</h1>
					<p>With more than 13 years of digital media<br/> experience, Worldnow has developed the most<br/> efficient and flexible content management<br/> system in the media industry.</p>
					<a href="cms.php"></a>
				</div>
			</div>
			<div class="homepage_rotator">
				<img src="images/home_r4.png" />
				<div class="slide_content">
					<h1>Mobile Solutions</h1>
					<p>Build, optimize and manage your mobile<br/>site directly, via a single workflow with superior<br/>adaptive design.</p>
					<a href="mobile.php"></a>
				</div>
			</div>
			<div class="homepage_rotator">
				<img src="images/home_r5.png" />
				<div class="slide_content">
					<h1>Revenue Solutions</h1>
					<p>We are an industry leader in creating local<br/> and national ad revenue for our clients because<br/> we offer advertisers the ability to deliver video<br/>and rich media advertisements to your network.</p>
					<a href="revenue.php"></a>
				</div>
			</div>
			<?php include 'php/social_links.php' ?>
		</div>
	</header>
	<div id="rotator_nav">
		<div class="body_content_center">
			<ul id="large_nav">
				<li class="no_bullet"><img class="left_arrow" src="images/home_rotator_arrowL.png"></li>
				<li><a href="javascript:void(0)" class="current">Worldnow</a></li>
				<li><a href="javascript:void(0)">Video</a></li>
				<li><a href="javascript:void(0)">CMS</a></li>
				<li><a href="javascript:void(0)">Mobile</a></li>
				<li class="no_bullet"><a href="javascript:void(0)">Revenue</a></li>
				<li class="no_bullet"><img class="right_arrow" src="images/home_rotator_arrowR.png"></li>
			</ul>
			<!-- responsive rotator nav -->
			<ul id="small_nav">
				<li class="no_bullet"><img class="left_arrow" src="images/home_rotator_arrowL.png"></li>
				<li><a href="javascript:void(0)" class="current">•</a></li>
				<li><a href="javascript:void(0)">•</a></li>
				<li><a href="javascript:void(0)">•</a></li>
				<li><a href="javascript:void(0)">•</a></li>
				<li class="no_bullet"><a href="javascript:void(0)">•</a></li>
				<li class="no_bullet"><img class="right_arrow" src="images/home_rotator_arrowR.png"></li>
			</ul>
		</div>												
	</div>
	<div class="body_content_center">
		<div id="home_left_column">
			<div id="experts">
				<div class="home_contents">
					<h3>Meet our Experts</h3>
					<p>Our Subject Matter Experts are specialists in their fields with over 140 years of combined experience. Our SMEs can provide insight on every subject from analytics, technology, and advertising to customized strategies and more.</p>
					<a class="more" href="experts.php"></a>
				</div>
				<img src="images/meet_experts.png">
			</div>
			<div id="sol_serv">
				<div class="home_contents">
					<h3>Amplify your reach...</h3>
					<p>Our technology allows TV stations to publish their content to the web, mobile and social networks simultaneously, amplifying their audience reach instantly.</p>
					<a class="more" href="solutions.php"></a>
				</div>
				<img src="images/amplify.png">
			</div>
		</div>
		<div id="home_right_column">
			<div id="testimonials">
                <img src="images/stats/uniquevisitors.png">
				<img src="images/stats/pageviews.png">
                <img src="images/stats/pre-roll.png">
                <img src="images/stats/video.png">
	
			</div>
			<ul id="testimonial_nav">
				
			</ul>
			<div id="twitter_stream">
				<h2>Recent News</h2>
				<div id="twitter_wrapper">
					<div id="tweet_stream" class="social_entries">
					</div>
				</div>
				<a class="more" href="http://twitter.com/WorldnowNews" target="_blank"></a>	
			</div>
		</div>
	</div>
	<footer>
		<?php include 'php/footer.php' ?>
	</footer>
	<script src="js/scripts.js"></script>
	<script src="js/twitter_feed.js"></script>
</body>
</html>