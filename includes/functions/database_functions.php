<?php

function getBlogs($conn){
    $sql = "SELECT `img`, `title`, `author`, `date_created`, `desc`, `slug` FROM `articles`;";
    $query=$conn->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function printList($blog_list){
    foreach($blog_list as $key => $val){
        $print[$key] = 	'<div class="section">' .
            '<img src="' . $val["img"] . '" alt="blog logo">' .
            '<h3>' . $val["title"] . '</h3>' .
            '<p>' . $val["author"] . ' ' . $val["date_created"] . '</p>' .
            '<p>' . $val["desc"] . '<a href=blog_post.php?blog=' . $val["slug"] . '> read more...</a></p>' .
            '</div>';
    }
    return $print;
}

?>