<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 10:06
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
use app\common\model\Information as InformationModel;

class Information extends Base
{

    /**
     * 信息公告列表
     */
    public function index()
    {
        $result['data'] = InformationModel::selectEntity();
        foreach ($result['data'] as $k=>$v){
            $result['data'][$k]['time'] = $this->timeToDate($v['time']);
        }
        return $this->fetch('/information', $result);
    }

    /**
     * 添加信息公告
     */
    public function addInformation()
    {
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            return $this->fetch('/addInformation');
        }elseif ($_SERVER['REQUEST_METHOD']=="POST"){
            $requestParam = Request::instance()->param();
            if(empty($requestParam['title']) || empty($requestParam['describe'])){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
            }
            $num = InformationModel::addEntity($_POST);
            if($num == 0){
                return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
            }
            return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
        }else{
            return $this->fetch('/addInformation');
        }
    }


}