<?php
// 高层模块不应该依赖低层模块，二者都应该依赖其抽象
// 抽象不应该依赖细节,细节应该依赖抽象

//class Person{
//    public function receive(Email $email) // 这里 receive 是通用的操作,但是 Email 是具体的这就违反了依赖倒置原则
//    {
//     echo   $email->getInfo();
//    }
// 当新增其他途径接受消息如微信,需要新增微信类并修改 receive 方法
//}
//class Email{
//    public function getInfo()
//    {
//        return '电子邮件';
//    }
//}

// 修改后
interface IReceiver{
    public function getInfo();
}
class Person{
    public function receive(IReceiver $receiver)
    {
        echo $receiver->getInfo(); // 修改后 receive 只跟接口 IReceiver 有依赖关系,所以不用修改,非常稳定
    }
}
class Email implements IReceiver{
    public function getInfo()
    {
        return '电子邮件';
        // TODO: Implement getInfo() method.
    }
}
class Weixin implements IReceiver{
    public function getInfo()
    {
        return '微信消息';
        // TODO: Implement getInfo() method.
    }
}

$person = new Person();
$person->receive(new Email());
$person->receive(new Weixin());