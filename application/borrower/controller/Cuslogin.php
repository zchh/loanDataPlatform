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
            $check1 = $user->where(['real_name'=>$real_name])->find();//用户名
            $check2 = $user->where(['tel'=>$real_name])->find();//手机号比对
            if($check1){//用户名比对成功
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
                        'msg'=>'用户名或者密码有误'
                    ];
                    return json($data);
                }
            }
            else{//用户名比对不成功
                if($check2){//电话比对成功
                    $result = password_verify($password,$check2['password']);//密码也成功 择可以登录
                    if($result){
                        //验证成功 并进行保存
                        $_SESSION['userinfo'] = $check2;
                        if($_POST['is_remember'] == 1){//要记住
                            //保存在cookie中
                            setcookie('id',$check2['user_id'],time()+24*60*60*7,'/');//用户id
                            //将用户信息的密码加盐加密保存在cookie中
                            setcookie('password',password_hash($check2['password'],PASSWORD_DEFAULT),time()+24*60*60*7,'/');//用户密码
                        }
                        else{
                            setcookie('id',$check2['user_id']);//用户id
                            //将用户信息的密码加盐加密保存在cookie中
                            setcookie('password',password_hash($check2['password'],PASSWORD_DEFAULT));//用户密码
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
                            'msg'=>'用户名或者密码有误'
                        ];
                        return json($data);
                    }

                }

            }
        }
        return $this->fetch('cuslogin/login');
    }
    public function forget(){
        //忘记密码
        if(Request()->isPost()){
            //手机号
            $tel = $_POST['tel'];
            $password = $_POST['password'];//密码
            $yzm = $_POST['yzm'];
           $user = new User();
           $check =  $user->where(['tel'=>$tel])->find();
           if($check){
               //验证验证码（暂时写死）
               if($yzm == 123){
                   //进行修改密码
                   $password = password_hash($password,PASSWORD_DEFAULT);//加密
                   $result = $user->where('tel',$tel)->update(['password'=>$password]);
                   if($result){
                       $data = [
                           'msg'=>'修改成功',
                           'status'=>1
                       ];
                       return json($data);

                   }
                   else{
                       $data = [
                           'msg'=>'修改失败，请稍后再试',
                           'status'=>0
                       ];
                       return json($data);
                   }
               }
               else{
                   $data = [
                       'msg'=>'验证码错误',
                       'status'=>0
                   ];
                   return json($data);
               }
           }
           else{
               $data = [
                   'msg'=>'该电话用户不存在',
                   'status'=>0
               ];
               return json($data);
           }
        }
        return $this->fetch('cuslogin/password');//忘记密码
    }
}