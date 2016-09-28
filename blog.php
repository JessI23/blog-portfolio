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
                require 'includes/classes/blog_list.php';
                $blog_list = new blogList('test_data/blog_list.txt');
            ?>
			<div class="content-container alt">
				<div class="content">
					<h2>My Blogs</h2>
                    <?php
                        //print blog list on page
                        //array2[blog][element] - element: [img, title, author, date, description, file]
                        //for each blog:
                        foreach ($blog_list->getList() as $blog){

                            $img = $blog[0];
                            $title = $blog[1];
                            $author = $blog[2];
                            $date = $blog[3];
                            $description = $blog[4];

                            include 'includes/blog_description.phtml';
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