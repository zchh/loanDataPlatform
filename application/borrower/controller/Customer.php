<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 18:32
 */

namespace app\borrower\controller;


use app\common\model\Information;
use app\common\model\Question;
use app\common\model\Server;
use app\common\model\User;
use app\user\controller\Base;
use think\Controller;

use app\common\model\Borrower;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Session;
use think\Request;


class Customer extends Base
{
    public function index(){//列表信息
        $data = Borrower::selectEntity();
        $this->assign('data',$data);
        return $this->fetch('customer/index',$data);
    }
    public function single(){//个人信息
        $id = Request::instance()->param('id');
        $data = Borrower::findEntity($id);
        $this->assign('data',$data);
        return $this->fetch('customer/single');//详情页面
        //$data = Borrower::findEntity()
    }
    public function server(){//服务支持
        $data = Server::selectEntity();
        $this->assign('data',$data);
        return $this->fetch('customer/service',$data);
    }
    public function question(){//信息反馈
        if(Request()->isPost()){
            $question_type = $_POST['question_type'];
            $detail = $_POST['detail'];
            if(empty($detail)){
                $this->error('问题详情不可为空');
                return false;
            }
            if(empty($question_type)){
                $this->error("问题类型不可为空");
                return false;
            }
            $qustion = new Question();
            $data_q = [
              'question_type'=>$question_type,
                'detail'=>$detail
            ];
            $result = $qustion->data($data_q)->save();
            if($result){
                $this->success('反馈成功','index');
            }
            else{
                $this->error('反馈失败');
            }
        }
        return $this->fetch('customer/question');//表单添加
    }
    public function information(){//信息中心
       $data = Information::selectEntity();
       $this->assign('data',$data);
       return $this->fetch('customer/information');
    }
    public function user(){
        //个人用户信息
       $id = 1;
       $data = User::findEntity($id);
       $this->assign('data',$data);
       return $this->fetch('customer/user');
    }
    public function check(){//检查密码
        if(Request()->isPost()){
            //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);//加密
            $id = 1;//获取当前用户id
            $user = User::findEntity($id);
            $result = password_verify($_POST['password'],$user['password']);
            if(!$result){
                $data = [
                    'status'=>0,
                    'msg'=>"密码有误"
                ];
                return json($data);
            }
        }
    }
    public function change(){//修改密码
        if(Request()->isPost()){
            $id = 1;//获取当前登录用户id
        }

    }

}