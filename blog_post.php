<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <?php
        require_once 'includes/templates/head.phtml';
    ?>
</head>
<body>
    <nav>
        <?php
            require 'includes/templates/nav.phtml';
        ?>
    </nav>
    <div id="page-content">
        <?php
            require_once 'includes/classes/blog.php';
            $file_path = 'test_data/' . $_GET['blog'] . '.txt';
            $blog = new blog($file_path);
        ?>
        <header>
            <div id="intro">
                <?php
                    echo '<h1>' . $blog->getTitle() . '</h1>';
                    echo '<p class="page-description">' . $blog->getSubtitle() . '</p>'
                ?>
            </div>
        </header>
        <main>
            <div class="content-container">
                <div class="content">
                    <?php
                        echo '<p>' . $blog->getContent() . '</p>';
                    ?>
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