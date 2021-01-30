<?php
$host = '127.0.0.4';
$port = 9501;
$server = new Swoole\Server($host,$port);
// 接受事件
$server->on('Connect',function($server,$fd){
    echo '连接客户端';
});

$server->on('Receive',function($server,$fd,$form_id,$data){
    $server->send($fd,'向 '.$form_id.' 发送:'.$data);
});
$server->on('Close',function($server,$fd){
    echo '客户端关闭';
});
$server->start();