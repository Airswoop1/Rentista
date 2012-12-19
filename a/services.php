<!DOCTYPE php>
<php lang="en">
<head>
	<?php include 'php/header.php' ?>
</head>
<body>
	<header class="orange">
		<nav>
			<?php include 'php/nav.php' ?>
		</nav>
		<div class="header_content_center services">
			<h5 class="header_center">Worldnow Services</h5>
			<div id="services_nav">
				<ul>
					<li><a  id="tech_link" href="javascript:void(0)"><img src="images/services1.png" width="110" height="110"/><span>Technical<br/>Support</span></a></li>
					<li><a id="design_link" href="javascript:void(0)"><img src="images/services2.png" width="110" height="110"/><span>Design<br/>Services</span></a></li>
					<li><a id="custom_link" href="javascript:void(0)"><img src="images/services3.png" width="110" height="110"/><span>Custom<br/>Development</span></a></li>
					<li><a id="adop_link" href="javascript:void(0)"><img src="images/services4.png" width="110" height="110"/><span>Ad Operations<br/>& Management</span></a></li>
					<li><a id="adprod_link" href="javascript:void(0)"><img src="images/services5.png" width="110" height="110"/><span>Ad Production</span></a></li>
					<li><a id="stat_link" href="javascript:void(0)"><img src="images/services6.png" width="110" height="110"/><span>Strategic<br/>Consultation</span></a></li>
					<li><a id="cs_link" href="javascript:void(0)"><img src="images/services7.png" width="110" height="110"/><span>Client<br/>Services</span></a></li>
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
	<div class="body_content_center">
<!-- Service Block -->
		<div id="technical_support" class="serv_l">
			<div class="serv_contain">
				<a><img src="images/technical_support.png" /></a>
			</div>
			<div class="serv_content">
				<h2>Technical Support</h2>
				<p>WorldNow provides technical support, issue resolution and real-time response to software or hardware-related questions and problems, 24 hours a day, seven days a week.</p>
			</div>
		</div>
<!-- Service Block -->		
		<div id="design_services" class="serv_r">
			<div class="serv_content">
				<h2>Design Services</h2>
				<p>WorldNow's talented team of creative professionals creates custom-designed consumer experiences that leverage each client's unique, local brand identity and market coverage strategy.</p>
			</div>
			<div class="serv_contain">
				<a><img src="images/design_services.png" /></a>
			</div>
		</div>
<!-- Service Block -->		
		<div id="custom_development" class="serv_l">
			<div class="serv_contain">
				<img src="images/custom_development.png" />
			</div>
			<div class="serv_content">
				<h2>Custom Development</h2>
				<p>Our Interactive Media Development Team creates custom designs that meet the unique goals of each client. We work with your staff to define requirements, design elements and develop functionality for features such as top story rotators, weather display applications and more.</p>
			</div>
		</div>
<!-- Service Block -->		 
		<div id="ad_ops" class="serv_r">
			<div class="serv_content">
				<h2>Ad Operations &#38; Management</h2>
				<p>Worldnow’s online advertising operations and management team’s mission is to increase local revenue by scheduling, optimizing, tracking and measuring local interactive marketing campaigns within Worldnow’s management tool. This team is comprised of professional multi-media producers who ensure campaigns launch quickly and effectively and relieve sales managers of production responsibilities so they can focus on selling.</p>
			</div>
			<div class="serv_contain">
				<a><img src="images/adops_management.png" /></a>
			</div>
		</div>
<!-- Service Block -->		
		<div id="ad_production" class="serv_l">
			<div class="serv_contain">
				<a><img src="images/ad_production.png" /></a>
			</div>
			<div class="serv_content edit"> <!-- Edit class needed for altering margins when responsive scaling -->
				<h2>Ad Production</h2>
				<p>WorldNow's online advertising production team is focused on creating unique, interactive marketing campaigns that increase local revenue. Each member of the professional services team is skilled in graphic creation, online advertising standards, best practices and project management.</p>
				<a href="ad_production.php">Find out more</a>
			</div>
		</div>
<!-- Service Block -->		
		<div id="strat_consult" class="serv_r">
			<div class="serv_content edit"> <!-- Edit class needed for altering margins when responsive scaling -->
				<h2>Strategic Consultation</h2>
				<p>WorldNow embraces a core philosophy that our job only begins with the launch of each site. We understand that an integrated local media strategy is not a "one-size-fits-all solution". Our on-going strategic consultation focuses on helping clients clarify their market position by creating customized  site plans to identify opportunities, create great content, grow audience and increase revenue. Our proven results stem from over 14 years experience.</p>
				<a href="strategic_consultation.php">Find out more</a>
			</div>
			<div class="serv_contain">
				<a><img src="images/strategic_consultation.png" /></a>
			</div>
		</div>
<!-- Service Block -->		
		<div id="client_services" class="serv_l last">
			<div class="serv_contain">
				<a><img src="images/client_services.png" /></a>
			</div>
			<div class="serv_content">
				<h2>Client Services</h2>
				<p>Each Worldnow client receives the support of a dedicated Client Services Manager who acts as a “front-line” day-to-day contact for each site and the group. Worldnow’s Client Services team manages the site launch process and provide in-market training and ongoing consulting services to news, sales and promotion staffs.</p>
				<a href="client_services.php">Find out more</a>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'php/footer.php' ?>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</php>