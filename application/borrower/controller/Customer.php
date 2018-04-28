<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 18:32
 */

namespace app\borrower\controller;


use app\common\model\Balance;
use app\common\model\CustomerList;
use app\common\model\Information;
use app\common\model\Know;
use app\common\model\NormalQuestion;
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


class Customer extends Cusbase
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
    public function server(){//服务支持 (使用须知 常见问题 客户服务)
        $data = Server::selectEntity();//客户服务
        $know = Know::selectEntity();//使用须知
        $question = NormalQuestion::selectEntity();
        $this->assign('data',$data);
        $this->assign('know',$know);
        $this->assign('question',$question);
        return $this->fetch('customer/service');
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
                'detail'=>$detail,
                'user_id'=>$_SESSION['userinfo']['user_id']//反馈人
            ];
            $result = $qustion->data($data_q)->save();
            if($result){
                $data = [
                   'status'=>1,
                    'msg'=>'反馈成功'
                ];

            }
            else{
                $data = [
                    'status'=>1,
                    'msg'=>'反馈失败'
                ];
            }
            return json($data);
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
       $id = $_SESSION['userinfo']['user_id'];
       $data = User::findEntity($id);
        $snacks = Balance::selectEntity(['user_id'=>$id]);
        $this->assign('data',$data);
        $this->assign('snacks',$snacks);
       return $this->fetch('customer/user');
    }
    public function check(){//检查密码
        if(Request()->isPost()){
            //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);//加密
            $id = $_SESSION['userinfo']['user_id'];//获取当前用户id
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
            $id = $_SESSION['userinfo']['user_id'];//获取当前登录用户id
            $password = password_hash($_POST['new_password'],PASSWORD_DEFAULT);//加密
            $result = User::updateEntity($id,['password'=>$password]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'修改成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'修改失败'
                ];
            }
            return json($data);
        }
    }
    public function check_username(){
        if(Request()->isPost()){
            $id = $_SESSION['userinfo']['user_id'];//获取当前用户id
            $result = User::updateEntity($id,['real_name'=>$_POST['real_name']]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'修改姓名成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'修改姓名失败'
                ];
            }
            return json($data);
        }
    }
    public function check_email(){
        if(Request()->isPost()){
            $id = 1;//获取当前用户id
            $result = User::updateEntity($id,['email'=>$_POST['email']]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'修改邮箱成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'修改邮箱失败'
                ];
            }
            return json($data);
        }

    }
    public function check_age(){
        if(Request()->isPost()){
            $id = $_SESSION['userinfo']['user_id'];//获取当前用户id
            $result = User::updateEntity($id,['age'=>$_POST['age']]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'设置年龄成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'设置年龄失败'
                ];
            }
            return json($data);
        }

    }
    public function check_weixin(){//设置微信
        if(Request()->isPost()){
            $id = $_SESSION['userinfo']['user_id'];;//获取当前用户id
            $result = User::updateEntity($id,['weixin'=>$_POST['weixin']]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'设置微信成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'设置微信失败'
                ];
            }
            return json($data);
        }
    }
    public function check_contack(){//设置备用联系人
        if(Request()->isPost()){
            $id  = $_SESSION['userinfo']['user_id'];//获取当前用户id
            $result = User::updateEntity($id,['contact'=>$_POST['contack']]);
            if($result){
                $data = [
                    'status'=>1,
                    'msg'=>'设置备用联系人成功'
                ];
            }
            else{
                $data = [
                    'status'=>0,
                    'msg'=>'设置备用联系人失败'
                ];
            }
            return json($data);
        }
    }
    public function img(){//修改头像
       $file = request()->file('file');
       if($file){
           $info = $file->move(ROOT_PATH.'public/static'.DS.'@web');//移动成功
           if($info){
               $path = $info->getSaveName();
               $data = [
                   'img'=>'/static/@web/'.$path
               ];
               //并进行保存
               $id = $_SESSION['userinfo']['user_id'];
               $result = User::updateEntity($id,$data);
               if($result){
                   return json($data);
               }
           }
       }
    }
    public function logout(){//注销
        //>>1.接收数据
        //>>2.处理数据
        //>>1.删除COOKIE中的id和PASSWord
        setcookie('id',null,-1,'/');
        setcookie('password',null,-1,'/');
        //>>2.删除session中的用户信息
        unset($_SESSION['userinfo']);
        //>>3.显示页面
        $this->redirect('/borrower/login');
    }
    public function daochu(){
           //获取选中的id值
            $id_array =Request::instance()->param('ids');
            $ids = explode(',',$id_array);//所有id的组成数组
            array_pop($ids);
            $cus = new CustomerList();
            $where['customer_id'] = ['in',$ids];
            $data = $cus->where($where)->select();
            Vendor('PHPExcel.Classes.PHPExcel');//调用类库,路径是基于vendor文件夹的
            Vendor('PHPExcel.Classes.PHPExcel.Worksheet.Drawing');
            Vendor('PHPExcel.Classes.PHPExcel.Writer.Excel2007');
            $objExcel = new \PHPExcel();
            //set document Property
            $objWriter = \PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');

            $objActSheet = $objExcel->getActiveSheet();
            $key = ord("A");
            $letter =explode(',',"A,B,C,D,E,F,G");//7
            $arrHeader =  array('姓名','年龄','联系电话','微信账号','贷款金额','芝麻信用','云端分发时间');
            //填充表头信息
            $lenth =  count($arrHeader);
            for($i = 0;$i < $lenth;$i++) {
                $objActSheet->setCellValue("$letter[$i]1","$arrHeader[$i]");
            };
            //填充表格信息
            foreach($data as $k=>$v){
                $k +=2;
                $objActSheet->setCellValue('A'.$k,$v['name']);//姓名
                $objActSheet->setCellValue('B'.$k, $v['age']);//年龄
                $objActSheet->setCellValue('C'.$k, $v['tel']);//联系电话
                $objActSheet->setCellValue('D'.$k, $v['wx_number']);//微信账号
                $objActSheet->setCellValue('E'.$k, $v['loan_amount']);//贷款金额
                $objActSheet->setCellValue('F'.$k, $v['credit']);//芝麻信用
                $objActSheet->setCellValue('G'.$k, date('Y-m-d h:i:s',$v['add_time']));//时间
                $objActSheet->getRowDimension($k)->setRowHeight(20);//表格高度
            }
            $width = array(20,20,15,10,10,30,10);
            //设置表格的宽度
            $objActSheet->getColumnDimension('A')->setWidth($width[0]);
            $objActSheet->getColumnDimension('B')->setWidth($width[3]);
            $objActSheet->getColumnDimension('C')->setWidth($width[5]);
            $objActSheet->getColumnDimension('D')->setWidth($width[3]);
            $objActSheet->getColumnDimension('E')->setWidth($width[3]);
            $objActSheet->getColumnDimension('F')->setWidth($width[3]);
            $objActSheet->getColumnDimension('G')->setWidth($width[3]);
            $objActSheet->getColumnDimension('H')->setWidth($width[5]);
            $outfile = "客户信息".date("Y-m-d").".xls";
            ob_end_clean();
            header("Content-Type: application/force-download");
            header("Content-Type: application/octet-stream");
            header("Content-Type: application/download");
            header('Content-Disposition:inline;filename="'.$outfile.'"');
            header("Content-Transfer-Encoding: binary");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Pragma: no-cache");
            $objWriter->save('php://output');
        }//导出
//    public function ceshi(){
//        return $this->fetch('customer/ceshi');
//    }

}