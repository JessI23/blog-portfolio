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
				require 'includes/classes/blogList.php';
				$blog_list = new blogList('test_data/blog_list.txt');
				$blog_display = $blog_list->printBlogs(4);

				for($i=0;$i<count($blog_display);$i++){
					echo $blog_display[$i];
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