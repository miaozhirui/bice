<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=0.5,  minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>贷钞网站</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
    <link rel="stylesheet" href="/resource/daichao/build/css/public.css">

    <?php if(IS_MOBILE): ?>
        <link href="/resource/daichao/build/css/mobile.css" rel="stylesheet"/>
    <?php else: ?>
        <link href="/resource/daichao/build/css/web.css" rel="stylesheet"/>
    <?php endif; ?>

</head>
<body>
<div id="main">
    <!--导航区域-->
    <div class="nav">
        <ul>
            <li><span class="icon"></span></li>

            <tag action="article.category_top">
                <?php
//                    p($field);
                ?>
                <?php if($field['cid'] != '15' &&  $field['cid'] != '16'  ):?>
                    <li><a href="{{$field['url']}}" class="{{$field['current_category']}}">{{ $field['catname'] }}</a></li>
                <?php endif; ?>

            </tag>

        </ul>
    </div>

    <!--轮播图区域-->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <tag action="article.slide_lists">
                <div class="swiper-slide">
                    <a href="{{$field['url']}}">
                        <img src="/{{$field['thumb']}}" alt="">
                    </a>
                </div>
<!--                链接: {{$field['url']}}-->
<!--                标题: {{$field['title']}}-->
<!--                图片: {{$field['thumb']}}-->
            </tag>
<!--            <div class="swiper-slide">-->
<!--                <img src="http://img.taopic.com/uploads/allimg/140702/240404-140F20IG486.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="swiper-slide">-->
<!--                <img src="http://image.tupian114.com/20130521/15235862.jpg" alt="">-->
<!--            </div>-->
<!--            <div class="swiper-slide">-->
<!--                <img src="http://www.taopic.com/uploads/allimg/140217/240423-14021F9241831.jpg" alt="">-->
<!--            </div>-->
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <blade name="main-content"></blade>


    <div class="footer">
        <div class="content">
            <p>联系我们</p>
            <img src="/resource/build/images/shichang.jpeg" alt="">
        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>
<script src="/resource/daichao/build/js/index.js"></script>
</body>
</html>
