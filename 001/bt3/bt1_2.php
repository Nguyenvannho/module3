<?php 
define('SLOW',1);
define('MEDIUM',2);
define('FAST',3);
class Fan {
    public $speed = SLOW;
    public $on = false;
    public $radius  = 5;
    public $color = 'blue';

    public function setSpeed($speed) {
        $this->speed = $speed;
    }
    
    public function getSpeed(){
        return $this->speed;

    }
   
     public function setOn($on) {
        $this->on = $on;
     }

     public function getOn() {
        return $this->on;
    }
    public function setRadius(){
        $this->radius = 5;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    public function __toString(){
        return $this->speed;
    }
    public function toString() {
        if($this->getOn()){
        return "Quạt đang bật"."<br>". "Tốc độ quạt: ".$this->getSpeed()."<br>"." Màu quạt: ".$this->getColor()."<br>"." Bán kính: ".$this->getRadius();
    } else {
        echo "Quạt đang tắt" ."<br>"."Màu quạt: ".$this->getColor()."<br>"." Bán kính: ".$this->getRadius();
    }
    }
}
// khoi tao doi tuong
$fan = new Fan();
$fan->setSpeed(FAST);
$fan->setOn(true);
$fan->setRadius(10);
$fan->setColor('Xanh Biển');
echo "Quạt 1:";
echo '<br>';
echo $fan->toString()."<br>";
echo "<br>";


$fan2 = new Fan();
$fan2->setSpeed(MEDIUM);
$fan2->setOn(false);
$fan2->setRadius(10);
$fan2->setColor("Xanh Lá Cây");
echo "Quạt 2: ";
echo "<br>";
echo $fan2->toString();