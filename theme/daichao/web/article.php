<extend file="theme/daichao/web/layout"></extend>
<block name="main-content">
    <div class="detail layout">

        <div class="title">{{ $hdcms['title'] }}

        </div>
        <div class="tag">
            <div class="left">
                <span>{{date('Y/m/d H:i', $hdcms['createtime'])}}</span>
                <span class="author">{{ $hdcms['author'] }}</span>
            </div>
<!--            <div class="right">阅读 {{ $hdcms['click'] }}</div>-->
        </div>
        <div class="article">
            <?php
            $content = preg_replace("/attachment/","/attachment", htmlspecialchars_decode($hdcms['content']));

            echo $content;
            ?>

        </div>

        <?php
        $front = Db::table('web_content_news1')->field(['aid','title'])-> where('aid','<', $hdcms['aid']) ->where('cid','=',$hdcms['cid']) ->orderBy('aid','desc')->limit(1) ->first();


        $next =Db::table('web_content_news1')->field(['aid','title'])-> where('aid','>', $hdcms['aid']) ->where('cid','=',$hdcms['cid']) ->limit(1) ->first();


        ?>

        <div class="relation-article">
            <?php if($front): ?>
                <p>上一篇:<a href="http://www.bice123.com/index.php/article1-{{$front['aid']}}-{{$hdcms['cid']}}-1.html">{{$front['title']}}</a></p>
            <?php endif; ?>

            <?php if($next): ?>
                <p>下一篇:<a href="http://www.bice123.com/index.php/article1-{{$next['aid']}}-{{$hdcms['cid']}}-1.html">{{$next['title']}}</a></p>
            <?php endif; ?>

        </div>

    </div>
</block>