<?php

trait Crud 
{
    public function insert(){
        echo 'insert into '.$this->table;
    }

    public function update(){
        echo 'update '.$this->table;   
    }
}

class Products {
    use Crud;

    public $table = 'products';
}

class Order {
    use Crud;

    public $table = 'orders';
}

$prod = new Products();
$prod->insert();
echo '<br>';
$prod->update();





