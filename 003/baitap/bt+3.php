<?php 
include_once "bt3.php";
class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $x,float $y,float $xSpeed,float $ySpeed) {
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed(float $xSpeed) :void{
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed(float $ySpeed) :void{
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed():float {
        return $this->xSpeed;
    }
    public function getYSpeed():float {
        return $this->ySpeed;
    }
    public function getSpeed():array{
        return array($this->xSpeed, $this->ySpeed);
    }
    public function move(){
        $this->xSpeed ++;
        $this->ySpeed ++;
    }
    public function toString():string{
        return "xSpeed = ".$this->getXSpeed()."<br>"."ySpeed = ".$this->getYSpeed();
    }
}
// khởi tạo đối tượng
$move = new MoveablePoint(4.1,4.2,4.4,4.4);
// in ra gia tri cua mang
echo $move->toString()."<br>";
echo "<pre>";
print_r($move->getSpeed());