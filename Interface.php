<?php

interface Animal {
    public function makeSound();

    public function feed();
}

class Cat implements Animal {
    public function makeSound(){
        echo 'meow';
    }

    public function feed(){
        echo 'fish';
    }
}
$cat = new Cat();
echo $cat->makeSound(); echo '<br>';
echo $cat->feed();