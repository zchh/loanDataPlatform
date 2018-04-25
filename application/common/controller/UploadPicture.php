<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 18:05
 */

namespace app\common\controller;


use gmars\qiniu\Qiniu;
use think\Config;
use think\Controller;
use think\Exception;

class UploadPicture extends Controller
{
    public function _initialize()
    {
        Config::load(APP_PATH.'common/config.php');
    }

    public function upload()
    {
        try{
            $qiniu = new Qiniu();
            $result = $qiniu->upload();
            return $result;
        }catch (Exception $e){
            return $e;
        }
    }

    public function uploadAll()
    {
        try{
            $qiniu = new Qiniu();
            $result = $qiniu->uploadAll();
            return $result;
        }catch (Exception $e){
            return $e;
        }
    }
}