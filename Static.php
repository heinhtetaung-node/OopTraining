<?php

/**
 * 
 */
class StaticClass
{
    public static $value = 'Value';
    public $simpleValue;

    function __construct($parameter)
    {
        $this->simpleValue = $parameter;
    }

    public static function writeValue(){
        echo 'static value = '.self::$value;
        // $this->simpleValue = 'non static';
        // echo '<br>';
        // echo 'non static value = '.$this->simpleValue;
    }

    public function writeNonStatic(){
        echo $this->simpleValue;
    }
}

echo StaticClass::$value;
echo StaticClass::writeValue();
echo '<Br>';

$staticClass = new StaticClass('non static');
echo $staticClass->simpleValue;
echo $staticClass->writeNonStatic();










