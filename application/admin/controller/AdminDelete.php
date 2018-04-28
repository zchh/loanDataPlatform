<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/28
 * Time: 10:07
 */

namespace app\admin\controller;

use app\common\model\City;
use app\common\model\MaterialLibrary;
use app\common\model\NormalQuestion;
use app\common\selfConfig\NumberConfig;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\User as UserModel;
use app\admin\controller\Base;
use app\common\model\Provincial;
use app\common\model\CustomerList;
use app\common\model\Information;

class AdminDelete extends Base
{

    public function _initialize()
    {
        if (false == Session::has('admin')) {
            $this->redirect('/admin/login');
        }
    }

    /**
     * 批量删除
     */
    public function deleteRecord()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['type']) || empty($requestParam['checkNum'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $idArr = explode(',', $requestParam['checkNum']);
        array_pop($idArr);
        switch ($requestParam['type']){
            case NumberConfig::DELETE_USER:
                UserModel::deleteEntity($idArr);
                return $this->selfResponse(StatusCode::DELETE_SUCCESS,  StatusCode::DELETE_SUCCESS_MESSAGE);
                break;
            case NumberConfig::DELETE_CUSTOMER:
                CustomerList::deleteEntity($idArr);
                return $this->selfResponse(StatusCode::DELETE_SUCCESS,  StatusCode::DELETE_SUCCESS_MESSAGE);
                break;
            case NumberConfig::DELETE_INFORMATION:
                Information::deleteEntity($idArr);
                return $this->selfResponse(StatusCode::DELETE_SUCCESS,  StatusCode::DELETE_SUCCESS_MESSAGE);
                break;
            case NumberConfig::DELETE_NORMAL_QUESTION:
                NormalQuestion::deleteEntity($idArr);
                return $this->selfResponse(StatusCode::DELETE_SUCCESS,  StatusCode::DELETE_SUCCESS_MESSAGE);
                break;
            default:
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
    }


}