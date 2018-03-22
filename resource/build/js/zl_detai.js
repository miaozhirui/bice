var zlDetail = {

    init:function(){
        this.bindEvent();
        this.judgeIsSupport();
    },
    bindEvent: function () {

        //处理点赞功能
        this.handleSupport();

        //处理评论功能
        this.handleComment();

    },
    judgeIsSupport: function () {

        if(localStorage.getItem('article'+aid)){

            $('.has-support').show();
        }

    },
    handleSupport: function () {
        var $support = $('.support');
        var $supportCount = $('.support-count');


        var self = this;

        $support.click(function () {

            var aid = $(this).data('aid');

            if(localStorage.getItem('article'+aid)){

                return false;
            }

            var data = {
                aid : aid
            }


            $.ajax('/index.php?s=bice/ArticleDetail/support', {
                data: data,
                dataType:'json'
            }).done(function (data) {

                if(data.code==0){
                    $supportCount.html(+$supportCount.text()+1);
                    $('.has-support').show();
                    localStorage.setItem('article'+aid,true);
                }
            })
        })
    },
    handleComment: function () {

        var $submitCommentBtn = $('#submitComment');

        $submitCommentBtn.click(function () {

            var $code = $('#code').val();
            var $comment = $('#commentContent').val();

            if($code.replace(/\s/g, '') ==  '') {
                alert('请填写验证码');
                return false;
            }

            if($comment.replace(/\s/g,'')==''){

                alert('请填写评论内容');
                return false;
            }



            $.ajax('/index.php?s=bice/ArticleDetail/comment', {
                type: 'get',
                data: {
                    code: $code,
                    comment: $comment,
                    aid: aid

                },
                dataType: 'json'
            }).done(function (data) {

                if(data.code != 0) {

                    alert(data.message);
                    return;
                }

                var liEle = '<li>币策网友说: '+ $comment +'</li>';

                $('.user-comment').prepend(liEle);

            })
        })
    }
}

zlDetail.init();