<?php
 class Animal {
    protected string $name;
    private string $color;
    
   public function say($noi_dung){
    echo 'Animal: ' . $noi_dung;
   }
   public function getName(){
    return $this->name;
   }
   public function getColor(){
    return $this->color;
   }

   public function setName($ts_name){
    $this->name = $ts_name;
   }
   public function setColor($ts_color){
    $this->color = $ts_color;
   }
}

// khoi tao doi tuong:
// $animal1 = new Animal();
// // thiet lap cac gia tri cho thuoc tinh:
// $animal1->setName('animal1');
// // thiet lap cac gia tri cho thuoc tinh:
// $animal1->setColor('red');
// // truy xuat cac thuoc tinh:
// echo '<br>'.$animal1->getName();
// echo '<br>'.$animal1->getColor();
// // in ra doi tuong:
// echo '<pre>';
// print_r($animal1);
// echo '</pre>';