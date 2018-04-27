<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 16:11
 */

namespace app\admin\controller;

use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\admin\controller\Base;
use app\common\model\Service as ServiceModel;

class Service extends Base
{
    /**
     * 添加客户服务
     */
    public function addService()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['role']) || empty($requestParam['name']) || empty($requestParam['tel']) || empty($requestParam['weixin']) || empty($requestParam['email']) ){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $num = ServiceModel::addEntity($_POST);
        if($num == 0){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
        }
        return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
    }

    /**
     * 获取一条客户服务
     */
    public function getOneService()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['service_id'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $service = ServiceModel::findEntity($requestParam['service_id']);
        return $this->selfResponse(StatusCode::GET_SUCCESS,  StatusCode::GET_SUCCESS_MESSAGE, $service);
    }

    /**
     * 编辑客户服务
     */
    public function editService()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['service_id']) || empty($requestParam['role']) || empty($requestParam['name']) || empty($requestParam['tel']) || empty($requestParam['weixin'])
            || empty($requestParam['email']) ){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        unset($_POST['service_id']);
        ServiceModel::updateEntity($requestParam['service_id'], $_POST);
        return $this->selfResponse(StatusCode::UPDATE_SUCCESS,  StatusCode::UPDATE_SUCCESS_MESSAGE);
    }

}