<?php

class BasicContructor {

    // properties
    public $title;      // all classes can access
    private $desc;      // only this class can access

    // methods/functions
    function __construct($title, $desc) {
        $this->title = $title;
        $this->desc = $desc;
    }

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

// echo '<h2>Way of creating data without consturctor</h2>';
// $basic = new BasicContructor();
// $basic->create('oop', 'object');
// var_dump($basic->getData());

echo '<hr>';

echo '<h2>Way of creating data with consturctor</h2>';
$basicConstruct = new BasicContructor('oop', 'object consturctor');
var_dump($basicConstruct->getData());

echo $basicConstruct->title;

echo $basicConstruct->desc;








