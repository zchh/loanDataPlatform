<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//header("Access-Control-Allow-Origin: * ");
//header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
//header('Access-Control-Allow-Headers: Content-Type, adminId, userId, token, Access-Control-Allow-Headers, Authorization, X-Requested-With');  //非简单请求（PUT,DELETE）
//header('Access-Control-Allow-Credentials: true');
// [ 应用入口文件 ]
if($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
    exit;
}
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');


define('SESSION_PATH', __DIR__.'./runtime/session/');


// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

