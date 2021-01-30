<?php
// 标量类型声明
function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

// 返回值类型声明
function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));

// null 合并运算符
$username = $_GET['user'] ?? 'nobody';
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// 太空船操作符 <=> 分别返回 -1、0、1
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// 通过 define 定义常量数组,之前只能通过 const 定义
define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);

// 匿名类 通过 new class 创建一个匿名类
interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger {
        return $this->logger;
    }

    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg) {
        echo $msg;
    }
});

var_dump($app->getLogger());

// use 引入相同命名空间的可以一次性导入
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use some\namespace\{ClassA, ClassB, ClassC as C};

// 整数除法 intdiv()

// session_start() 可以接受 array 作为参数用来覆盖 php.ini
session_start([
    'cache_limiter' => 'private',// 设为 private 读取之后会马上关闭存储文件
    'read_and_close' => true,
]);

