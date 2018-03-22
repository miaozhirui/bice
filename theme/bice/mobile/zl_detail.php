<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>币策网站</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,minimum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="/resource/build/css/public.debug.css">
    <link rel="stylesheet" href="/resource/build/css/main.debug.css">
    <link rel="stylesheet" href="/resource/build/css/zl_detail.debug.css">
    <script src="/resource/build/js/flexible.js"></script>
</head>
<body >
<div class="banner">
    <div class="content"></div>
</div>
{!!p($hdcms)!!}
<div class="title">{{$hdcms['title']}}</div>
<div class="author-info">
    <div class="left">
        <img src="/{{$hdcms['header']}}" alt="">
        <div class="info">
            <p>{{$hdcms['author']}}</p>
            <p>{{date('Y/m/d H:i', $hdcms['createtime'])}}</p>
        </div>
    </div>
    <div class="right">阅读数 {{$hdcms['click']}}</div>
</div>
<div class="article-content">
    <?php
    $content = preg_replace("/attachment/","/attachment", htmlspecialchars_decode($hdcms['content']));

    echo $content;
    ?>


</div>
</body>
</html>



















