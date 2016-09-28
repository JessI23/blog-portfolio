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
                <h1>Blog Title</h1>
                <p class="page-description">subtitle</p>
            </div>
        </header>
        <main>
            <div class="content-container">
                <div class="content">
                    <p>content of blog</p>
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