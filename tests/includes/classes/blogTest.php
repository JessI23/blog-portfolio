<?php

require ('../../../includes/classes/blog.php');

class blogTest extends PHPUnit_Framework_TestCase {

    /*
     * testing that a new instance of the class is created
     */
    public function testConstructGood(){
        $blogObject = new blog('blogListTest.php');
        $this->assertInstanceOf(blog::class, $blogObject);
    }

    /*
     * testing that when a passed a string that isn't a file path is entered,
     * it returns an empty array
     */
    public function testConstructBad(){
        $blogObject = new blog('not blog');
        $this->assertEmpty($blogObject->blog);
    }

    /*
     * checks that function returns title of object
     */
    public function testGetTitleGood(){

        $stub = $this->getMockBuilder(blog::class)
            ->setMethods(array('getBlogContents'))
            ->disableOriginalConstructor()
            ->getMock();

        $stub->expects($this->any())
            ->method('getBlogContents')->will($this->returnValue("title\n\nauthor\n\ndate\n\ncontents"));
        $stub->__construct('blogListTest.php');

        $return = $stub->getTitle();
        $this->assertEquals($return, 'title');
    }

//    public function testGetTitleBad(){}

    /*
     * checks that function returns a string containing author and date of the object
     */
    public function testGetSubtitleGood(){

        $stub = $this->getMockBuilder(blog::class)
            ->setMethods(array('getBlogContents'))
            ->disableOriginalConstructor()
            ->getMock();

        $stub->expects($this->any())
            ->method('getBlogContents')->will($this->returnValue("title\n\nauthor\n\ndate\n\ncontents"));
        $stub->__construct('blogListTest.php');

        $return = $stub->getSubtitle();
        $this->assertEquals($return, 'by author<br>posted on: date');

    }

//    public function testGetSubtitleBad(){}

    /*
     * checks that function returns the contents of the object
     */
    public function testGetContentGood(){

        $stub = $this->getMockBuilder(blog::class)
            ->setMethods(array('getBlogContents'))
            ->disableOriginalConstructor()
            ->getMock();

        $stub->expects($this->any())
            ->method('getBlogContents')->will($this->returnValue("title\n\nauthor\n\ndate\n\ncontents"));
        $stub->__construct('blogListTest.php');

        $return = $stub->getContent();
        $this->assertEquals($return, 'contents');

    }

//    public function testGetContentBad(){}

}