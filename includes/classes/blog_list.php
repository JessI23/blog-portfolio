<?php

class blogList {

    //array
    private $blog_list;


    //pass in file (location in a string)
    //get contents
    //construct array
    //set $blog_list = revers array (i.e.
    public function __construct($file){
        $temp = file_get_contents($file , 'r');
        $temp = explode('*', $temp);

        foreach($temp as $key => $element){
            $this->blog_list[$key] = explode('|', $element);
        }

        $this->blog_list = array_reverse($this->blog_list);
    }

    //return array
    public function getList(){
        return $this->blog_list;
    }

    //prints blog previews
    public function printBlogs($number){
        //print blog list on page
        //structure: array[blog][element] - element: [img, title, author, date, description, file]
        //for each blog:
        for($i=0;$i<$number;$i++){

            $img = $this->blog_list[$i][0];
            $title = $this->blog_list[$i][1];
            $author = $this->blog_list[$i][2];
            $date = $this->blog_list[$i][3];
            $description = $this->blog_list[$i][4];

            echo    '<div class="section">' .
                        '<img src="' . $img . '" alt="blog logo">' .
                        '<h3>' . $title . '</h3>' .
                        '<p>' . $author . ' ' . $date . '</p>' .
                        '<p>' . $description . '<a href="blog_post.php">read more...</a></p>' .
                    '</div>';
        }
    }
}