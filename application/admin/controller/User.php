<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 17:16
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

class User extends Base
{

    public function _initialize()
    {
        if(false == Session::has('admin')){
            $this->redirect('/admin/login');
        }
    }

    /**
     * 平台用户
     */
    public function index()
    {
        $result['data'] = UserModel::selectEntity();
        foreach ($result['data'] as $k=>$v){
            unset($v['password']);
        }
        $result['provinceList'] = json_encode(Provincial::selectEntity());
        $result['cityList'] = json_encode(City::selectEntity());
        return $this->fetch('/user', $result);
    }

    /**
     * 添加新用户
     */
    public function addUser()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['real_name']) || empty($requestParam['password']) || empty($requestParam['email']) || empty($requestParam['tel']) ||
            empty($requestParam['age']) || empty($requestParam['province_id']) ||  empty($requestParam['city_id']) || empty($requestParam['weixin']) ||
            empty($requestParam['credit']) || empty($requestParam['contact']) || empty($requestParam['balance']) ){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        if(false == isset($requestParam['flow_plan']) || $requestParam['flow_plan'] == ''){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $param['real_name'] = $requestParam['real_name'];
        $result = UserModel::selectEntity($param);
        if(false == empty($result)){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  '此用户真实姓名已存在不能重复添加');
        }
        $num = UserModel::addEntity($_POST);
        if($num == 0){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
        }
        return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
    }

    /**
     * 用户详情
     */
    public function userDetail($id)
    {
        $result = UserModel::findEntity($id);
        $province = Provincial::findEntity($result['province_id']);
        Provincial::findEntity($result['province_id']);
        $result['province'] = $province['Provincial'];
        $city = City::findEntity($result['city_id']);
        $result['city'] = $city['city'];
        unset($result['password']);
        return $this->fetch('/userDetail', $result);
    }

    /**
     * 编辑用户
     */
    public function editUser()
    {
        $requestParam = Request::instance()->param();
        if($requestParam['user_id']){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        empty($requestParam['flow_plan_status']) ? null : $updateArr['flow_plan_status'] = $requestParam['flow_plan_status'];
        empty($requestParam['real_name']) ? null : $updateArr['real_name'] = $requestParam['real_name'];
        empty($requestParam['password']) ? null : $updateArr['password'] =  password_hash($requestParam['password'], PASSWORD_DEFAULT);
        empty($requestParam['email']) ? null : $updateArr['email'] = $requestParam['email'];
        empty($requestParam['tel']) ? null : $updateArr['tel'] = $requestParam['tel'];
        empty($requestParam['age']) ? null : $updateArr['age'] = $requestParam['age'];
        empty($requestParam['weixin']) ? null : $updateArr['weixin'] = $requestParam['weixin'];
        empty($requestParam['contact']) ? null : $updateArr['contact'] = $requestParam['contact'];
        empty($requestParam['flow_plan']) ? null : $updateArr['flow_plan'] = $requestParam['flow_plan'];
        if(empty($updateArr)){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        if(isset($requestParam['flow_plan'])){
            $updateArr['flow_plan_status'] = StatusCode::CHECK_PASS;
        }
        UserModel::updateEntity($requestParam['user_id'], $updateArr);
        return $this->selfResponse(StatusCode::UPDATE_SUCCESS,  StatusCode::UPDATE_SUCCESS_MESSAGE);
    }

    /**
     * 编辑用户流量计划状态
     */
    public function editUserStatus()
    {
        $requestParam = Request::instance()->param();
        if($requestParam['user_id'] || $requestParam['flow_plan_status']){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $updateArr['flow_plan_status'] = $requestParam['flow_plan_status'];
        UserModel::updateEntity($requestParam['user_id'], $updateArr);
        return $this->selfResponse(StatusCode::UPDATE_SUCCESS,  StatusCode::UPDATE_SUCCESS_MESSAGE);
    }




    public function test2()
    {
        $data = MaterialLibrary::selectMaterialLibrary();
        return $this->fetch('/test2', $data);
    }
}