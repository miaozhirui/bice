<?php
//阿里云短信  由于阿里云更新消息系统，配置文件已经不使用，直播配置aliyun配置文件就可以了
return [];

return [
    /*
    |--------------------------------------------------------------------------
    | 访问MNS的接入地址，登陆MNS控制台 单击右上角 获取Endpoint 查看
    */
    'endPoint' => 'https://297600.mns.cn-hangzhou.aliyuncs.com/',

    /*
    |--------------------------------------------------------------------------
    | 短信专用主题
    |--------------------------------------------------------------------------
    |
    | 进入控制台短信概览页，获取主题名称
    */
    'topic'    => 'sms.topic-cn-hangzhou',
];