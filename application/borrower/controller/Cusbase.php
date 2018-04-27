<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 14:58
 */

namespace app\borrower\controller;


use app\common\model\User;
use think\Controller;//统一平台验证

class Cusbase extends Controller
{
    public function _initialize(){

        $result=$this->checkLogin();
        if($result===false){
            //验证登录失败，跳转回登录页面
            $this->redirect('borrower/Cuslogin/index');
        }
    }
    public function checkLogin(){
        //>>1.先查看session中的用户信息是否存在
        if(empty($_SESSION['userinfo'])){
            $id=cookie('id');
            $password=cookie('password');//二次加密
            if(isset($id)&&isset($password)){
                //如果存在cookie，验证cookie中的用户信息是否和数据库的一致
                $userinfo = User::checkIDPassword($id,$password);
                if($userinfo===false){
                    //如果不存在，返回false
                    return false;
                }else{
                    //如果存在，将用户信息保存在session中
                    $_SESSION['userinfo']=$userinfo;
                    return true;
                }
            }
            //session中不存在用户信息，返回false
            return false;
        }
    }


}