<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25
 * Time: 17:00
 */

namespace app\common\model;


use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class Borrower extends Model
{
    public static function selectEntity($param = [])
    {
        $whereSql = '';
        $query = Db::name(TableConfig::CUSTOMER)->alias('c');
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
        return Db::table(TableConfig::CUSTOMER)->where('customer_id', $id)->find();
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::CUSTOMER)->where('customer_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::CUSTOMER)->delete($id);
        return $num;
    }

}