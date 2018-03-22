<extend file="theme/bice/web/master"></extend>
<block name="custom-content">
    <div class="kx layout">
        <?php

        $week = date('w');
        $w2c = ['日','一','二','三','四','五','六'];
        ?>

        <div class="date"><?php echo date('Y年m月d日',time()); ?> 今天 星期<?php echo $w2c[$week]; ?></div>

        <ul>
            <tag action="article.pagelist" cid="1" row="5" order="desc">
                <li>
                    <div class="time"><span class="arrow"></span>{{ date('Y-m-d H:i:s', $field['createtime']) }}</div>
                    <div class="desc">{{ $field['description'] }}</div>
                </li>
            </tag>
        </ul>

        <tag action="article.pagination"></tag>
    </div>

</block>