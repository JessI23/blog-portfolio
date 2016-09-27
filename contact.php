<!DOCTYPE html>
<!--[if IE ]>
   <html class="ie">
<![endif]-->
<!--[if !IE]>-->
   <html>
<!--<![endif]-->
<head>
	<?php
		require 'head.phtml';
	?>
</head>
<body id="contact-page">
	<nav>
		<a href="index.php">Home</a>
		<a href="about.php">About Me</a>
		<a href="portfolio.php">Portfolio</a>
		<a href="blog.php">Blog</a>
		<a href="contact.php" id="active">Contact Me</a>
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8106.780737567642!2d-2.8841172208800914!3d53.43477067464337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b1f51e7a1af6f%3A0x92262c90cffb7f60!2s4+N+Cantril+Ave%2C+Liverpool+L12!5e0!3m2!1sen!2suk!4v1473346119285" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</main>
	</div>
	<footer>
		<?php
			require 'footer.phtml';
		?>
	</footer>
</body>
</html>