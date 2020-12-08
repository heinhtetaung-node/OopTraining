<?php

class Basicclass {

    // properties
    public $title;      // all classes can access
    private $desc;      // only this class can access

    // methods/functions
    public function create($title, $desc){
        $this->title = $title;
        $this->desc = $desc;
    }

    public function delete(){
        $this->title = null;
        $this->desc = null;
    }

    public function getData(){
        return [
            'title' => $this->title,
            'desc' => $this->desc
        ];
    }
}

echo '<h2>creating BasicObj and get data before create</h2>';
$BasicObj = new Basicclass(); // creating object
$arr = $BasicObj->getData(); // 
var_dump($arr);

echo '<hr>';

echo '<h2>get data from BasicObj after insert</h2>';
$BasicObj->create('oop', 'Object Oriented Programming');
$arr = $BasicObj->getData();
var_dump($arr);

echo '<hr>';

echo '<h2>creating TestObj and get data before create</h2>';
$TestObj = new Basicclass();
$arr = $TestObj->getData();
var_dump($arr);

echo '<hr>';

echo '<h2>get data from TestObj after insert</h2>';
$TestObj->create('test', 'testing');
$arr = $TestObj->getData();
var_dump($arr);

echo '<h2>get data from BasicObj after insert</h2>';
$arr = $BasicObj->getData();
var_dump($arr);

echo '<h2>Delete from BasicObj</h2>';
$BasicObj->delete();
$arr = $BasicObj->getData();
var_dump($arr);

echo '<hr>';













