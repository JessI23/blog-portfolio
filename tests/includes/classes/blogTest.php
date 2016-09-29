<?php

require ('../../../includes/classes/blog.php');

class blogTest extends PHPUnit_Framework_TestCase {

//    public function testThing() {
//        $stub = $this->createMock(blog::class);
//        $stub->method('getBlogContents')->willReturn('foo');
//
//        $this->assertEquals('foo', $stub->getBlogContents('fghj'));
//    }

    /*
     * testing that a new instance of the class is created
     */
    public function testConstructGood(){
        $blog = new blog('blogListTest.php');
        $this->assertInstanceOf(blog::class, $blog);
    }

    /*
     * testing that when a passed a string that isn't a file path is entered,
     * it returns an empty array
     */
    public function testConstructBad(){
        $blogObject = new blog('blog');
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