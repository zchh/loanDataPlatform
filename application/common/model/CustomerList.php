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
        if(false == empty($param['small_loan_amount'])){
            $whereSql .= 'loan_amount >= :small_loan_amount';
            $whereParam['small_loan_amount'] = $param['small_loan_amount'];
        }
        if(false == empty($param['big_loan_amount'])){
            (false == empty($whereSql))?($whereSql.= ' and '):null;
            $whereSql .= 'loan_amount <= :big_loan_amount';
            $whereParam['big_loan_amount'] = $param['big_loan_amount'];
        }
        if(false == empty($param['start_time'])){
            (false == empty($whereSql))?($whereSql.= ' and '):null;
            $whereSql .= 'time >= :start_time';
            $whereParam['start_time'] = $param['start_time'];
        }
        if(false == empty($param['end_time'])){
            (false == empty($whereSql))?($whereSql.= ' and '):null;
            $whereSql .= 'time <= :end_time';
            $whereParam['end_time'] = $param['end_time'];
        }
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
        return Db::table(TableConfig::CUSTOMER_LIST)->where('customer_id', $id)->find();
    }

    public static function addEntity($arr)
    {
        return  Db::table(TableConfig::CUSTOMER_LIST)->insert($arr);
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::CUSTOMER_LIST)->where('customer_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::CUSTOMER_LIST)->delete($id);
        return $num;
    }

}