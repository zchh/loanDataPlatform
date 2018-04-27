<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/26
 * Time: 17:04
 */
namespace app\common\model;

use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class CustomerList extends Model
{
    public static function selectEntity($param = [])
    {
        $whereSql = '';
        $query = Db::name(TableConfig::CUSTOMER_LIST)->alias('u');
        $whereParam = array();
//        if(false == empty($param['real_name'])){
//            $whereSql .= 'real_name=:real_name';
//            $whereParam['real_name'] = $param['real_name'];
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
        return Db::table(TableConfig::CUSTOMER_LIST)->where('user_id', $id)->find();
    }

    public static function addEntity($arr)
    {
        return  Db::table(TableConfig::CUSTOMER_LIST)->insert($arr);
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::CUSTOMER_LIST)->where('user_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::CUSTOMER_LIST)->delete($id);
        return $num;
    }

}