<?php

  $mail_to      = 'info@worldnow.com';
  $mail_from    = 'no-reply@worldnow.com';
  $mail_subject = 'WN Contact Form';
  $mail_server  = 'webmail.worldnow.com';
  $mail_port    = 25;

  $result = '';
  if (isset($_POST['submit'])) {
    $name    = @$_POST['name'];
    $email   = @$_POST['email'];
    $company = @$_POST['company'];
    $message = @$_POST['message'];

    if (!$name || !$email || !$company || !$message) {
      $result = "Please fill in all four fields.";

    } else {
      ini_set('SMTP',          $mail_server);
      ini_set('smtp_port',     $mail_port);
      ini_set('sendmail_from', $mail_from);
      $body = "NAME: $name\r\n" .
              "EMAIL ADDRESS: $email\r\n" .
              "COMPANY: $company\r\n" .
              "\r\n" .
              "MESSAGE: $message";
      $headers = "From: $mail_from";

      if (mail($mail_to, $mail_subject, $body, $headers)) {
        $result = "Your message has been sent.";
        $name = $email = $company = $message = '';

      } else {
        $result = "There was a problem sending your message.";
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'php/header.php' ?>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA6jc8JLWYS9lUUbmCFjPTT77p0XNgdo8M&sensor=false"></script>
    <script type="text/javascript">
		$(function() {
			function initialize() {
				var myLatlng = new google.maps.LatLng(40.7505,-73.938956);
				
				var mapOptions = {
					center: myLatlng,
					zoom: 17,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
				
				var markerImg = 'images/map_pin.png';
				var marker = new google.maps.Marker({
				      position: myLatlng,
				      map: map,
				      title:"Worldnow HQ",
					  icon: markerImg
				  });
			}
			initialize();
		});
    </script>
</head>
<body>
	<header class="orange">
		<nav>
			<?php include 'php/nav.php' ?>
		</nav>
		<div class="header_content_center">
			<h5>Contact Us</h5>
			<?php include 'php/social_links.php' ?>
		</div>
	</header>
	<div id="one">
		<div id="two">
			<img src="images/orange_band.png" id="orange_band"/>
		</div>
	</div>
	<div id="building">
		<div class="body_content_center">
			<div id="wn_address">
				<h2>Worldnow Headquarters</h2>
				<h2>Queens New York</h2>
				<h2>27-01 Queens Plaza North, Suite 502</h2>
				<h2>Long Island City, NY 11101</h2>
				<a href="https://maps.google.com/maps?q=worldnow&hl=en&ll=40.761041,-73.953266&spn=0.060916,0.059052&sll=40.771655,-73.967595&sspn=0.060906,0.059052&t=h&hq=worldnow&z=14"  target="_blank"><br/>Full Map &#38; Directions</a>
			</div>
		</div>
	</div>
	<div id="contact_us">
		<div class="body_content_center">
			<div class="text_column">
				<h2>Contact Us</h2>
				<p> If you have a project or company that requires creative input, please drop us a line or give us a call. We are passionate, enthusiastic and are always ready for the next challenge.</p><br/>

				<p>We are based in Queens New York, but deal with clients all over the country - so don't be afraid to contact us from wherever you are. Please fill out the form and a member of our team will be in touch with you soon.</p><br/><br/>

				<span id="phone"><p>212.931.1200</p></span>
				<span id="fax"><p>212.931.1299</p></span>

			</div>
			  <!-- THIS IS THE MESSAGE BOX -->
			<?php if ($result) { ?>
			  <div id="form_message_box">
			    <?php echo $result; ?>
			  </div>
			<?php } ?>
			  <!-- THIS IS THE FORM -->
			  <form id="wn_contact_form" name="contactUs" action="contact_us.php" method="post">
			    <input id="contact_input" type="text" name="name" value="<?php echo htmlentities(@$name); ?>" placeholder="Name">
			    <input id="contact_input" type="text" name="email" value="<?php echo htmlentities(@$email); ?>" placeholder="Email Address">
			    <input id="contact_input" type="text" name="company" value="<?php echo htmlentities(@$company); ?>" placeholder="Company Name">
			    <textarea rows="5" cols="25" name="message" placeholder="What can we help you with?"><?php echo htmlentities(@$message); ?></textarea>
			    <button type="submit" name="submit">
			      <span>Send</span>
			    </button>
			  </form>
		</div>
	</div>
	<div id="directions">
		<div id="map_canvas" style="width:100%; height: 500px;"></div>
	</div>
	<footer>
		<?php include 'php/footer.php' ?>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>