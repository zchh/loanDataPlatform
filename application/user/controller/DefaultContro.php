<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 15:14
 */
namespace app\user\controller;
use app\user\controller\Base;
use app\common\selfConfig\StatusCode;

class DefaultContro extends Base{

    //空跳转
    public function defaultFunc()
    {
        return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
    }






}