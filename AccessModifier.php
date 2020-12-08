
<?php
class Fruit {
  
  public $name;
  protected $color;
  private $weight;

  function __construct($name, $color, $weight){
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
}

$mango = new Fruit('sth', 'blue', '23lb');
echo $mango->name;


$mango->name = 'Mango'; // OK
echo $mango->name;

$mango->color = 'Yellow'; // ERROR
echo $mango->color;

$mango->weight = '300'; // ERROR

