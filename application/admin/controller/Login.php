<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 9:50
 */
namespace app\admin\controller;

use app\common\model\AdminToken;
use think\Controller;
use think\Request;;
use app\admin\controller\Base;
use think\Db;
use app\common\selfConfig\StatusCode;
use app\common\model\Admin;
use app\common\selfConfig\TableConfig;
use think\Session;

/**
 * @title 后台管理登录相关
 * @description 接口说明
 */
class Login extends Base
{
    /**
     * @title        管理员注册
     * @description 根据条件获取所有用户
     * @author 张池
     * @url /admin/register
     * @method POST
     *
     *
     * @param name:admin_name type:text require:1 other: desc:管理员名
     * @param name:name type:text require:1 other: desc:姓名
     * @param name:phone_number type:text require:1 other: desc:电话号码
     * @param name:password type:text require:1 desc:管理员密码
     *
     * @return code:201
     * @return msg:注册成功
     */
   public function adminRegister()
   {
       $adminId = $this->checkAdminLogin();
       if(false == $adminId){
           return $this->selfResponse(StatusCode::NO_PERMISSION, StatusCode::PLEASE_LOGIN);
       }
       $requestParam = Request::instance()->param();
       if(true == empty($requestParam['admin_name']) || true == empty($requestParam['password'])){
           return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
       }
      $param['admin_name'] = $requestParam['admin_name'];
      $selectResult = Admin::selectAdmin($param);
      if($selectResult['count'] != 0){
          return $this->selfResponse(StatusCode::SERVER_ERROR, '注册失败，存在相同的管理员名');
      }
      $password = password_hash($requestParam['password'], PASSWORD_DEFAULT);
      $insertData = [
          'admin_name'=>$requestParam['admin_name'],
          'name'=>$requestParam['name'],
          'phone_number'=>$requestParam['phone_number'],
          'password'=>$password
      ];
      $result = Db::name(TableConfig::ADMIN_TABLE)->insert($insertData);
      if($result != 1){
          return $this->selfFailResponse();
      }
       return $this->selfResponse(StatusCode::CREATED_SUCCESS, '注册成功');
   }

    /**
     *  管理员登录
     */
   public function adminLogin()
   {
       $requestParam = Request::instance()->param();
       if(true == empty($requestParam['username']) || true == empty($requestParam['password'])){
           return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
       }
       $param['username'] = $requestParam['username'];
       $selectResult = Admin::selectAdmin($param);
       if($selectResult['count'] == 0){
           return $this->selfResponse(StatusCode::NO_PERMISSION, StatusCode::USERNAME_PASSWORD_WRONG);
       }
       if(password_verify($requestParam['password'], $selectResult['data'][0]['password'])){
           Session::set('admin',$selectResult['data'][0]);
           return $this->selfResponse(StatusCode::GET_SUCCESS, StatusCode::LOGIN_SUCCESS);
       }else{
           return $this->selfResponse(StatusCode::NO_PERMISSION, StatusCode::USERNAME_PASSWORD_WRONG);
       }
   }

    /**
     *  管理员退出登录
     */
   public function logout()
   {
       Session::delete('admin');
       return $this->redirect('admin/login');
   }

    /**
     * @title        管理员修改密码
     * @description  管理员修改密码
     * @author 张池
     * @url /admin/resetPassword
     * @method POST
     *
     *
     * @param name:admin_id type:text require:1 other: desc:管理员id
     * @param name:old_password type:text require:1 desc:原始密码
     * @param name:new_password type:text require:1 desc:新密码
     *
     *
     * @return code:201
     * @return msg: 密码修改成功
     */
   public function resetPassword()
   {
       $adminId = $this->checkAdminLogin();
       if(false == $adminId){
           return $this->selfResponse(StatusCode::NO_PERMISSION, StatusCode::PLEASE_LOGIN);
       }
       $requestParam = Request::instance()->param();
       if(true == empty($requestParam['admin_id']) || true == empty($requestParam['old_password']) || true == empty($requestParam['new_password'])){
           return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
       }
       //判断原来的密码是否正确
       $admin = Admin::getAdminByAdminId($requestParam['admin_id']);
       if(false == password_verify($requestParam['old_password'], $admin['password'])){
           return $this->selfResponse(StatusCode::NO_PERMISSION, '原始密码不正确');
       }
       $updateArr['password'] = password_hash( $requestParam['new_password'], PASSWORD_DEFAULT);
       $num = Admin::updateAdmin($requestParam['admin_id'], $updateArr);
       if($num == 0){
           return $this->selfFailResponse();
       }
       return $this->selfResponse(StatusCode::UPDATE_SUCCESS, '密码修改成功');
   }


    //创建用户token记录
    private function createAdminToken($admin_id)
    {
        $token = $this->createToken();
        $insertData = [
            'admin_id'=>$admin_id,
            'token'=>$token,
            'create_time'=>time(),
            'lose_time'=>(time()+2592000), //30天过期
        ];
        $result = Db::name(TableConfig::ADMIN_TOKEN_TABLE)->insert($insertData);
        if($result == 0){
            return $result;
        }
        return $token;
    }

    //更新管理员token
    private function updateAdminToken($admin_id)
    {
        $token = $this->createToken();
        $updateData = [
            'token'=>$token,
            'create_time'=>time(),
            'lose_time'=>(time()+2592000), //30天过期
        ];
        AdminToken::updateAdminToken($admin_id, $updateData);
        return $token;
    }

    private function createToken()
    {
        return md5(time().rand(0,32768));
    }





}