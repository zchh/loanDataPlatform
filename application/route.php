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

Route::get('/', 'customer/DefaultContro/defaultFunc');                                                        //空跳转


/*******************************************************后台管理接口*******************************************************************/


Route::get('admin/test','admin/Test/test');
Route::get('admin/test2','admin/Test/test2');                                                            //demo



Route::rule('admin/register','admin/Login/adminRegister','POST');                                  //管理员注册
Route::post('admin/login','admin/Login/adminLogin');                                                     //管理员登录
Route::post('admin/resetPassword','admin/Login/resetPassword');                                          //管理员修改密码
Route::get('admin/logout','admin/Login/logout');                                                         //管理员退出登录
Route::post('admin/uploadPic','admin/Pic/uploadPic');                                                    //图片上传


Route::resource('admin/customer','admin/userAdmin.User');

/*******************************************************客户管理***********************************************************************************/
Route::post('customer/register','customer/Login/register');                                                          //用户注册
Route::post('customer/login','customer/Login/login');                                                                //用户登录
Route::post('customer/logout','customer/Login/logout');                                                              //用户退出登录


Route::post('customer/addFeedback','customer/Feedback/addFeedback');                                                  //添加留言反馈
Route::get('customer/getMaterialLibraryType','customer/MaterialLibraryType/getMaterialLibraryType');                  //获取材质库类型
Route::get('borrower/customer','borrower/Customer/index'); //用户列表首页
Route::get('borrower/customer/single','borrower/Customer/single'); //单个用户详情
Route::get('borrower/customer/server','borrower/Customer/server'); //单个用户详情


























