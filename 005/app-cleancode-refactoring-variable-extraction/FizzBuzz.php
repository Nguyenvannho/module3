<?php

class FizzBuzz
{
    public $status;
    public function __construct($number)
    {
        // Gan bieu thuc chia het cho 3
        $chia_het_cho_3 = $number % 3 == 0;
        // Gan bieu thuc chia het cho 5
        $chia_het_cho_5 = $number % 5 == 0;

        if ($chia_het_cho_3 && $chia_het_cho_5) {
            $this->status = "FizzBuzz";
        } elseif ($chia_het_cho_3) {
            $this->status = "Fizz";
        } elseif ($chia_het_cho_5 ) {
            $this->status = "Buzz";
        } else {
            $this->status = $number . "";
        }
    }
    public function __toString()
    {
        return $this->status;
    }
}   