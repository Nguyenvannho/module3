<?php
namespace Employee;
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $Ho = $_REQUEST['Ho'];
    $Ten = $_REQUEST['Ten'];
    $NgaySinh = $_REQUEST['NgaySinh'];
    $DiaChi = $_REQUEST['DiaChi'];
    $ViTriCongViec = $_REQUEST['ViTriCongViec'];

class Employee {
    public string $ho = "";
    public string $ten = "";
    public string $ngaysinh = "";
    public string $diachi = "";
    public string $vitricongviec = "";

    public function __construct($ho, $ten, $ngaysinh, $diachi, $vitricongviec){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->vitricongviec = $vitricongviec;
    }

      //tra ve gia tri thuoc tinh Ho
      public function getHo(){
        return $this->ho;
    }
      //tra ve gia tri thuoc tinh Ten
      public function getTen(){
        return $this->ten;
    }
      //tra ve gia tri thuoc tinh Ngaysinh
      public function getNgaysinh(){
        return $this->ngaysinh;
    }
      //tra ve gia tri thuoc tinh Diachi
      public function getDiachi(){
        return $this->diachi;
    }
      //tra ve gia tri thuoc tinh Vitricongviec
      public function getVitricongviec(){
        return $this->vitricongviec;
    }

      // thiet lap gia tri thuoc tinh ho
      public function setHo($ho){
        $this->ho = $ho;
    }
      // thiet lap gia tri thuoc tinh ho

      public function setTen($ten){
        $this->ten = $ten;
    }
      // thiet lap gia tri thuoc tinh ho

      public function setNgaysinh($ngaysinh){
        $this->ngaysinh = $ngaysinh;
    }
      // thiet lap gia tri thuoc tinh ho

      public function setDiachi($diachi){
        $this->diachi = $diachi;
    }
      // thiet lap gia tri thuoc tinh ho

      public function setVitricongviec($vitricongviec){
        $this->vitricongviec = $vitricongviec;
    }

    // thiet lap gia tri thuoc tinh ho,ten,ngaysinh,diachi,vitricongviec
    public function setNhanvien($ho, $ten, $ngaysinh, $diachi, $vitricongviec){
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->diachi = $diachi;
        $this->vitricongviec = $vitricongviec;
    }

    // tra ve chuoi ngay thang
    public function toString(){
        return $this->ho . ' ' .$this->ten. '-> '.$this->ngaysinh. '-> ' .$this->diachi. '->' .$this->vitricongviec;
    }

}
 // khởi tạo đối tượng
$nhanvien = new Employee($Ho, $Ten, $NgaySinh, $DiaChi, $ViTriCongViec);
// in ra cac gia tri thuoc tinh 


echo"<br>";
echo "Họ:" . $nhanvien->getho();
echo"<br>";
echo "Tên:" . $nhanvien->getten();
echo"<br>";
echo "Ngày Sinh:" . $nhanvien->getngaysinh();
echo"<br>";
echo "Địa Chỉ:" . $nhanvien->getdiachi();
echo"<br>";
echo "Vị Trí Công Việc:" . $nhanvien->getvitricongviec();
echo"</br>";
// goi phuong thuc tra ve 


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
              <h3>Nhân Viên</h3>

                <tr>
                    <td>Họ</td>
                    <td><input type="text" name="Ho" placeholder="Nhập Họ"></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td><input type="text" name="Ten" placeholder="Nhập Tên"></td>
                </tr>
                <tr>
                    <td>Ngày Sinh</td>
                    <td><input type="date" id="date1" name="NgaySinh" placeholder="Nhập Ngày sinh"></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><input type="text" name="DiaChi" placeholder="Nhập Địa Chỉ"></td>
                </tr>
                <tr>
                    <td>Vị Trí Công Việc</td>
                    <td> <input type="text" name="ViTriCongViec" placeholder="Nhập Vị Trí Công Việc"></td>
                    </td>
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










