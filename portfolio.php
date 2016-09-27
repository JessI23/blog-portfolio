<!DOCTYPE html>
<html>
<head>
	<?php
		require 'head.phtml';
	?>
</head>
<body>
	<nav>
		<a href="index.php">Home</a>
		<a href="about.php">About Me</a>
		<a href="portfolio.php" id="active">Portfolio</a>
		<a href="blog.php">Blog</a>
		<a href="contact.php">Contact Me</a>
	</nav>
	<div id="page-content">
		<header>
			<div id="intro">
				<h1>My Work</h1>
				<p class="page-description">Welcome to my portfolio!<br>Here is a selection of work that I feel best describe my skill set.</p>
			</div>
		</header>
		<main>
			<div class="content-container">
				<div class="content">
					<h2>Web Development</h2>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="project name">
						<h3>project 1</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="project name">
						<h3>project 2</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="project name">
						<h3>project 3</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="project name">
						<h3>project 4</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
				</div>
			</div>
			<div class="content-container alt">			
				<div class="content">
					<h2>Other</h2>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="project name">
						<h3>project 1</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="project name">
						<h3>project 2</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="project name">
						<h3>project 3</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="project name">
						<h3>project 4</h3>
						<p>Project: unavailable. this will eventually contain a description of a project<br><br></p>
					</div>
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