<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>币策咨询，读懂区块链</title>
    <link rel="stylesheet" href="/resource/build/css/bootstrap.css">
    <link rel="stylesheet" href="/resource/build/css/share.min.css">
    <link rel="stylesheet" href="/resource/build/css/bice.css?v=0.1">
    <script src="/resource/build/js/jquery.min.js"></script>
    <script src="/resource/build/js/jquery.share.min.js"></script>
</head>
<body>

<div class="nav">

    <div class="content">
        <div class="left">
            <img src="/resource/build/images/bice_logo.png" alt="">
        </div>
        <div class="right">
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
    </div>
</div>
<div class="main-content">
    <blade name="custom-content"></blade>

    <div class="reco">
        <div class="title">热门文章</div>
        <ul>
            <tag action="article.lists" cid="2" row="5">

                <li>
                    <a href="{{$field['url']}}">
                        <div class="left">
                            <img src="{{ $field['thumb'] }}" alt="">
                        </div>
                        <div class="right">
                            <p class="title">{{ $field['title'] }}</p>
                            <p class="time">{{ date('Y/m/d H:i', $field['createtime']) }}</p>
                        </div>
                    </a>
                </li>
            </tag>
        </ul>
    </div>

</div>
<blade name="comment"></blade>
</body>
<blade name="script"></blade>
</html>