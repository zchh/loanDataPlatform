<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/29
 * Time: 17:53
 */

namespace app\common\model;

use app\common\selfConfig\StatusCode;
use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class Pic extends Model
{
    public static function selectPic($param)
    {
        $whereSql = '';
        $query = Db::name(TableConfig::PIC_TABLE)->alias('u');
        $whereParam = array();
        if(false == empty($param['type'])){
            $whereSql .= "type = :type";
            $whereParam['type'] = $param['type'];
        }
        if(false == empty($param['object_id'])){
            (false == empty($whereSql))?($whereSql.= ' and '):null;
            $whereSql .= "object_id = :object_id";
            $whereParam['object_id'] = $param['object_id'];
        }
        $query2 = clone $query;
        if(false == empty($param['page']) && false == empty($param['pageSize'])){
            $result['data'] = $query->where($whereSql)->bind($whereParam)->page($param['page'], $param['pageSize'])->select();
        }else{
            $result['data'] = $query->where($whereSql)->bind($whereParam)->select();
        }
        $countQuery = $query2->where($whereSql)->bind($whereParam)->select();
        $result['count'] = count($countQuery);
        return $result;
    }

    public static function getPicForumPicId($picId)
    {
        return Db::table(TableConfig::PIC_TABLE)->where('pic_id', $picId)->find();
    }

    public static function deletePic($picId)
    {
        return Db::table(TableConfig::PIC_TABLE)->delete($picId);
    }

    public static  function  PicSelect($param,$id){
        if(false == empty($param['page']) && false == empty($param['pageSize'])){
            $result['data'] = Db::name(TableConfig::PIC_TABLE)->where('object_id',$id)->where('type',$param['type'])->page($param['page'], $param['pageSize'])->field('pic_url')->select();;
        }else{
            $result['data'] = Db::name(TableConfig::PIC_TABLE)->where('object_id',$id)->where('type',$param['type'])->field('pic_url')->select();
        }
        $countQuery =Db::name(TableConfig::PIC_TABLE)->where('object_id',$id)->where('type',$param['type'])->select();
        $result['count'] = count($countQuery);
        return $result;
    }

}