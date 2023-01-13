<?php
include 'Animal.php';

class Human extends Animal{
    public function relax(){
        echo 'relax';
    }
}

$human1 = new Human();

$human1->setName('nguyen van a');

$human1->relax();

echo '<pre>';
print_r($human1);