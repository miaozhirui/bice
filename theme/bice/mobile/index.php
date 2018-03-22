<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>币策网站</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,minimum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="/resource/build/css/public.debug.css">
    <link rel="stylesheet" href="/resource/build/css/main.debug.css">
    <link rel="stylesheet" href="/resource/build/css/kx_list.debug.css">
    <script src="/resource/build/js/flexible.js"></script>
</head>
<body >
<div class="banner">
    <div class="content"></div>
</div>
<div class="tab">
    <ul>
        <tag action="article.category_top">

            <?php if($_SERVER['PATH_INFO'] == '' && $field['catname']=='快讯'): ?>

                <li class="current_category">
                    <a href="{{$field['url']}}" >{{$field['catname']}}</a>
                </li>
            <?php else: ?>
                <li class="{{$field['current_category']}}">
                    <a href="{{$field['url']}}" >{{$field['catname']}}</a>
                </li>
            <?php endif; ?>

        </tag>

    </ul>
</div>
<div class="today-time">
    <!--    <span class="icon"></span>-->
    <?php

    $week = date('w');
    $w2c = ['日','一','二','三','四','五','六'];
    ?>
    <?php echo date('Y年m月d日',time()); ?> 今天 星期<?php echo $w2c[$week]; ?>

</div>
<div class="content">
    <ul>
        <tag action="article.lists" cid="1" order="desc">
            <li>
                <div class="time"><span class="icon"></span>{{ date('Y-m-d H:i:s', $field['createtime']) }}</div>
                <div class="desc">{{$field['description']}}</div>
            </li>
        </tag>

    </ul>
</div>
</body>
</html>



















