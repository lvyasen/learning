<?php
// why: 应用程序应该尽可能的是用一个对象实例,如果多个会占用资源
// when: 数据库连接、日志、锁文件
// how: 将 __construct 、 __clone 、__wakeup 方法私有化。提供静态方法 getInstance 方法

final class Signle{
    private static $instance;

    public static function getInstance()
    {
        if (static::$instance==null){
            static::$instance = new static();
        }
        return static::$instance;
    }
    private function __construct(){

    }
    private function __clone(){

    }
    private function __wakeup(){

    }
}
