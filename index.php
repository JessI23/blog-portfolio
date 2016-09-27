<!DOCTYPE html>
<html>
<head>
	<?php
		require 'includes/head.phtml';
	?>
</head>
<body>
	<nav>
		<?php
			$activePage = 'home';
			require 'includes/nav.phtml';
		?>
	</nav>
	<main id="single-main">
		<div id="site-title">
			<h1>Jessica<br>Isaacs</h1>
		</div>
		<div id="site-intro">
			<h1>Welcome</h1>
			<p>to my site. this is an online portfolio of my work and everything you need to know about me.</p>
		</div>
	</main>
	<footer>
		<?php
			require 'includes/footer.phtml';
		?>
	</footer>
</body>
</html>