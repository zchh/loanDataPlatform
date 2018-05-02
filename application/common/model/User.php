<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 9:55
 */
namespace app\common\model;

use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class User extends Model
{
    public static function selectEntity($param = [])
    {
        $whereSql = '';
        $query = Db::name(TableConfig::USER)->alias('u');
        $whereParam = array();
        if(false == empty($param['real_name'])){
            $whereSql .= 'real_name=:real_name';
            $whereParam['real_name'] = $param['real_name'];
        }
        $data = $query->where($whereSql)->bind($whereParam)->select();
        return $data;
    }

    public static function findEntity($id)
    {
        return Db::table(TableConfig::USER)->where('user_id', $id)->find();
    }

    public static function addEntity($arr)
    {
        $arr['password'] = password_hash($arr['password'], PASSWORD_DEFAULT);
        return  Db::table(TableConfig::USER)->insert($arr);
    }

    public static function updateEntity($id, $arr)
    {
        $num = Db::table(TableConfig::USER)->where('user_id', $id)->update($arr);
        return $num;
    }

    public static function deleteEntity($id)
    {
        $num = Db::table(TableConfig::USER)->delete($id);
        return $num;
    }
    public static function checkIDPassword($id,$password){
        $user = User::findEntity($id);
        if(empty($user)){
            return false;
        }
        else{
            //校验密码
            $result = password_verify($user['password'],$password);//未加密 加密
            if($result){
                return $user;
            }
            else{
                return false;
            }

        }
    }
}