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
                    //print blog title and subtitle
                ?>
            </div>
        </header>
        <main>
            <div class="content-container">
                <div class="content">
                    <?php
                        //print blog content
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