<?php
class Person {
    public $name;
    function setName($newName)
    {
        $this->name = $newName;
    }

    function getName()
    {
        return $this->name;
    }
}
$person = new Person('Nguyen Van Teo');
// thiet lap gia tri cua thuoc tinh
$person-> setName('Nguyen Van A');
// in ra cac gia tri thuoc tinh 
echo"<br>";
echo "Ten:" . $person->getName();
echo"<br>";
// thiet lap gia tri thuoc tinh name
$person->setName('Nguyen Van A');
// goi phuong thuc tra ve name
echo '<pre>';
print_r ($person);
echo '</pre>';
?>