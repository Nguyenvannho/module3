<?php
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   
    $radius = $_REQUEST['radius'];
    $width = $_REQUEST['width'];
    $height = $_REQUEST['height'];
    $edge = $_REQUEST['edge'];
    $percent = $_REQUEST['percent'];
interface Resizeable{
    const SIZE = 0;
    function resize(float $percent);
}
class Circle implements Resizeable{
     public function resize(float $percent){   
        return $this->Area()*(1+$percent/100);

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
class Rectangle implements Resizeable{
    public function resize(float $percent){  
        return $this->Area()*(1+$percent/100);

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
class Square implements Resizeable{
    public function resize(float $percent){    
     return $this->Area()*(1+$percent/100); 
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
$shape[0] = new Circle ($radius);
$shape[1] = new Rectangle ($width,$height);
$shape[2] = new Square ($edge);
$arr = [$shape[0],$shape[1],$shape[2]];
foreach ($arr as  $shape) {
    echo 'Di???n t??ch l?? : '.$shape->Area();
    echo '<br>';
    echo'Chu vi l?? : '. $shape ->Perimeter();
    echo '<br>';
    echo 'Sau khi thay ?????i l?? : '. $shape ->resize(5);
    echo '<br>';
}
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  <label for="fname">Nh???p b??n k??nh h??nh tr??n :</label><br>
  <input type="text" id="" name="radius" ><br>
  <label for="fname">Nh???p chi???u r???ng h??nh ch??? nh???t:</label><br>
  <input type="text" id="" name="width" ><br>
  <label for="lname">Nh???p chi???u d??i h??nh ch??? nh???t:</label><br>
  <input type="text" id="" name="height" ><br>
  <label for="lname">Nh???p chi???u d??i c???nh h??nh vu??ng :</label><br>
  <input type="text" id="" name="edge" ><br>
  <label for="lname">Nh???p k??ch th?????c mu???n thay ?????i :</label><br>
  <input type="text" id="" name="percent" ><br>
  <input type="submit" value="Submit">
</form>
</body> 
</html>