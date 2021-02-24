<?php

class Base
{
    public function sumNumber(int $a,int $b)
    {
        return $a + $b;
    }
}

class A extends Base
{
    public static function divNumber($a, $b)
    {
        return $a / $b;
    }
}

class B extends Base
{
//    private $a = new A();

    public function divNumber($a,$b)
    {
//        return $this->a->divNumber($a,$b);
        return A::divNumber($a,$b);

    }
}

$b = new B();
$res = $b->divNumber(10,2);
print_r($res);