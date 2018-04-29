<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/29
 * Time: 10:11
 */
namespace app\home\controller;
use think\Controller;
class Index extends Controller
{
    public function index(){//首页
        return $this->fetch("index/index");
    }
    public function service(){//数据服务
        return $this->fetch('index/service');
    }
    public function news(){//新闻咨询
        return $this->fetch('index/news');//新闻咨询
    }
    public function news2(){//咨询2页
        return $this->fetch('index/news2');//新闻咨询
    }
    public function about(){//关于我们
        return $this->fetch('index/about-us');
    }
    public function cooperation(){//合作入住
        return $this->fetch('index/cooperation');
    }

}