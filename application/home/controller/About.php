<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/29
 * Time: 13:46
 */

namespace app\home\controller;


use think\Controller;

class About extends Controller
{
    public function one(){//运营部
        return $this->fetch('about/about-us-sub-1');
    }
    public function two(){//设计部
        return $this->fetch('about/about-us-sub-2');
    }
    public function three(){//市场部
        return $this->fetch('about/about-us-sub-3');
    }
    public function four(){//BD
        return $this->fetch('about/about-us-sub-4');
    }
    public function five(){//客服部
        return $this->fetch('about/about-us-sub-5');
    }
    public function six(){//研发部
        return $this->fetch('about/about-us-sub-6');
    }

}