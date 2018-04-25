<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 9:50
 */
namespace app\admin\controller;

use app\common\controller\UploadPicture;
use think\Controller;
use think\Request;;
use app\admin\controller\Base;
use think\Db;
use app\common\selfConfig\StatusCode;
use app\common\model\Admin;
use app\common\selfConfig\TableConfig;
use think\Response;
use think\Session;

/**
 * @title 图片相关相关
 * @description 接口说明
 */
class Pic extends Base
{
    /**
     * @title        图片上传
     * @description 参数二选一
     * @author 张池
     * @url /admin/uploadPic
     * @method POST
     *
     *
     * @param name:file type:file require:1 other: desc:上传1张图片
     * @param name:file[] type:file require:1 other: desc:上传多张图片
     *
     * @return code:201
     * @return msg:成功上传图片
     * @return data: @
     * @data domain_name:图片域名 thumb_pic_suffix:图片缩略图后缀 pic_url:图片id
     *
     */
    public function uploadPic()
    {
//        $adminId = $this->checkAdminLogin();
//        if(false == $adminId){
//            return $this->selfResponse(StatusCode::NO_PERMISSION, StatusCode::PLEASE_LOGIN);
//        }
        $file = Request::instance()->file();
        if(true == empty($file)){
            return $this->selfResponse(StatusCode::SERVER_ERROR, StatusCode::PARAM_WRONG);
        }
        if(count($file['file']) == 1){
            $qiniu = new UploadPicture();
            $pic = $qiniu->upload();
            if($pic == false){
                return $this->selfFailResponse();
            }
            $data['domain_name'] = StatusCode::DOMAIN_NAME.'/';
            $data['thumb_pic_suffix'] = StatusCode::THUMB_PIC_SUFFIX;
            $data['pic_url'] = $pic;
            return $this->selfResponse(StatusCode::CREATED_SUCCESS, '成功上传图片', $data);
        }elseif(count($file['file']) > 1){
            $qiniu = new UploadPicture();
            $pic = $qiniu->uploadAll();
            if($pic == false){
                return $this->selfFailResponse();
            }
            $data['domain_name'] = StatusCode::DOMAIN_NAME.'/';
            $data['thumb_pic_suffix'] = StatusCode::THUMB_PIC_SUFFIX;
            $data['pic_url'] = $pic;
            return $this->selfResponse(StatusCode::CREATED_SUCCESS, '成功上传图片', $data);
        }else{
            return $this->selfFailResponse();
        }
    }




}