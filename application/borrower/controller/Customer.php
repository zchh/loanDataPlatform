<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 18:32
 */

namespace app\borrower\controller;


use app\common\model\Server;
use app\user\controller\Base;
use think\Controller;

use app\common\model\Borrower;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Session;
use think\Request;


class Customer extends Base
{
    public function index(){//列表信息
        $data = Borrower::selectEntity();
        $this->assign('data',$data);
        return $this->fetch('customer/index',$data);
    }
    public function single(){//修改
        $id = Request::instance()->param('id');
        var_dump($id);
        exit;
        //$data = Borrower::findEntity()
    }
    public function server(){//客户服务
        $data = Server::selectEntity();
        $this->assign('data',$data);
        return $this->fetch('customer/service',$data);

    }

}