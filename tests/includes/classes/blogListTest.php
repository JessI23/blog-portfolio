<?php

require '../../../includes/classes/blogList.php';

class blogListTest extends PHPUnit_Framework_TestCase {

    /*
     * testing that a new instance of the class is created
     */
    public function testConstructGood(){
        $blogObject = new blogList('blogTest.php');
        $this->assertInstanceOf(blogList::class, $blogObject);
    }

    /*
     * testing that when passed a string that isn't a file path is entered,
     * it returns an empty array
     */
    public function testConstructBad(){
        $blogObject = new blogList('not blog list');
        $this->assertEmpty($blogObject->blog_list);
    }

    /*
     * checks that function returns list array of blogs
     */
    public function testGetListGood(){

        $stub = $this->getMockBuilder(blogList::class)
            ->setMethods(array('getBlogContents'))
            ->disableOriginalConstructor()
            ->getMock();

        $stub->expects($this->any())
            ->method('getBlogContents')->will($this->returnValue("title|author|date|description"));
        $stub->__construct('blogTest.php');

        $val = [['title', 'author', 'date', 'description']];
        $return = $stub->getList();
        $this->assertEquals($return, $val);
    }

    /*
     * checks that the function returns the correct html array for displaying blog previews
     */
    public function testPrintBlogs(){

        $stub = $this->getMockBuilder(blogList::class)
            ->setMethods(array('getBlogContents'))
            ->disableOriginalConstructor()
            ->getMock();

        $stub->expects($this->any())
            ->method('getBlogContents')->will($this->returnValue("img|title|author|date|description|filename"));
        $stub->__construct('blogTest.php');

        $val =  ['<div class="section">' .
                    '<img src="img" alt="blog logo">' .
                    '<h3>title</h3>' .
                    '<p>author date</p>' .
                    '<p>description<a href="blog_post.php?blog=filename">read more...</a></p>' .
                '</div>'];
        $return = $stub->printBlogs(1);
        $this->assertEquals($return, $val);
    }

}