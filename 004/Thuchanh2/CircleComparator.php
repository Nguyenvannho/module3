<?php 
include "Circle.php";
include "Comparator.php";
class CircleComparator implements Comparator {
    public function compare(object $circleOne,object $circleTwo) : int {
        $radiusOne = $circleOne->radius;
        $radiusTwo = $circleTwo->radius;
        if ($radiusOne > $radiusTwo) {
            return 1;
        }else if ($radiusOne < $radiusTwo ) {
            return -1;
        }else{
            return 0;
        }
    }
}