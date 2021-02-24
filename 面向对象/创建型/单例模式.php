<?php
// why: 应用程序应该尽可能的是用一个对象实例,如果多个会占用资源
// when: 数据库连接、日志、锁文件
// how: 将 __construct 、 __clone 、__wakeup 方法私有化。提供静态方法 getInstance 方法

// 饿汉式写法(静态变量)
// 优点: 简单 类加载的时候就完成了实例化,避免了线程同步为题
// 缺点: 在类装在时就完成了实例化,没有达到懒加载的效果,如果程序中没有使用到该实例,就会造成内存浪费
// 结论: 可以用,但是可能造成内存浪费
final class SingleStatic
{
    private static $instance;

    public static function getInstance() // 静态方法获取实例
    {
        if (static::$instance == null) static::$instance = new static();
        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

// 懒汉式(静态变量)
// 优点: 可以起到懒加载目的,对于 php 来说够用了
// 缺点: 只能在单线程下使用
class SingleLoad
{
    private static $instance;

    private function __construct() { }

    // 提供一个静态共有方法当用到该方法时,才去创建 instance
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        // 如果在多线程下通过这个判断语句可以产生多个实例
        return static::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

}

$singleton1 = SingleStatic::getInstance();
$singleton2 = SingleStatic::getInstance();
var_dump($singleton1 === $singleton2);
