<!DOCTYPE html>
<!--[if IE ]>
<html class="ie">
<![endif]-->
<!--[if !IE]>-->
<html>
<!--<![endif]-->
<head>
	<title>Jess's Site</title>
	<?php
		require_once 'includes/templates/head.phtml';
	?>
</head>
<body>
	<nav>
		<?php
			$activePage = 'home';
			require 'includes/templates/nav.phtml';
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
		<div id="site-blog-container">
			<h2>Recent Blogs</h2>
			<?php
				//get blog list and descriptions
				require 'includes/classes/blog_list.php';
				$blog_list = new blogList('test_data/blog_list.txt');

				$blog_list_recent = $blog_list->getRecent(4);

				//print blog list on page
				//array2[blog][element] - element: [img, title, author, date, description, file]
				//for the latest 3 blogs:
				foreach ($blog_list_recent as $blog){

					$img = $blog[0];
					$title = $blog[1];
					$author = $blog[2];
					$date = $blog[3];
					$description = $blog[4];

					include 'includes/blog_description.phtml';
				}
			?>
		</div>
	</main>
	<footer>
		<?php
			require 'includes/templates/footer.phtml';
		?>
	</footer>
</body>
</html>