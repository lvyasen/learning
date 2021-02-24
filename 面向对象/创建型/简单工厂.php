<?php
// why: 解决接口选择问题
// how: 让其子类实现工厂接口,返回的也是抽象产品
// when: 明确不同条件下创建不同实例
// difference: 简单工厂并不是静态
class Bicycle
{
    public function driveTo($destination)
    {
        return $destination;
    }
}

class SimpleFactory
{
    public function createBicycle(): \Bicycle
    {
        return new Bicycle();
    }
}

//$simpleFactory = new SimpleFactory();
//$bicycle = $simpleFactory->createBicycle();
//$bicycle->driveTo('河南');


abstract class Pizza
{
    protected $name;

    abstract public function prepare();// 准备原材料


    //下面是制作过程,因为制作过程相似所以抽出来
    public function bake(): void // 制作
    {
        echo $this->name . 'bake' . PHP_EOL;
    }

    public function cut(): void // 切割
    {
        echo $this->name . 'cut' . PHP_EOL;
    }

    public function box(): void // 打包
    {
        echo $this->name . 'box' . PHP_EOL;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class CheesePizza extends Pizza
{
    public function prepare()
    {
        // TODO: Implement prepare() method.
        echo '给奶酪披萨准备材料'.PHP_EOL;
    }
}

class GreekPizza extends Pizza
{
    public function prepare()
    {
        // TODO: Implement prepare() method.
        echo '给希腊披萨准备材料'.PHP_EOL;
    }
}

//每当新增一个新的 pizza 种类时就需要新写一个类,创建类是的过程是相似的,可以把它抽取出来
class NewPizza extends Pizza{
    public function prepare()
    {
        // TODO: Implement prepare() method.
        echo '给新披萨准备材料'.PHP_EOL;
    }
}

class OrderPizza
{

    public function getPizza($orderType)
    {
        $pizza = null;

        return $pizza;
    }

}

//使用简单工厂方式
class SimplePizzaFactory {
    public function setFactory($type)
    {
        switch ($type) { // 这里边每增加一个披萨就要修改这里,违反了开闭原则
            // 这里面创建类的过程是相似的
            case 'greek':
                $pizza = new GreekPizza();
                $pizza->setName('希腊披萨');
                break;
            case 'cheese':
                $pizza = new CheesePizza();
                $pizza->setName('奶酪披萨');
                break;
            case 'new':
                $pizza = new NewPizza();
                $pizza->setName('新披萨');
                break;
        }
        return $pizza;
//        $pizza->prepare();
//        $pizza->bake();
//        $pizza->cut();
//        $pizza->box();
    }
}
$orderPizza = new OrderPizza();
$orderPizza->getPizza('new');
