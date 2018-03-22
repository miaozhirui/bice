<?php namespace app\bice\controller;

use houdunwang\code\Code;
use houdunwang\db\Db;
use houdunwang\request\Request;
use houdunwang\route\Controller;
use system\model\WebContentComent;

class ArticleDetail extends Controller{
    //动作
    public function support(){

        $data = Request::get();
        $d = Db::table('web_content_news1') -> where('aid', $data['aid']) -> increment('support',1);

        if($d){
            return ['code'=>0,'message'=>'点赞成功','data'=>[]];
        }
    }

    //获取验证码
    public function getCode(){

        Code::make();
    }

    //文章的评论功能
    public function comment(){

        $data = Request::get();
        $code = $data['code'];

        if(strtoupper($code) != Code::get()){

            return ["code"=>101,'message'=>'验证码错误'];
        }

        $webContentComment = new WebContentComent();

        $webContentComment['aid'] = $data['aid'];
        $webContentComment['comment'] = $data['comment'];
        $webContentComment -> save();

        return ['code'=>0,'message'=>'评论成功', "data"=> []];
    }
}
