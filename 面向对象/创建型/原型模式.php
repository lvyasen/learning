<?php

class Sheep
{
    private $name;
    private $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __clone()
    {

    }
}

class WhiteSheep extends Sheep{

}

// 现在有一只羊 tom，姓名为: tom, 年龄为：1，颜色为：白色，请编写程序创建和 tom 羊 属性完全相同的 10 只羊

// 传统做法
$sheep = new Sheep('tom',1,'白色');
//$sheep2 = new Sheep($sheep->getName(),$sheep->getAge(),$sheep->getColor());
//$sheep3 = new Sheep($sheep->getName(),$sheep->getAge(),$sheep->getColor());
//
