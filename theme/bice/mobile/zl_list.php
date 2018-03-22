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
    <link rel="stylesheet" href="/resource/build/css/zl_list.debug.css">
    <script src="/resource/build/js/flexible.js"></script>
</head>
<body >

<div class="banner">
    <div class="content"></div>
</div>
<div class="tab">
    <ul>
        <tag action="article.category_top">

            <li class="{{$field['current_category']}}">
                <a href="{{$field['url']}}" >{{$field['catname']}}</a>
            </li>
        </tag>
    </ul>
</div>
<div class="list">
    <ul>

        <tag action="article.lists" cid="$hdcms['cid']">

            <a href="{{ $field['url'] }}">
                <li>
                    <div class="left">
                        <p>{{ $field['title'] }}</p>
                        <div class="bottom">
                            <div class="author">{{ $field['author'] }}</div>
                            <div class="time">{{ date('m-d H:i', $field['createtime']) }}</div>
                            <div class="read">阅读 {{ $field['click'] }}</div>
                        </div>
                    </div>
                    <div class="right">
                        <img src="{{$field['thumb']}}" alt="">
                    </div>
                </li>
            </a>
        </tag>


    </ul>
</div>
</body>
</html>