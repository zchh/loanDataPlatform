<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 12:06
 */

namespace app\borrower\controller;


use app\common\model\User;
use think\Controller;
use think\Request;

class Cuslogin extends Controller
{
    public function index(){//登录首页
        if(Request()->isPost()){
            $real_name = $_POST['real_name'];
            $password = $_POST['password'];
            $user = new User();
            $check1 = $user->where(['real_name'=>$real_name])->find();
            if($check1){
                $result = password_verify($password,$check1['password']);
                if($result){
                    //验证成功 并进行保存
                    $_SESSION['userinfo'] = $check1;
                    if($_POST['is_remember'] == 1){//要记住
                       //保存在cookie中
                        setcookie('id',$check1['user_id'],time()+24*60*60*7,'/');//用户id
                        //将用户信息的密码加盐加密保存在cookie中
                        setcookie('password',password_hash($check1['password'],PASSWORD_DEFAULT),time()+24*60*60*7,'/');//用户密码
                    }
                    else{
                        setcookie('id',$check1['user_id']);//用户id
                        //将用户信息的密码加盐加密保存在cookie中
                        setcookie('password',password_hash($check1['password'],PASSWORD_DEFAULT));//用户密码
                    }
                    //$this->redirect('borrower/Customer/index');
                    $data = [
                        'status'=>1,
                        'msg'=>'登陆成功'
                    ];
                    return json($data);
                }
                else{
                    $data = [
                        'status'=>0,
                        'msg'=>'密码有误'
                    ];
                    return json($data);
                }
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'用户名不存在'
                ];
                return json($data);
            }
        }
        return $this->fetch('cuslogin/login');
    }
}