<?php

class blogList {

    public $blog_list;

    /**
     * takes a given file and puts the contents into an array
     * reverses the order of the array to put the latest entry first
     * structure: array[blog][element] - element: [img, title, author, date, description, file]
     *
     * @param STRING location of file with blog info
     *
     */
    public function __construct($file){

        if(file_exists($file)) {
            $temp = $this->getBlogContents($file);
            $temp = explode('*', $temp);

            foreach ($temp as $key => $element) {
                $this->blog_list[$key] = explode('|', $element);
            }

            $this->blog_list = array_reverse($this->blog_list);
        } else {
            $this->blog_list = [];
        }
    }

    /*
     * Cant unit test this due to I/O
     */
    public function getBlogContents($file) {
        return file_get_contents($file, 'r');
    }

    /**
     * returns the $blog_list array
     *
     * @return ARRAY array of blog previews
     *
     */
    public function getList(){
        return $this->blog_list;
    }

    /**
     * returns an array of the blog previews to be displayed
     *
     * @param $number INT number of blog posts you want to display
     *
     * @return STRING string of blog previews
     *
     */
    public function printBlogs($number){

        $return = [];

        for($i=0; $i<$number; $i++){

            $img = $this->blog_list[$i][0];
            $title = $this->blog_list[$i][1];
            $author = $this->blog_list[$i][2];
            $date = $this->blog_list[$i][3];
            $description = $this->blog_list[$i][4];
            $file_name = $this->blog_list[$i][5];

            $return[$i] =   '<div class="section">' .
                                '<img src="' . $img . '" alt="blog logo">' .
                                '<h3>' . $title . '</h3>' .
                                '<p>' . $author . ' ' . $date . '</p>' .
                                '<p>' . $description . '<a href="blog_post.php?blog=' . $file_name . '">read more...</a></p>' .
                            '</div>';
        }

        return $return;
    }
}