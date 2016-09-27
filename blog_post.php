<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <?php
        require 'includes/head.phtml';
    ?>
</head>
<body>
    <nav>
        <?php
            require 'includes/nav.phtml';
        ?>
    </nav>
    <div id="page-content">
        <header>
            <div id="intro">
                <h1>My Title</h1>
                <p class="page-description">description?</p>
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
            require 'includes/footer.phtml';
        ?>
    </footer>
</body>
</html>