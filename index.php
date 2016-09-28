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
		require_once 'includes/head.phtml';
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
		<div id="site-blog-container">
			<h2>Recent Blogs</h2>
			<?php
				//get blog list and descriptions
				$blogListString = file_get_contents('test_data/blog_list.txt', 'r');
				$blogListTemp = explode('*', $blogListString);

				foreach($blogListTemp as $key => $element){
					$blogList[$key] = explode('|', $element);
				}
				$blogList = array_reverse($blogList); //makes it so that the latest one is first
			?>
			<?php
				//print blog list on page
				//array2[blog][element] - element: [img, title, author, date, description, file]
				//for the latest 3 blogs:
				for($i=0; $i<4; $i++){

					$img = $blogList[$i][0];
					$title = $blogList[$i][1];
					$author = $blogList[$i][2];
					$date = $blogList[$i][3];
					$content = $blogList[$i][4];

					include 'includes/blog_description.phtml';
				}
			?>
		</div>
	</main>
	<footer>
		<?php
			require 'includes/footer.phtml';
		?>
	</footer>
</body>
</html>