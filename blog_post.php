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
        <header>
            <div id="intro">
                <?php
                    require_once 'includes/functions/database_functions.php';
                    //print blog title and subtitle
                    $conn = new PDO("mysql:host=192.168.20.56;dbname=site_blog", "root", "");
                    $blog = getBlog($conn, $_GET['blog']);

                    echo '<h1>' . $blog['title'] . '</h1>';
                    echo '<p class="page-description">written by:' . $blog['author'] . '<br>on ' . $blog['date_created'] . '</p>'

                ?>
            </div>
        </header>
        <main>
            <div class="content-container">
                <div class="content">
                    <?php
                        //print blog content
                        echo '<p>' . $blog['body'] . '</p>';
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