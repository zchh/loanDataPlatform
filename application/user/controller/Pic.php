<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 18:05
 */

namespace app\user\controller;

use app\common\model\ProductionType;
use app\common\model\User;
use app\user\controller\Base;
use app\common\controller\UploadPicture;
use app\common\selfConfig\StatusCode;
use app\common\selfConfig\TableConfig;
use think\Db;
use think\Request;
use app\common\model\MaterialLibrary as MaterialLibraryModel;
use app\common\model\Pic as PicModel;

/**
 * @title 作品
 * @description 作品
 * @group 前台
 */
class Pic extends Base
{
    /**
     * @title 获取详情图片
     * @description 不用校验登陆，根据条件获取详情图片(作品详情)
     * @author 张池
     * @url customer/getDetailPics
     * @method get
     *
     *
     * @param name:type type:int require:1 other: desc:类型(1:作品详情图片)
     * @param name:object_id type:int require:1 other: desc:对象id(作品id)
     * @param name:page type:int require:1 other: desc:页码
     * @param name:pageSize type:int require:1 desc:一页条数
     *
     * @return code:200
     * @return msg:获取数据成功
     * @return data: @
     * @data  pic_url:作品图片链接
     * @return pageInfo:分页信息@
     * @pageInfo count:总条数 page:当前页数 pageSize:页面条数
     */
    public function getDetailPics()
    {
        $requestParam = Request::instance()->param();
        if(empty($requestParam['type']) || empty($requestParam['object_id']) || empty($requestParam['page']) || empty($requestParam['pageSize'])){
            return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
        }
        $result = PicModel::selectPic($requestParam);
        foreach ($result['data'] as $k=>$v){
            unset($result['data'][$k]['pic_id']);
            unset($result['data'][$k]['type']);
            unset($result['data'][$k]['object_id']);
            $result['data'][$k]['pic_url'] = StatusCode::DOMAIN_NAME.'/'.$result['data'][$k]['pic_url'];
        }
        $pageInfo = $this->pageInfoConfig($result['count'], $requestParam['pageSize'], $requestParam['page']);
        return $this->selfResponse(StatusCode::GET_SUCCESS, StatusCode::GET_SUCCESS_MESSAGE, $result['data'], $pageInfo);
    }


}