<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/27
 * Time: 15:33
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

class NormalQuestions extends Base{
    /**
     * 添加常见问题
     */
    public function addNormalQuestion()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['question_title']) || empty($requestParam['question_content'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::PARAM_WRONG);
        }
        $num = NormalQuestion::addEntity($_POST);
        if($num == 0){
            return $this->selfResponse(StatusCode::SERVER_ERROR,  StatusCode::SERVER_ERRO_MESSAGE);
        }
        return $this->selfResponse(StatusCode::CREATED_SUCCESS,  StatusCode::CREATED_SUCCESS_MESSAGE);
    }

}