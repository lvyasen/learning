<?php
// 解决 switch 等语句,不用修改条件语句

abstract class Shape
{
    public function draw()
    {
    }
}
class Rectangle extends Shape {
    public function draw(){
        echo '画矩形';
    }
}
class Circle extends Shape{
    public function draw(){
        echo '画原型';
    }
}

class GraphicEditing{
    public function drawShape(Shape $shape)
    {
        $shape->draw();
    }
}

$editor = new GraphicEditing();
$editor->drawShape(new Circle());
$editor->drawShape(new Rectangle());