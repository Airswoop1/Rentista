<div id="nav_center">
	<a href="../index.php"><img src="images/wn_logo.png"></a>
	<ul>
		<li><a href="../index.php">Home</a></li>
		<li class="touched"><a href="../solutions.php">Solutions</a>
			<ul>
				<li><a href="../cms.php">CMS</a></li>
				<li><a href="../revenue.php">Revenue Solutions</a></li>
				<li><a href="../video.php">Video</a></li>
				<li><a href="../mobile.php">Mobile Solutions</a></li>
			</ul>
		</li>
		<li><a href="../services.php">Services</a></li>
		<li><a href="../experts.php">Experts</a></li>
		<li><a href="../clients_partners.php">Clients &#38; Partners</a></li>
		<li><a href="../testimonials.php">Testimonials</a></li>
		<li class="touched"><a href="../about_us.php">About Us</a>
			<ul>
				<li><a href="../work.php">Our Work</a></li>
				<li><a href="../executive_team.php">Executive Team</a></li>
				<li><a href="../careers.php">Careers</a></li>
			</ul>
		</li>
		<li><a href="../contact_us.php">Contact Us</a></li>
	</ul>
	<select> <!-- Responsive Navigation -->
		<option value="../index.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== FALSE) echo ' selected'; ?>>Home</option>
		<option value="../solutions.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'solutions.php') !== FALSE) echo ' selected'; ?>>Solutions</option>
		<option value="../services.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'services.php') !== FALSE) echo ' selected'; ?>>Services</option>
		<option value="../experts.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'experts.php') !== FALSE) echo ' selected'; ?>>Experts</option>
		<option value="../clients_partners.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'clients_partners.php') !== FALSE) echo ' selected'; ?>>Clients &#38; Partners</option>
		<option value="../testimonials.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'testimonials.php') !== FALSE) echo ' selected'; ?>>Testimonials</option>
		<option value="../about_us.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'about_us.php') !== FALSE) echo ' selected'; ?>>About Us</option>
		<option value="../work.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'work.php') !== FALSE) echo ' selected'; ?>>Our Work</option>
		<option value="../contact_us.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'contact_us.php') !== FALSE) echo ' selected'; ?>>Contact Us</option>
		<option value="../executive_team.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'executive_team.php') !== FALSE) echo ' selected'; ?>>Executive Team</option>
		<option value="../careers.php"<?php if (stripos($_SERVER['REQUEST_URI'], 'careers.php') !== FALSE) echo ' selected'; ?>>Careers</option>
	</select>
</div>

