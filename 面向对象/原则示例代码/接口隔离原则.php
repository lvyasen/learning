<?php
// 客户端不应该依赖它不需要的接口，尽量依赖最小接口额不是依赖不需要的接口
// 就是把接口粒度尽量的小

interface interface1{
    public function method1();
}
interface interface2{
    public function method2();
}
interface interface3{
    public function method3();
}

class A{
    public function depend1(C $c)
    {
        $c->method1();
    }
}
class B{
    public function depend2(D $d)
    {
        $d->method3();
    }
}
class C implements interface1,interface2{
    public function method1()
    {
        echo 'c 实现了 interface1';
        // TODO: Implement method1() method.
    }
    public function method2()
    {
        echo 'c 实现了 interface2';
        // TODO: Implement method2() method.
    }
}
class D implements interface3{
    public function method3()
    {
        echo 'D 实现了 interface3';
        // TODO: Implement method3() method.
    }
}

$a = new A();
$b = new B();
$a->depend1(new C());
$b->depend2(new D());
//interface TotalInterface
//{
//    public function method1();
//
//    public function method2();
//
//    public function method3();
//
//}
//class A{
//    // 实际上 A 使用到 method1 ,但是必须要实现 TotalInterface 所有方法
//    public function depend1(TotalInterface $i)
//    {
//        $i->method1();
//    }
//}
//
//class B{
//    public function depend1(TotalInterface $i)
//    {
//        $i->method2();
//    }
//}
//class C implements TotalInterface
//{
//    public function method1()
//    {
//        echo 'C 实现了 method1';
//    }
//
//    public function method2()
//    {
//        echo 'C 实现了 method2';
//    }
//
//    public function method3()
//    {
//        echo 'C 实现了 method3';
//    }
//}
//
//class D implements TotalInterface
//{
//    public function method1()
//    {
//        echo 'B 实现了 method1';
//    }
//    public function method2()
//    {
//        echo 'B 实现了 method2';
//    }
//    public function method3()
//    {
//        echo 'B 实现了 method3';
//    }
//}