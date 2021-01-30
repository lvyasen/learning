<?php

interface Logger{
    public function log($message);
}

class StdoutLogger implements Logger{
    public function log($message)
    {
        print_r($message);
    }
}
class FileLogger implements Logger{
    private $filePath ;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    public function log($message)
    {
        file_put_contents($this->filePath,$message);
    }
}

interface LoggerFactory{
    public function createLogger();
}
class StdoutLoggerFactory implements LoggerFactory{
    public function createLogger(){
        return new StdoutLogger();
    }
}

class FileLoggerFactory implements LoggerFactory{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    public function createLogger(){
        return new FileLogger($this->filePath);  
    }
}