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
    public function three(){
        return $this->fetch("news/news-sub-3");
    }
    public function four(){
        return $this->fetch("news/news-sub-4");
    }
    public function five(){
        return $this->fetch("news/news-sub-5");
    }
    public function six(){
        return $this->fetch("news/news-sub-6");
    }
    public function seven(){
        return $this->fetch("news/news-sub-7");
    }
    public function eight(){
        return $this->fetch("news/news-sub-8");
    }

}