<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 11:30
 */
namespace app\admin\controller;

use app\common\model\City;
use app\common\model\MaterialLibrary;
use app\common\model\NormalQuestion;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;
use app\common\model\User as UserModel;
use app\admin\controller\Base;
use app\common\model\Provincial;
use app\common\model\CustomerList as CustomerListModel;
use app\common\model\Information as InformationModel;
use app\common\model\Know as KnowModel;
use app\common\model\Service;

class Know extends Base
{
    public function _initialize()
    {
        if(false == Session::has('admin')){
            $this->redirect('/admin/login');
        }
    }

    public function index()
    {
        $data = KnowModel::selectEntity();
        $result['know_id'] = $data[0]['know_id'];
        $result['know_content'] = $data[0]['know_content'];

        //常见问题
        $result['questionData'] = NormalQuestion::selectEntity();
        foreach ($result['questionData'] as $k=>$v){
            $result['questionData'][$k]['create_time'] = $this->timeToDate($v['create_time']);
        }
        //客服服务
        $result['serviceData'] = Service::selectEntity();
        return $this->fetch('/know', $result);
    }

    /**
     * 添加使用须知
     */
    public function addKnow()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            return $this->fetch('/know');
        }elseif ($_SERVER['REQUEST_METHOD']=="POST"){
            $requestParam = Request::instance()->param();
            if(empty($requestParam['know_id']) || empty($requestParam['know_content'])){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
            }
            $updateArr['know_content'] = $requestParam['know_content'];
            KnowModel::updateEntity($requestParam['know_id'], $updateArr);
            return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
        }else{
            return $this->fetch('/know');
        }
    }

}