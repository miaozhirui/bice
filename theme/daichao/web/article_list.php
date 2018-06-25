<extend file="theme/daichao/web/layout"></extend>
<block name="main-content">
    <div class="list layout">
        <?php

        $week = date('w');
        $w2c = ['日','一','二','三','四','五','六'];
        ?>

        <div class="date page-header"><?php echo date('Y年m月d日',time()); ?> 今天 星期<?php echo $w2c[$week]; ?></div>

        <ul class="list-group">
            <tag action="article.pagelist" cid="$hdcms['cid']" row="10" order="desc">
                <li class="list-group-item">
                    <a href="{{ $field['url'] }}" target="_blank">
                    <div class="time"><span class="arrow"></span>{{ date('Y-m-d H:i:s', $field['createtime']) }}</div>
                    <div class="desc">{{ $field['description'] }}</div>
                    </a>
                </li>
            </tag>
        </ul>

        <div class="pagination-wrap" style="text-align: center">
            <tag action="article.pagination"></tag>

        </div>
    </div>
</block>