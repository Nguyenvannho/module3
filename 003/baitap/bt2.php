<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
class Point2D {
    public string $x = "";
    public string $y = "";

    public function __construct(float $x,float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX() : float{
        return $this->x;
    }
    public function getY() : float{
        return $this->y;
    }
    public function setX($x) : void {
        $this->x = $x;
    }
    public function setY($y) : void {
        $this->y = $y;
    }
    public function setXY(float $x,float $y) : void {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY() : array{
        return array($this->x, $this->y);
     }
     public function toString(){
         return "X = ".$this->getX()."<br>"." Y = ".$this->getY()."<br>";
     }
}
// khởi tạo đối tượng
$point2d = new Point2D($x,$y);
// thiết lập các giá trị cho thuộc tính
echo  "Kết quả của bảng Point2D:<br> ". $point2d->toString();
echo "<br>";
// in ra gia tri
// echo "<pre>";
// print_r($point2d->getXY())."<br>";
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
              <h3>Bảng Số</h3>
              <tr>
                    <td>Số Thứ Nhất</td>
                    <td><input type="text" name="x" placeholder="Nhập Số X"></td>
                </tr>
                <tr>
                    <td>Số Thứ Hai</td>
                    <td><input type="text" name="y" placeholder="Nhập Số Y"></td>
                </tr>
          
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Kết Quả"></td>
                    <td></td>
                </tr>
        </fieldset>
        </table>
    </form>
</body>

</html>















