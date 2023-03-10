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
 // kh???i t???o ?????i t?????ng
$nhanvien = new Employee($Ho, $Ten, $NgaySinh, $DiaChi, $ViTriCongViec);
// in ra cac gia tri thuoc tinh 


echo"<br>";
echo "H???:" . $nhanvien->getho();
echo"<br>";
echo "T??n:" . $nhanvien->getten();
echo"<br>";
echo "Ng??y Sinh:" . $nhanvien->getngaysinh();
echo"<br>";
echo "?????a Ch???:" . $nhanvien->getdiachi();
echo"<br>";
echo "V??? Tr?? C??ng Vi???c:" . $nhanvien->getvitricongviec();
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
              <h3>Nh??n Vi??n</h3>

                <tr>
                    <td>H???</td>
                    <td><input type="text" name="Ho" placeholder="Nh???p H???"></td>
                </tr>
                <tr>
                    <td>T??n</td>
                    <td><input type="text" name="Ten" placeholder="Nh???p T??n"></td>
                </tr>
                <tr>
                    <td>Ng??y Sinh</td>
                    <td><input type="date" id="date1" name="NgaySinh" placeholder="Nh???p Ng??y sinh"></td>
                </tr>
                <tr>
                    <td>?????a Ch???</td>
                    <td><input type="text" name="DiaChi" placeholder="Nh???p ?????a Ch???"></td>
                </tr>
                <tr>
                    <td>V??? Tr?? C??ng Vi???c</td>
                    <td> <input type="text" name="ViTriCongViec" placeholder="Nh???p V??? Tr?? C??ng Vi???c"></td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Th??m"></td>
                    <td></td>
                </tr>
        </fieldset>
        </table>
    </form>
</body>

</html>










