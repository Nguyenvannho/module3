<?php

class House {

    private string $color = "";
    private array $allowedColors =
    // thiet lap thuoc tinh
    [
        'black', 'blue', 'red', 'green'
    ];

    public function setColor($color): void
    {   // chuyen ve chu thuong
        $color = strtolower($color);
        // kiem tra xem color co nam trong mang allowedColors hay khog
        if (in_array($color, $this->allowedColors)) {
            $this->color = $color;
        }
    }

    public function getColor(): string
    {
        if ($this->color) {
            return $this->color;
        } else {
            return 'No color is set. May be you have set a color which is not allowed';
        }
    }

}
// Example 1
$house1 = new House();
$house1->setColor('black');
echo $house1->getColor();
echo '<br>'; 
$house2 = new House();
$house2->setColor('yellow');
echo $house2->getColor();