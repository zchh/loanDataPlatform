<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/29
 * Time: 14:08
 */

namespace app\home\controller;


use think\Controller;
//新闻详情
class News extends Controller
{
    public function one(){
        return $this->fetch("news/news-sub-1");
    }
    public function two(){
        return $this->fetch("news/news-sub-2");
    }

}