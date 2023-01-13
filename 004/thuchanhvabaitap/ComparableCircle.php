<?php 

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{

    public function compareTo($objTwo): int
    {
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}