<?php
class StopWatch{
    public $startTime;
    public $endTime;
    public function __construct(){
        $this->startTime = microtime(true);
    }
    public function start(){
        $this->startTime = microtime(true);
    }
    public function stop(){
        $this->endTime = microtime(true);
    }

    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }
    

    public function getstartTime(){
        return $this->startTime;
    }
    public function getendTime(){
        return $this->endTime;
    }
}

// khoi tao doi tuong
$stopwatch = new Stopwatch();
// goi phuong thuc thiet lap gia tri thuoc tinh start 

$stopwatch->start();
for($i = 0; $i < 500000;$i++){

}
// goi phuong thuc thiet lap gia tri thuoc tinh stop 

// in ra gia tri thuoc tinh
$stopwatch->stop();
echo "Thời gian đã trôi qua:" . $stopwatch->getElapsedTime();

