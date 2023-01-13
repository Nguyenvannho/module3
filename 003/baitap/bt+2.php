<?php 
include_once "bt2.php";
class Point3D extends Point2D{
    public float $z;

    public function __construct(float $x,float $y,float $z){
        parent::__construct($x,$y);
        $this->z = $z;
    }
    
    public function setZ(float $z): void{
        $this->z= $z;
    }
    public function getZ(): float{
        return $this->z;
    }
    public function setXYZ(float $x, float $y, float $z): void{
        parent::setXY($x, $y );
        $this->z = $z;
    }
    public function getXYZ(): array{
        return array($this->x, $this->y, $this->z);
    }
    public function toString(){
        return parent::toString()."<br>"."Z = ".$this->getZ();
    }
}
// khởi tạo đối tượng:
$point3d = new Point3D(5,6,8);
// in ra gia tri cho mang
echo "<pre>";
print_r($point3d->getXYZ()) ."<br>";
echo "Point3D:<br> ". $point3d->toString();

