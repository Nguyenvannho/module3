<?php
class SinhVien{
    // thuoc tinh
    public $name = '';
    public $email = '';
    // phuong thuc
    public function work(){
        echo '<br>'.__METHOD__;
    }
    public function relax(){
        echo '<br>'.__METHOD__;

    }
}
// khoi tao doi tuong
$sinhVien1 = new SinhVien();
// Thiet lap gia tri thuoc tinh
$sinhVien1->name = "nguyen van nho";
$sinhVien1->email = "nho3833@gmail.com";
// goi phuong thuc
$sinhVien1->work();
$sinhVien1->relax();
// truy xuat thuoc tinh
echo '<br>';
echo $sinhVien1->name;
echo '<br>';
echo $sinhVien1->email;



echo '<pre>';
print_r($sinhVien1);
echo '</pre>';