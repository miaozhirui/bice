<extend file="theme/bice/web/master"></extend>
<block name="custom-content">
    <div class="zl layout">
        <?php

        $week = date('w');
        $w2c = ['日','一','二','三','四','五','六'];
        ?>

        <p class="date"><?php echo date('Y年m月d日',time()); ?> 今天 星期<?php echo $w2c[$week]; ?></p>
        <ul>

            <tag action="article.pagelist" cid="$hdcms['cid']" row="5" >

                <li>
                    <a href="{{ $field['url'] }}" target="_blank">
                        <div class="left">
                            <img src="/{{ $field['header'] }}" alt="">
                            <p>{{$field['author']}}</p>
                        </div>
                        <div class="right">
                            <p class="article-title">{{$field['title']}}</p>
                            <p class="desc">{{$field['description']}}</p>
                            <div class="article-tag">
                                <div class="tag-left">
                                    <!--                                    <p class="wt"></p>-->
                                    <!--                                    <span>国际</span><span>区块链</span>-->
                                </div>
                                <div class="tag-right">阅读 {{ $field['click'] }}</div>
                            </div>
                        </div>
                    </a>
                </li>

            </tag>
        </ul>
        <tag action="article.pagination"></tag>
    </div>

</block>