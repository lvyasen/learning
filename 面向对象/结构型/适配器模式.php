<?php
// why： 解决原本接口不兼容而不能一起工作的类可以一起工作
// where：客户端数据库适配 使用多个网络服务来规范数据使结果相同

interface BookInterFace{
    public function turnPage();

    public function open();

    public function getPage();
}

class Book implements BookInterFace{
    private $page;
    public function getPage()
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }
    public function open()
    {
        // TODO: Implement open() method.
        $this->page = 1;
    }
    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }
}
class EBookAdapater implements BookInterFace {
    protected $eBook;

    public function __construct($eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
    }
    public function turnPage(){
        $this->eBook->pressNext();
    }
    public function getPage(){
        return $this->eBook->getPage()[0];
    }
}
interface EbookInterface{
    public function unlock();

    public function pressNext();

    public function getPage();
}

class Kindle implements EbookInterface{
    private $page = 1;
    private $totalPage = 100;
    public function pressNext()
    {
        $this->page++;
    }
    public function unlock(){

    }
    public function getPage(){
        return [$this->page,$this->totalPage];
    }
}