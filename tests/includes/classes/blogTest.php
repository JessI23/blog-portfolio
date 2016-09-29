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
     * testing that when a passed a string that isn't a file path is entered,
     * it returns an empty array
     */
    public function testConstructBad(){
        $blogObject = new blog('blog');
        $this->assertEmpty($blogObject->blog);
    }

//    public function testGetTitleGood(){}

//    public function testGetTitleBad(){}

//    public function testGetSubtitleGood(){}

//    public function testGetSubtitleBad(){}

//    public function testGetContentGood(){}

//    public function testGetContentBad(){}

}