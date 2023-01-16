<?php 
interface Colorable{
    function  howToColor();
}
class Square implements Colorable{
    public function  howToColor(){
        return ' Color all four sides';
    }
    public int $edge;
    public function __construct($edge){
        $this->edge=$edge;
    }
    public function setEdge($edge){
        $this -> edge = $edge;
    }
    public function getEdge(){
        return $this -> width;   
    }
    public function Area(){
        return  $this->edge * $this->edge;
    }
    public function Perimeter(){   
        return $this->edge*4;
    }
}
class Circle implements Colorable{
    public function  howToColor(){
        return ' Color all four sides';
    }
    public int $radius;
    public function __construct($radius){
       $this->radius=$radius;
    }
    public function setRadius($radius){
       $this -> radius = $radius;
   }
   public function getRadius(){
       return $this -> radius;   
   }
    public function Area(){
       return pi() * pow($this->radius, 2);
    }
    public function Perimeter(){
       return pi() * $this->radius * 2;
    }
}
class Rectangle implements Colorable{
    public function  howToColor(){
        return ' Color all four sides';
    }
   public int $width;
   public int $height;
   public function __construct( $width, $height){  
       $this->width = $width;
       $this->height = $height;
   }
   public function Area(){
       return  $this->height * $this->width;
   }
   public function Perimeter(){
       return ($this->height + $this->width) * 2;
   }
}
$hinhhoc[0] = new Square(10);
    $hinhhoc[1] = new Rectangle(10,10);
    $hinhhoc[2] = new Circle(10);
    foreach ($hinhhoc as $key => $value) {
        echo 'diện tích:' . $value -> Area() . '<br>';
        if ($value instanceof Square) {
            echo $value->howToColor() . '<br>';
        }
    }
