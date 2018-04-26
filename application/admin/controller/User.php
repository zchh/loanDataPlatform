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
        $data = UserModel::selectEntity();
        return $this->fetch('/customer', $data);
    }

    /**
     * 添加新用户
     */
    public function addUser()
    {

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