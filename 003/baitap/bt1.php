<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $radius = $_REQUEST['radius'];
    $color = $_REQUEST['color'];
   
class Circle {
    public string $radius = "";
    public string $color = "";
    
    public function __construct($radius,$color){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius($radius){
        $this->radius = $radius;
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

     public function perimeter(){
        return pi()* $this->radius *2;
     }
     public function area(){
        return pi()* pow($this->radius,2);
    }
}

// khởi tạo đối tượng
$hinhtron = new Circle($radius,$color);
// thiet lap cac gia tri cho thuoc tinh:
// in ra gia tri cho thuoc tinh:
echo 'Diện tích hình tròn là: '.$hinhtron->area().' '.'->->->+++---->->->'.'Màu sắc của hình là màu:'.$hinhtron->getColor();
echo "<br>";
echo "chu vi hình tròn là: ".$hinhtron->perimeter().' '.'->->->+++---->->->'.'Màu sắc của hình là màu:'.$hinhtron->getColor();;


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    #date1 {
        width: 97%;
        
    }

    .error {
        color: #FF0000;
    }

    #table2 {
        text-align: center;
        border-collapse: collapse;
        width: 1500px;
        border: solid 1px #ccc;
    }

    form {
        width: 450px;
    }
    </style>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <table>
              <h3>Hình Tròn</h3>
              <tr>
                    <td>Bán Kính</td>
                    <td><input type="text" name="radius" placeholder="Nhập Bán Kính"></td>
                </tr>
                <tr>
                    <td>Màu Sắc</td>
                    <td><input type="text" name="color" placeholder="Nhập Màu Sắc"></td>
                </tr>
          
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Thêm"></td>
                    <td></td>
                </tr>
        </fieldset>
        </table>
    </form>
</body>

</html>













