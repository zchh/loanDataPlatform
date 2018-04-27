<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/26
 * Time: 14:41
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
use app\common\model\Provincial as ProvincialModel;

class Provincial extends Base
{
    /**
     * 所有的省份
     */
    public function index()
    {
        $result['provinceList'] = ProvincialModel::selectEntity();
        $result['cityList'] = City::selectEntity();
        return $this->selfResponse(StatusCode::GET_SUCCESS,  StatusCode::GET_SUCCESS_MESSAGE, $result);
    }

}