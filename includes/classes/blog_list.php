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


    //return most recent
    public function getRecent($number){
        return array_slice($this->blog_list, 0, $number, true);
    }



}