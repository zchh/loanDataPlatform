<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/26
 * Time: 17:01
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
use app\common\model\CustomerList as CustomerListModel;

class CustomerList extends Base
{
    public function _initialize()
    {
        if(false == Session::has('admin')){
            $this->redirect('/admin/login');
        }
    }

    /**
     * 客户列表
     */
    public function index()
    {
        return $this->fetch('/customerList');
    }

    /**
     *  客户数据
     */
    public function getCustomerData()
    {
        $requestParam = Request::instance()->param();
        $param = [];
        if(isset($requestParam['selectMoney']) && $requestParam['selectMoney'] != ''){
            $paramArr = explode(" ", $requestParam['selectMoney']);
            if($paramArr[0] == '￥1000'){
                $param['small_loan_amount'] = 1000;
                $param['big_loan_amount'] = 2000;
            }elseif($paramArr[0] == '￥2001'){
                $param['small_loan_amount'] = 2001;
                $param['big_loan_amount'] = 5000;
            }elseif($paramArr[0] == '￥5001'){
                $param['small_loan_amount'] = 5001;
                $param['big_loan_amount'] = 10000;
            }elseif ($paramArr[0] == '￥10001'){
                $param['small_loan_amount'] = 10001;
                $param['big_loan_amount'] = 20000;
            }elseif ($paramArr[0] == '￥20000以上'){
                $param['small_loan_amount'] = 20000;
            }else{
                $param = [];
            }
        }
        if(isset($requestParam['time']) && $requestParam['time'] != ''){
            $param['start_time'] = $this->dateToTime($requestParam['time'].' 00:00:00');
            $param['end_time'] = $this->dateToTime($requestParam['time'].' 23:59:59');
        }
        $result['param'] = $requestParam;
        $result = CustomerListModel::selectEntity($param);
        return $this->selfResponse(StatusCode::GET_SUCCESS,  StatusCode::GET_SUCCESS_MESSAGE, $result);
    }

    /**
     * 添加客户
     */
    public function addCustomer()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            return $this->fetch('/addCustomer');
        }elseif ($_SERVER['REQUEST_METHOD']=="POST"){
            $requestParam = Request::instance()->param();
            if(empty($requestParam['name']) || empty($requestParam['tel']) || empty($requestParam['add_time']) || empty($requestParam['loan_amount']) ||
                empty($requestParam['have_provident']) || empty($requestParam['credit']) ||  empty($requestParam['have_job']) || empty($requestParam['have_social_security']) ||
                empty($requestParam['wx_number']) || empty($requestParam['age']) || empty($requestParam['qq']) || empty($requestParam['tel_status']) || empty($requestParam['remark']) ){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
            }
            $num = CustomerListModel::addEntity($_POST);
            if($num == 0){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
            }
            return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
        }else{
            return $this->fetch('/addCustomer');
        }
    }

    /**
     * 客户详情
     */
    public function customerDetail($id)
    {
        $result = CustomerListModel::findEntity($id);
        return $this->fetch('/customerDetail', $result);
    }

    /**
     * 编辑客户
     */
    public function editCustomer($id)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $requestParam = Request::instance()->param();
            if(empty($requestParam['name']) || empty($requestParam['tel']) || empty($requestParam['add_time']) || empty($requestParam['loan_amount']) ||
                empty($requestParam['have_provident']) || empty($requestParam['credit']) ||  empty($requestParam['have_job']) || empty($requestParam['have_social_security']) ||
                empty($requestParam['wx_number']) || empty($requestParam['age']) || empty($requestParam['qq']) || empty($requestParam['tel_status']) || empty($requestParam['remark']) ){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
            }
            CustomerListModel::updateEntity($id, $_POST);
            return $this->selfResponse(StatusCode::UPDATE_SUCCESS,  StatusCode::UPDATE_SUCCESS_MESSAGE);
        }else{
            $result = CustomerListModel::findEntity($id);
            return $this->fetch('/editCustomer', $result);
        }


    }
}