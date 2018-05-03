<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3
 * Time: 11:29
 */

namespace app\common\model;

use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class CustomerDistribute extends Model
{
    public static function selectEntity($param = [])
    {
        $whereSql = '';
        $query = Db::name(TableConfig::CUSTOMER_DISTRIBUTE)->alias('u');
        $whereParam = array();
        $query = $query->where($whereSql)->bind($whereParam);
        if(false == empty($param['limit'])){
            $data = $query->limit(0, $param['limit'])->select();
        }else{
            $data = $query->select();
        }
        return $data;
    }

    public static function findEntity($id)
    {
        return Db::table(TableConfig::CUSTOMER_DISTRIBUTE)->where('distribute_id', $id)->find();
    }

    public static function addEntity($arr)
    {
        $arr['distribute_time'] = time();
        return  Db::table(TableConfig::CUSTOMER_DISTRIBUTE)->insert($arr);
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::CUSTOMER_DISTRIBUTE)->where('distribute_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::CUSTOMER_DISTRIBUTE)->delete($id);
        return $num;
    }

}