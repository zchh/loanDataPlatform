<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 18:53
 */
namespace app\admin\controller;

use app\common\model\AdminToken;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;

class Base extends Controller
{

    //json封装
    protected function selfResponse($code, $message, $data=null)
    {
        $response['code'] = $code;
        $response['msg'] = $message;
        if($data == null && $code == StatusCode::GET_SUCCESS){
            $response['data'] = [];
        }
        if($data != null){
            $response['data'] = $data;
        }
        return json($response);
    }

    /**
     * 分页信息封装
     * @param $total          //查询结果总条数
     * @param $pageSize       //每页条数
     * @param $currentPage    //当前页数
     * @return array
     */
    protected function pageInfoConfig($total, $pageSize, $currentPage)
    {
        return  [
            'total' => (int)$total,
            'pageSize' => (int)$pageSize,
            'currentPage' => (int)$currentPage
        ];
    }

    //失败的反馈
    protected function selfFailResponse()
    {
        return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::SERVER_ERRO_MESSAGE);
    }

    //管理员校验登录
    protected function checkAdminLogin()
    {
        $header = Request::instance()->header();
        if(empty($header['adminid']) || empty($header['token'])){
            return false;
        }
        $adminToken = AdminToken::getAdminTokenByAdminId($header['adminid']);
        if(empty($adminToken)){
            return false;
        }
        if($header['token'] != $adminToken['token'] || $adminToken['lose_time']<=time()){
            return false;
        }
        return $header['adminid'];
    }

    //时间戳到时间转化
    public function timeToDate($time)
    {
        return  date('Y-m-d H:i:s', $time);
    }

    public function dateToTime($date)
    {
        return strtotime($date);

    }


}