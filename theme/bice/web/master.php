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
<div id="footer">
    <div class="content">
        <div class="left">
            <p>
                友情链接：
                <a target="_blank" href="http://www.btc38.com/">比特时代</a>
                <a target="_blank" href="https://www.bitmain.com/">比特大陆</a>
                <a target="_blank" href="https://www.exx.com/">EXX</a>
                <a target="_blank" href="https://coldlar.com/">库神</a>
                <a target="_blank" href="http://www.quintar.com/">金塔</a>
                <a target="_blank" href="http://www.bitcoin86.com/">比特币资讯网</a>
                <a target="_blank" href="http://www.btc798.com/">比特币之家</a>
                <a target="_blank" href="http://www.bitett.com/">比特头条</a>
                <a target="_blank" href="http://www.coingogo.com/">币源社区</a>
                <a target="_blank" href="http://blocknews.io/">块讯</a>
                <a target="_blank" href="http://www.bitecoin.com/">比特币中文网</a>
                <a target="_blank" href="http://www.jinniu.cn/">金牛财经</a>
                <a target="_blank" href="http://www.weilaicaijing.com/">未来财经</a>
                <a target="_blank" href="http://www.8btc.com/">巴比特</a>
                <a target="_blank" href="http://www.jinse.com/">金色财经</a>
                <a target="_blank" href="https://coinmarketcap.com/">Coinmarketcap</a>
                <a target="_blank" href="https://cointelegraph.com/">Cointelegraph</a>
                <a target="_blank" href="https://www.coindesk.com/">Coindesk</a>
                <a target="_blank" href="https://www.newsbtc.com/">Newsbtc</a>
                <a target="_blank" href="https://thebitcoinnews.com/">Bitcoin news</a>
                <a target="_blank" href="https://www.btctrade.im/ ">BTCTRADE.IM</a>
                <a target="_blank" href="http://www.superbtc.org/ ">SBTC</a>
                <a target="_blank" href="http://www.bcex.ca ">BCEX</a>
                <a target="_blank" href="http://www.ebtcbank.com ">ebtcbank</a>
                <a target="_blank" href="https://bitcoinworld.com">比特币世界</a>
                <a target="_blank" href="http://chainb.com/">铅笔</a>
                <a target="_blank" href="http://www.gongxiangcj.com/">共享财经</a>
                <a target="_blank" href="http://www.chaoex.com/">炒客网</a>
                <a target="_blank" href="https://www.wabi.com/">挖币网</a>
                <a target="_blank" href="http://www.wanbizu.com/ ">玩币族</a>
                <a target="_blank" href="http://www.block123.com/ ">Block123</a>
                <a target="_blank" href="http://jgy.com ">九个亿财经 </a>
                <a target="_blank" href="http://www.yuncaijing.com">云财经</a>
                <a target="_blank" href="https://www.yyex.com">YYEX交易平台</a>
            </p>
        </div>
        <div class="right">
            <p>联系我们</p>
            <img src="/resource/build/images/shichang.jpeg" alt="">
        </div>
    </div>

</div>
</body>
<blade name="script"></blade>
</html>