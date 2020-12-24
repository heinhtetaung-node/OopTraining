<?php

class ParentCl {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo 'this is parent';
    }

    public function showName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
}

class ChildCl extends ParentCl {

    public $address;
    private $gender;

    public function __construct($name, $age, $address){
        parent::__construct($name, $age);
        echo 'this is child';
        $this->address = $address;
    }   

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getGender(){
        return $this->gender;
    }
}

$child = new ChildCl('Sithu', '28', 'Bago');
echo $child->name;
echo $child->age;
echo $child->address;
$child->setGender('male');
echo $child->getGender();









