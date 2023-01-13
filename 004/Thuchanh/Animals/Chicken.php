<?php 
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Edible.php');
class Chicken extends Animal implements Edible{
    public function makeSound():string
    {
        return "Chiecken: cluck-cluck";
    }
    public function howToEat():string{
        return"could be fried";
    }
}