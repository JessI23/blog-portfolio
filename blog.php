<!DOCTYPE html>
<html>
<head>
    <?php
        require_once 'includes/head.phtml';
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
            <?php
                //get blog list and descriptions
                $blogListString = file_get_contents('test_data/blog_list.txt', 'r');
                $blogListTemp = explode('*', $blogListString);

                foreach($blogListTemp as $key => $element){
                    $blogList[$key] = explode('|', $element);
                }
                $blogList = array_reverse($blogList); //makes it so that the latest one is first
            ?>
			<div class="content-container alt">
				<div class="content">
					<h2>My Blogs</h2>
                    <?php
                        //print blog list on page
                        //array2[blog][element] - element: [img, title, author, date, description, file]
                        //for each blog:
                        foreach ($blogList as $blog){

                            $img = $blog[0];
                            $title = $blog[1];
                            $author = $blog[2];
                            $date = $blog[3];
                            $content = $blog[4];

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
            require 'includes/footer.phtml';
        ?>
	</footer>
</body>
</html>