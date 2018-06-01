<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3
 * Time: 16:45
 */

namespace app\admin\controller;

use app\common\model\City;
use app\common\model\MaterialLibrary;
use app\common\model\NormalQuestion;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\User as UserModel;
use app\admin\controller\Base;
use app\common\model\Provincial;
use app\common\model\CustomerList as CustomerListModel;
use app\common\model\Information as InformationModel;
use app\common\model\Know as KnowModel;
use app\common\model\Service;
use app\common\model\Balance;

/**
 * 账户余额历史记录
 * Class BalanceManage
 * @package app\admin\controller
 */
class BalanceManage extends Base
{
    public function _initialize()
    {
        if (false == Session::has('admin')) {
            $this->redirect('/admin/login');
        }
    }

    /**
     * 账户余额历史记录列表
     */
    public function index($id)
    {
        $result['user_id'] = $id;
        $result['data'] = Balance::selectEntity();
        foreach ($result['data'] as $k=>$v){
            $result['data'][$k]['add_time'] = $this->timeToDate($v['add_time']);
        }
        return $this->fetch('/balanceManage', $result);
    }

    /**
     * 添加
     */
    public function addBalanceManage()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['user_id']) || empty($requestParam['describe']) || empty($requestParam['balance'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $num = Balance::addEntity($_POST);

        $user = UserModel::findEntity($requestParam['user_id']);
        $updateUser['balance'] = $user['balance'] + $requestParam['balance'];
        UserModel::updateEntity($requestParam['user_id'], $updateUser);
        if($num == 0){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
        }
        return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
    }

    /**
     * 获取一条
     */
    public function getBalanceManage()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['id'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $result = Balance::findEntity($requestParam['id']);
        return $this->selfResponse(StatusCode::GET_SUCCESS,  StatusCode::GET_SUCCESS_MESSAGE, $result);
    }

    /**
     * 编辑
     */
    public function editBalanceManage()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['id']) || empty($requestParam['user_id']) || empty($requestParam['describe']) || empty($requestParam['balance'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $updateArr['describe'] = $requestParam['describe'];
        $updateArr['balance'] = $requestParam['balance'];
        $balance = Balance::findEntity($requestParam['id']);
        if($balance['balance'] != $requestParam['balance']){
            $updateUser['balance'] = $requestParam['balance'] - $balance['balance'];
            UserModel::updateEntity();
            

        }
        Balance::updateEntity($requestParam['id'], $updateArr);
        return $this->selfResponse(StatusCode::UPDATE_SUCCESS,  StatusCode::UPDATE_SUCCESS_MESSAGE);
    }




}