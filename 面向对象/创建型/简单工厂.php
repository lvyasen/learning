<?php
// why: 解决接口选择问题
// how: 让其子类实现工厂接口,返回的也是抽象产品
// when: 明确不同条件下创建不同实例
// difference: 简单工厂并不是静态
class Bicycle{
    public function driveTo($destination)
    {
        return $destination;
    }
}
class SimpleFactory{
    public function createBicycle()
    {
        return new Bicycle();
    }
}
$simpleFactory = new SimpleFactory();
$bicycle = $simpleFactory->createBicycle();
$bicycle->driveTo('河南');