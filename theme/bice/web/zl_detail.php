<extend file="theme/bice/web/master"></extend>

<block name="custom-content">
        <div class="zldetail layout">
            <?php
            $d = Db::table('web_content_news1') -> where('aid', $hdcms['aid']) -> increment('click',1);
            ?>
            <div class="title">{{ $hdcms['title'] }}

            </div>
            <div class="tag">
                <div class="left">
                    <span>{{date('Y/m/d H:i', $hdcms['createtime'])}}</span>
                    <span class="author">{{ $hdcms['author'] }}</span>
                </div>
                <div class="right">阅读 {{ $hdcms['click'] }}</div>
            </div>
            <div class="article">
                <?php
                $content = preg_replace("/attachment/","/attachment", htmlspecialchars_decode($hdcms['content']));

                echo $content;
                ?>

            </div>
            <div class="share-container">
                分享到: <div id="share-2" data-sites="weibo,qq,qzone,wechat"></div>
                 <span class="support" data-aid="{{$hdcms['aid']}}"></span><span class="support-count">{{$hdcms['support']}}</span><span class="has-support">已点赞</span>
            </div>

            <?php
    //           p($hdcms["aid"]);
    //           p($hdcms["cid"]);
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
            <script>
                $('#share-2').share();
            </script>
        </div>
</block>

<block name="comment">
    <div id="comment">
        <textarea name="" id="commentContent" placeholder="我要评论！！！"></textarea>

        <div class="action">
            <img src="{{u('bice/ArticleDetail/getCode')}}" onclick="this.src='{{u('bice/ArticleDetail/getCode')}}&_'+Math.random()">
            <input type="text" id="code" name="code" placeholder="请输入验证码">
            <button type="button" id="submitComment" class="btn btn-primary">提交</button>
        </div>

        <?php
            $comment = Db::table('web_content_comment') -> where('aid', $hdcms['aid']) -> get();

        ?>
            <ul class="user-comment">
                <?php foreach ($comment as $v):?>
                    <li>币策网友说: {{ $v['comment'] }}</li>
                <?php endforeach; ?>
            </ul>

    </div>
</block>

<block name="script">
    <script>
        var aid = {{ $hdcms['aid'] }}
    </script>
    <script src="/resource/build/js/zl_detai.js"></script>
</block>
