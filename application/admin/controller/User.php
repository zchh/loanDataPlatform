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
     * 编辑用户
     */
    public function editUser()
    {

    }

    /**
     * 修改密码
     */
    public function editUserPassword()
    {

    }




    public function test2()
    {
        $data = MaterialLibrary::selectMaterialLibrary();
        return $this->fetch('/test2', $data);
    }
}