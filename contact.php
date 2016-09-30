<!DOCTYPE html>
<!--[if IE ]>
   <html class="ie">
<![endif]-->
<!--[if !IE]>-->
   <html>
<!--<![endif]-->
<head>
	<?php
		require_once 'includes/templates/head.phtml';
	?>
</head>
<body id="contact-page">
	<nav>
		<?php
			$activePage = 'contact';
			require 'includes/templates/nav.phtml';
		?>
	</nav>
	<div id="page-content">
		<header>
			<div id="intro">
				<h1>Contact Me</h1>
				<p class="page-description">feel free to contact me!</p>
			</div>
		</header>
		<main>
			<div class="content-container">
				<div class="content contact-info-container">
					<div class="contact-info" id="address">
						<h3>Location</h3>
						<p>Liverpool</p>
					</div>
					<div class="contact-info" id="number">
						<h3>Phone Number</h3>
						<a href="tel:+447710806992">07710806992</a>
					</div>
					<div class="contact-info" id="email">
						<h3>Email</h3>
						<a href="mailto:j.j.isaacs@hotmail.co.uk">j.j.isaacs@hotmail.co.uk</a>
					</div>
				</div>
			</div>
			<div class="content-container alt">
				<div class="content">
					<form>
						<label for="email-message">Send an Email:</label><br>
						<textarea type="text" id="email-name" rows="1" placeholder="Name..."></textarea>
						<textarea type="email" id="email-address" rows="1" placeholder="Email Address..."></textarea>
						<textarea type="text" id="email-message" rows="10" placeholder="send me a message..."></textarea>
						<button id="email-button">send</button>
					</form>
				</div>
			</div>
			<div id="map" class="content">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152174.11404337193!2d-3.050929566410403!3d53.4198240484585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487adf8a647060b7%3A0x42dc046f3f176e01!2sLiverpool!5e0!3m2!1sen!2suk!4v1475136573673" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</main>
	</div>
	<footer>
		<?php
			require 'includes/templates/footer.phtml';
		?>
	</footer>
</body>
</html>