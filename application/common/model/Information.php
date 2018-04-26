<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/26
 * Time: 15:39
 */

namespace app\common\model;

use think\Model;
use think\Db;
use app\common\selfConfig\TableConfig;

class Information extends Model
{
    public static function selectEntity($param = [])
    {
        $whereSql = '';
        $query = Db::name(TableConfig::INFORMATION)->alias('i');
        $whereParam = array();
//        if(false == empty($param['role'])){
//            $whereSql .= 'role=:role';
//            $whereParam['role'] = $param['role'];
//        }
//        if(false == empty($param['admin_name'])){
//            (false == empty($whereSql))?($whereSql.= ' and '):null;
//            $whereSql .= 'admin_name=:admin_name';
//            $whereParam['admin_name'] = $param['admin_name'];
//        }
        $data = $query->where($whereSql)->bind($whereParam)->select();
        return $data;
    }

    public static function findEntity($id)
    {
        return Db::table(TableConfig::INFORMATION)->where('information_id', $id)->find();
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::INFORMATION)->where('information_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::INFORMATION)->delete($id);
        return $num;
    }

}