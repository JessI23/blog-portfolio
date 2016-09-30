<?php

class blog {

    public $blog;
    private $title;
    private $author;
    private $date;
    private $content;

    /**
     * takes a given file and puts the contents into an array
     * structure: array[blog] - blog: [title, name, date, content(, content...)]
     * if there is more than 1 section of content it concatenates them with two line breaks
     *
     * @param STRING location of file with blog in it
     *
     */
    public function __construct($file) {

        if(file_exists($file)) {
            $blogContents = $this->getBlogContents($file);
            $this->blog = explode("\n\n", $blogContents);

            $this->title = $this->blog[0];
            $this->author = $this->blog[1];
            $this->date = $this->blog[2];
            $this->content = $this->blog[3];

            if (count($this->blog) > 4) {
                for ($i = 4; $i < count($this->blog); $i++) {
                    $this->content .= '<br><br>' . $this->blog[$i];
                }
            }
        } else {
            $this->blog = [];
        }
    }

    /*
     * Cant unit test this due to I/O
     */
    public function getBlogContents($file) {
        return file_get_contents($file, 'r');
    }

    /**
     * returns the blog title
     *
     * @return STRING blog title
     *
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * returns the blog subtitle
     *
     * @return STRING a string containing information about the author and post date
     *
     */
    public function getSubtitle() {
        return 'by ' . $this->author . '<br>posted on: ' . $this->date;
    }

    /**
     * returns the blog content
     *
     * @return STRING a string containing all blog content
     *
     */
    public function getContent() {
        return $this->content;
    }

}