<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/17
 * Time: 11:01
 */

namespace app\common\model;

use app\common\selfConfig\TableConfig;
use think\Db;
use think\Model;

class MaterialLibrary extends Model
{
    public static function selectMaterialLibrary($param=[], $joinTable=[])
    {
        $whereSql = '';
        $joinConfig = [];
        $query = Db::name(TableConfig::MATERIAL_LIBRARY_TABLE)->alias('m');
        $whereParam = array();
        if(false == empty($param['keywords'])){
            $keywords = $param['keywords'];
            $whereSql .= "material_title like :keywords";
            $whereParam['keywords'] =  "%$keywords%";
        }
        if(false == empty($joinTable)){
            if(false == empty($joinTable[TableConfig::MATERIAL_LIBRARY_TYPE_TABLE])) {
                $relation = ['material_library_type t', 'm.material_type_id = t.type_id'];
                array_push($joinConfig, $relation);
            }
            $query = $query->join($joinConfig);
        }
        if(false == empty($param['material_type_id'])){
            $whereSql .= "material_type_id = :material_type_id";
            $whereParam['material_type_id'] = $param['material_type_id'];
        }
        $query2 = clone  $query;
        if(false == empty($param['page']) && false == empty($param['pageSize'])){ //分页
             $result['data'] = $query->where($whereSql)->bind($whereParam)->page($param['page'], $param['pageSize'])->select();
             $countQuery = $query2->where($whereSql)->bind($whereParam)->select();
             $result['count'] = count($countQuery);
        }else{ //不分页
             $result['data'] = $query->where($whereSql)->bind($whereParam)->select();
             $result['count'] = count($result['data']);
        }
        return $result;
    }

    public static function getMaterialLibraryById($materialId)
    {
        return Db::table(TableConfig::MATERIAL_LIBRARY_TABLE)->where('material_id', $materialId)->find();
    }

    public static function getMaterialLibraryTypeByTypeId($typeId)
    {
        return Db::table(TableConfig::MATERIAL_LIBRARY_TABLE)->where('type_id', $typeId)->select();
    }

    public static function updateMaterialLibrary($materialId, $arr)
    {
        $num = Db::table(TableConfig::MATERIAL_LIBRARY_TABLE)->where('material_id', $materialId)->update($arr);
        return $num;
    }

    public static function deleteMaterialLibraryType($typeId)
    {
        $num = Db::table(TableConfig::MATERIAL_LIBRARY_TABLE)->delete($typeId);
        return $num;
    }
}