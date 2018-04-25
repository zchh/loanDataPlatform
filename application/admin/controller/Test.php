<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/24
 * Time: 20:12
 */

namespace app\admin\controller;

use app\common\model\AdminToken;
use app\common\model\MaterialLibrary;
use app\common\selfConfig\StatusCode;
use http\Env\Response;
use think\Controller;
use think\Session;
use think\Request;

class Test extends Controller
{
        public function test()
        {
            return $this->fetch('/test');
        }

        public function test2()
        {
            $data = MaterialLibrary::selectMaterialLibrary();
            return $this->fetch('/test2', $data);
        }
}