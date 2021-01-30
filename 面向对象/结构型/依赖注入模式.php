<?php
// why:控制反转用于解耦,而依赖注入实现了控制反转.
// how: 将创建者被调用者(实例)的工作交由 容器 来完成,然后在调用者中注入被调用者 （通过构造器/方法注入实现）
// 这样我们就完成了调用者和被调用者的解耦,该过程被称为依赖注入
class DatabaseConfiguration{
    private $host;
    private $port;
    private $username;
    private $pwd;

    public function __construct($host,$port,$username,$pwd)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPwd()
    {
        return $this->pwd;
    }
}

class DatabaseConnection{
    private $configuration;

    public function __construct($config)
    {
        $this->configuration = $config;
    }

    public function getDsn()
    {
        // 这仅仅是演示，而不是一个真正的  DSN
        // 注意，这里只使用了注入的配置。 所以，
        // 这里是关键的分离关注点。

        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );

    }
}