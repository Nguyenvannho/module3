<?php 

class Shape {
    public float $side1= 1;
    public float $side2= 1;
    public float $side3= 1;
    public function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function setSide1($side1) {
        $this->side1 = $side1;
    }
    public function setSide2($side2) {
        $this->side2 = $side2;
    }
    public function setSide3($side3) {
        $this->side3 = $side3;
    }
    public function getSide1() {
        return $this->side1;
    }
    public function getSide2() {
        return $this->side2;
    }
    public function getSide3() {
        return $this->side3;
    }
    public function getPerimeter(){
        return ($this->side1 + $this->side2 + $this->side3);
    }
    public function getArea(){
        $p = ($this->getPerimeter()/2);
        $h = 2*(sqrt ($p*($p-$this->side1)*($p-$this->side2)*($p -$this->side3))/$this->side1);
        return ($this->side1*$h)/2;
    }
    public function toString(){
        
        return "Chiều dài cạnh a = ".$this->getSide1().'<br>'."Chiều dài cạnh b = ".$this->getSide2().'<br>'."Chiều dài cạnh c = ".$this->getSide3()."<br>".'Diện tích hình tam giác là: '.$this->getArea().'<br>'."Chu vi hình tam giác là : ".$this->getPerimeter();
    }
}
$tamgiac = new Shape(9,8,6);
echo $tamgiac->toString();
// class Triangle extends Shape {
// }
//         $a = null;
//         $b = null;
//         $c = null;
