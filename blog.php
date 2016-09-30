<!DOCTYPE html>
<html>
<head>
    <?php
        require_once 'includes/templates/head.phtml';
    ?>
</head>
<body>
	<nav>
        <?php
            $activePage = 'blog';
            require 'includes/templates/nav.phtml';
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
            <?php
                //get blog list and descriptions
                require 'includes/classes/blogList.php';
                $blog_list = new blogList('test_data/blog_list.txt');
            ?>
			<div class="content-container alt">
				<div class="content">
					<h2>My Blogs</h2>
                    <?php
                        $blog_previews = $blog_list->printBlogs(count($blog_list->getList()));

                        for($i=0;$i<count($blog_previews);$i++){
                            echo $blog_previews[$i];
                        }
                    ?>
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
            require 'includes/templates/footer.phtml';
        ?>
	</footer>
</body>
</html>