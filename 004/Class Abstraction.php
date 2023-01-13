<?php

abstract class AbstractClass
{
    // Các lớp kế thừa bắt buộc phải cài đặt các phương thức này
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    // Phương thức thông thường
    public function printOut()
    {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue(): string
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue(): string
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . "\n";
?>