<?php
include_once "bt1.php";
    class Cylinder extends Circle
    {
       
        public function __construct($ts_height, $ts_radius, $ts_color)
        {
            parent::__construct($ts_radius, $ts_color);
            $this->height = $ts_height;
        }

        public function thetich()
        {
            return $this->area() * $this->height;
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $height = $_REQUEST['height'];
        $radius = $_REQUEST['radius'];
        $color = $_REQUEST['color'];
    // khởi tạo đối tượng
    $hinhtru = new Cylinder($height, $radius, $color);
    // in ra gia tri cua doi tuong

    echo "<br>";
    echo "Thể tích hình trụ là: " . $hinhtru->thetich();
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
                <h3>Hình Trụ</h3>
                <tr>
                    <td>Chiều Cao</td>
                    <td><input type="text" name="height" placeholder="Nhập Chiều Cao"></td>
                </tr>
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
                    <td><input type="submit" name="submit" value="Kết Quả"></td>
                    <td></td>
                </tr>
        </fieldset>
        </table>
    </form>
</body>

</html>