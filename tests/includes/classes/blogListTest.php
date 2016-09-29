<?php

require ('../../../includes/classes/blogList.php');

class blogListTest extends PHPUnit_Framework_TestCase {

    /*
     * testing that a new instance of the class is created
     */
    public function testConstructGood(){
        $blogObject = new blogList('blogTest.php');
        $this->assertInstanceOf(blogList::class, $blogObject);
    }

    /*
     * testing that when a passed a string that isn't a file path is entered,
     * it returns an empty array
     */
    public function testConstructBad(){
        $blogObject = new blogList('not blog list');
        $this->assertEmpty($blogObject->blog_list);
    }

//    public function testGetListGood(){}

//    public function testGetListBad(){}

//    public function testPrintBlogsGood(){}

//    public function testPrintBlogsBad(){}

}