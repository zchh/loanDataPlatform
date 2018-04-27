<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 10:06
 */
namespace app\admin\controller;

use app\common\model\City;
use app\common\model\MaterialLibrary;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\User as UserModel;
use app\admin\controller\Base;
use app\common\model\Provincial;
use app\common\model\CustomerList as CustomerListModel;

class Information extends Base
{

    /**
     * 添加信息公告
     */
    public function addInformation()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            return $this->fetch('/addCustomer');
        }elseif ($_SERVER['REQUEST_METHOD']=="POST"){
            $requestParam = Request::instance()->param();
            if(empty($requestParam['title']) || empty($requestParam['describe'])){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
            }

        }else{
            return $this->fetch('/addCustomer');
        }

        return $this->fetch('/addInformation');
    }


}