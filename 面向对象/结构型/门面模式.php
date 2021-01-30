<?php
// why: 减少系统相互依赖,所有的依赖都是对门面对象的依赖与子系统无关;提高了灵活性不管子系统内部如何实现只要不影响门面对象任你自由活动
//

class Facede{
    private $os;
    private $bios;

    public function __construct($bios,$os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPass();
        $this->bios->launch();
    }
    /**
     * 构建系统关闭方法。
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}

interface OsInterface
{
    /**
     * 声明关机方法。
     */
    public function halt();

    /**
     * 声明获取名称方法，返回字符串格式数据。
     */
    public function getName(): string;
}
interface  BiosInterface
{
    /**
     * 声明执行方法。
     */
    public function execute();

    /**
     * 声明等待密码输入方法
     */
    public function waitForKeyPress();

    /**
     * 声明登录方法。
     */
    public function launch(OsInterface $os);

    /**
     * 声明关机方法。
     */
    public function powerDown();
}
