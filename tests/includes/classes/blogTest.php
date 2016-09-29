<?php

require ('../../../includes/classes/blog.php');

class blogTest extends PHPUnit_Framework_TestCase {

    /*
     * testing that a new instance of the class is created
     */
    public function testConstructGood(){
        $blog = new blog('blogListTest.php');
        $this->assertInstanceOf(blog::class, $blog);
    }

    /**
     * testing that when a string that isn't a file path is entered, it...
     *
     * @expectedException PHPUnit_Framework_Error
     */
    public function testConstructBad(){
        $blog = new blog('blog');

    }

    /*
     * testing that when a file path isn't entered, it throws an error
     */
    public function testConstructMal(){
        $array = [];
        $blog = new blog($array);

    }

//    public function testGetTitleGood(){}

//    public function testGetTitleBad(){}

//    public function testGetSubtitleGood(){}

//    public function testGetSubtitleBad(){}

//    public function testGetContentGood(){}

//    public function testGetContentBad(){}

}