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
    /**
     * 客户列表
     */
    public function index()
    {
        $result['data'] = CustomerListModel::selectEntity();
        return $this->fetch('/customerList', $result);
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
}