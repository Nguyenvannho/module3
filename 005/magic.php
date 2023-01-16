<?php
const CONG = 'ADD';
const TRU = 'MINUS';
const NHAN = 'TICH';
const CHIA = 'DEVISE';

$phep_tinh = 'ADD';//+ - * /
$a = 5;
$a = 3;
switch ($phep_tinh) {
    case CONG:
        echo $a + $b;
        break;
    case TRU:
        echo $a - $b;
        break;
    case NHAN:
        echo $a * $b;
        break;
    case CHIA:
        echo $a * $b;
        break;
    default:
        # code...
        break;
}


$phep_tinh = '+';//+ - * /
$a = 5;
$a = 3;
switch ($phep_tinh) {
    case CONG:
        echo $a + $b;
        break;
    case TRU:
        echo $a - $b;
        break;
    case NHAN:
        echo $a * $b;
        break;
    case CHIA:
        echo $a * $b;
        break;
    default:
        # code...
        break;
}