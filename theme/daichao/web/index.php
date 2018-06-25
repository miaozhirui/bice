<extend file="theme/daichao/web/layout"></extend>
<block name="main-content">
    <!-- 公司产品 -->
    <div class="index layout">
        <tag action="article.category" cid="15">
            <p class="title">{{$field['catname']}}</p>
            <ul>
                <tag action="article.lists" cid="15">
                    <?php
//                        p($field);
                    ?>
                    <li>
                        <a href="{{ $field['url']}}">
                            <img src="{{ $field['thumb'] }}" alt="">
                            <p>{{$field['title']}}</p>
                            <p>
                                <?php
                                    echo htmlspecialchars_decode($field['content']);
                                ?>
                            </p>
                        </a>
                    </li>
                </tag>


            </ul>
        </tag>
    </div>

    <div class="index layout">
        <tag action="article.category" cid="16">
            <p class="title">{{$field['catname']}}</p>
            <ul>
                <tag action="article.lists" cid="16">
                    <?php
                    //                        p($field);
                    ?>

                        <li>
                            <a href="{{ $field['url']}}">
                            <img src="{{ $field['thumb'] }}" alt="">
                            <p>{{$field['title']}}</p>
                            <p>
                                <?php
                                echo htmlspecialchars_decode($field['content']);
                                ?>
                            </p>
                            </a>
                        </li>

                </tag>


            </ul>
        </tag>
    </div>
</block>