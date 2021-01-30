<?php
$host = '0.0.0.0';
$port = 9502;

$ws = new Swoole\WebSocket\Server($host,$port);
$ws->on('open',function($ws,$request){
    var_dump($ws,$request);
    $ws->push($request->fd,'欢迎');
});
$ws->on('message',function($ws,$frame){
    echo '消息:'.$frame->data;
    $data = '来自客户端的消息:'.$frame->data;
    $ws->push($frame->fd,$data);
});

$ws->on('Close',function($ws,$fd){
    echo '关闭客户端-'.$fd;
});
