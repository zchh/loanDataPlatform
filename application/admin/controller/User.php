<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 17:16
 */
namespace app\admin\controller;

use app\common\model\AdminToken;
use app\common\model\MaterialLibrary;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\User as UserModel;

class User extends Controller
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
        return $this->fetch('/user', $result);
    }

    /**
     * 添加新用户
     */
    public function addUser()
    {
        $requestParam = Request::instance()->param();
        $addData['real_name'] = $requestParam['real_name'];
        $num = UserModel::addEntity($addData);
        if($num == 0){
            return json(array('code'=>500, 'msg'=>'添加失败'));
        }
        return json(array('code'=>201, 'msg'=>'添加成功'));
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