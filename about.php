<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.phtml';
	?>
<body>
	<nav>
		<a href="index.php">Home</a>
		<a href="about.php" id="active">About Me</a>
		<a href="portfolio.php">Portfolio</a>
		<a href="blog.php">Blog</a>
		<a href="contact.php">Contact Me</a>
	</nav>
	<div id="page-content">
		<header>
			<div id="intro">
				<h1>Who is Jess?</h1>
				<p class="page-description">here is a little bit about me</p>
			</div>
		</header>
		<main>	
			<div class="content-container">
				<div class="content" id="about-me">
					<p>My name is Jessica (though people usually call me 'jess'). I graduated from Liverpool John Moores University with a BSc (hons) in Mathematics in 2015. I was first introduced to computer programming at uni, and fell in love with the logic and magic that is creating things using code, gaining a great enthusiasm and pashion for it. I am currently training in both front and back end development at <a href="http://www.maydenacademy.co.uk/">Mayden Acadamy</a>, and aim to become a Zend qualified engineer at the start of 2017. You can find examples of my work on my <a href="portfolio.php">portfolio</a> page, or if you want to get in touch you can visit the <a href="contact.php">contact</a> page or any of the social links below.</p>
				</div>
			</div>
			<div class="content-container alt">
				<div class="content">
					<h2>What I can do</h2>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="skill logo">
						<!-- <p class="skill-logo"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></p> -->
						<h3>Skill 1</h3>
						<p>skill: unavailable. This will contain a description of a skill that I will obtain on the course</p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="skill logo">
						<h3>Skill 2</h3>
						<p>skill: unavailable. This will contain a description of a skill that I will obtain on the course</p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="skill logo">
						<h3>Skill 3</h3>
						<p>skill: unavailable. This will contain a description of a skill that I will obtain on the course</p>
					</div>
					<div class="section">
						<img src="images/seal-csm.png" alt="scrum-certified logo">
						<h3>Scrum Certified</h3>
						<p>I achieved level of certified scrum master in September 2016</p>
					</div>
				</div>
			</div>
			<div class="content-container">
				<div class="content" id="hobbies">
					<h2>Personal / Hobbies and interests?</h2>
					<p>I LOVE both japans culture and language, and am a proud member of the <a href="http://www.jsnw.org.uk">Japan Society North West</a> (despite living in the south west...), which hosts regular meet-ups and events around the north west area to promote an understanding and appreciation for the people, culture and language of Japan. Though it might be a bit ambitious, one day I hope to be able to speak both fluent Japanese and Korean</p>
					<p>I also love music and have been self teaching myself the piano since I was young.</p>
					<p>I have a dragon.</p>
				</div>
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