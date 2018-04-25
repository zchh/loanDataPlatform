<?php
use think\Route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('/', 'user/DefaultContro/defaultFunc');                                                        //空跳转


/*******************************************************后台管理接口*******************************************************************/


Route::get('admin/test','admin/Test/test');
Route::get('admin/test2','admin/Test/test2');                                                            //demo



Route::rule('admin/register','admin/Login/adminRegister','POST');                                  //管理员注册
Route::post('admin/login','admin/Login/adminLogin');                                                     //管理员登录
Route::post('admin/resetPassword','admin/Login/resetPassword');                                          //管理员修改密码
Route::get('admin/logout','admin/Login/logout');                                                         //管理员退出登录
Route::post('admin/uploadPic','admin/Pic/uploadPic');                                                    //图片上传


Route::resource('admin/user','admin/userAdmin.User');

/*******************************************************客户管理***********************************************************************************/
Route::post('user/register','user/Login/register');                                                          //用户注册
Route::post('user/login','user/Login/login');                                                                //用户登录
Route::post('user/logout','user/Login/logout');                                                              //用户退出登录


Route::post('user/addFeedback','user/Feedback/addFeedback');                                                  //添加留言反馈
Route::get('user/getMaterialLibraryType','user/MaterialLibraryType/getMaterialLibraryType');                  //获取材质库类型


























