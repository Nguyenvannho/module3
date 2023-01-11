<?php
class MyDate {
    public $day;
    public $month;
    public $year;
    // phuong thuc khoi tao dung de thiet lap cac gia tri thuoc tinh
    public function __construct($day, $month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    //tra ve gia tri thuoc tinh Day
    public function getDay(){
        return $this->day;
    }
    // tra ve gia tri thuoc tinh Month
    public function getMonth(){
        return $this->month;
        
    }
    // tra ve gia tri thuoc tinh Year

    public function getYear(){
        return $this->year;
        
    }
    // thiet lap gia tri thuoc tinh day
    public function setDay($day){
        $this->day = $day;
    }
    // thiet lap gia tri thuoc tinh month
    public function setMonth($month){
        $this->month = $month;
        
    }
    // thiet lap gia tri thuoc tinh year
    public function setYear($year){
        $this->year = $year;
        
    }
    // thiet lap gia tri thuoc tinh day,month,year
    public function setDate($day,$month,$year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    // tra ve chuoi ngay thang
    public function toString(){
        return $this->day . '/' .$this->month. '/'.$this->year;
    }
}
// khoi tao doi tuong
$MyDate = new MyDate(20,11,2023);
// goi phuong thuc thiet lap gia tri thuoc tinh day 
$MyDate-> setday(10);
// goi phuong thuc thiet lap gia tri thuoc tinh month
$MyDate-> setMonth(1);
// goi phuong thuc thiet lap gia tri thuoc tinh year
$MyDate-> setYear(2023);

// in ra cac gia tri thuoc tinh 
echo"<br>";
echo "Ngay:" . $MyDate->getday();
echo"<br>";
echo "Thang:" . $MyDate->getMonth();
echo"<br>";
echo "Nam:" . $MyDate->getYear();
echo"</br>";
// thiet lap gia tri thuoc tinh day,month,year
$MyDate->setDate(20,1,2023);
// goi phuong thuc tra ve ngay,thang ,nam setName
echo"<br>";
echo $MyDate->toString();
echo"</br>";
echo '<pre>';
print_r ($MyDate);
echo '</pre>';
?>

