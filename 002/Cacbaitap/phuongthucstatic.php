<?php

class Foo
{
    public static string $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}
// chua hieu doan nay
class Bar extends Foo
{
    public function fooStatic(): string
    {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo::$my_static . "\n";     

print $foo::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
// print $bar->fooStatic() . "\n";
?>