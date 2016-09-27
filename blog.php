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
            $activePage = 'blog';
            require 'includes/nav.phtml';
        ?>
	</nav>
		<div id="page-content">
			<header>
				<div id="intro">
					<h1>My Blog</h1>
					<p class="page-description">Welcome to my blog!<br>Here is a selection of my blog posts</p>
				</div>
			</header>
		<main>
			<div class="content-container">
				<div class="content">
					<p>I have written blog posts for...<br>...<br>...<br>...<br>... no idea</p>
				</div>
			</div>
			<div class="content-container alt">
				<div class="content">
					<h2>My Blogs</h2>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="blog logo">
                        <h3>Blog 1</h3>
                        <p>posted: ...</p>
						<p>blog: unavailable. this will contain a description of a blog that I will have written... <a href="blog_post.php">read more...</a></p>
                    </div>
					<div class="section">
						<img src="images/bg4.jpg" alt="blog logo">
						<h3>Blog 2</h3>
						<p>posted: ...</p>
						<p>blog: unavailable. this will contain a description of a blog that I will have written... <a href="blog_post.php">read more...</a></p>
					</div>
					<div class="section">
						<img src="images/bg4.jpg" alt="blog logo">
						<h3>Blog 3</h3>
						<p>posted: ...</p>
						<p>blog: unavailable. this will contain a description of a blog that I will have written... <a href="blog_post.php">read more...</a></p>
					</div>
					<div class="section">
						<img src="images/pinkbg.jpg" alt="blog logo">
						<h3>Blog 4</h3>
						<p>posted: ...</p>
						<p>blog: unavailable. this will contain a description of a blog that I will have written... <a href="blog_post.php">read more...</a></p>
					</div>
				</div>
				<div class="content-container">
					<div class="content">
						<p>not sure what to put here yet but I'm sure I'll figure something out</p>
					</div>
				</div>
			</div>
		</main>
	</div>
	<footer>
        <?php
            require 'includes/footer.phtml';
        ?>
	</footer>
</body>
</html>