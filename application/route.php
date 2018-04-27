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





/*******************************************************后台管理接口*******************************************************************/


Route::get('admin/test','admin/Test/test');
Route::get('admin/test2','admin/Test/test2');                                                               //demo

Route::get('/admin/user', 'admin/User/index');                                                           //用户列表
Route::post('/admin/addUser', 'admin/User/addUser');                                                     //添加用户

Route::get('admin/customerList', 'admin/CustomerList/index');                                           //客户列表
Route::any('admin/addCustomer', 'admin/CustomerList/addCustomer');                                      //添加客户

Route::any('admin/information', 'admin/Information/index');                                             //信息公告列表
Route::any('admin/addInformation', 'admin/Information/addInformation');                                 //添加信息公告

Route::get('admin/know', 'admin/Know/index');                                                           //使用须知
Route::any('admin/addKnow', 'admin/Know/addKnow');                                                      //添加使用须知

Route::post('admin/addNormalQuestion', 'admin/NormalQuestions/addNormalQuestion');                      //添加常见问题

Route::post('admin/addService', 'admin/Service/addService');                                            //添加客户服务
Route::get('admin/getOneService', 'admin/Service/getOneService');                                       //获取一条客户服务
Route::post('admin/editService', 'admin/Service/editService');                                           //编辑一条客户服务


Route::get('/admin/provincial', 'admin/Provincial/index');                                               //地址信息



Route::rule('admin/register','admin/Login/adminRegister','POST');                                  //管理员注册
Route::post('admin/login','admin/Login/adminLogin');                                                     //管理员登录
Route::post('admin/resetPassword','admin/Login/resetPassword');                                          //管理员修改密码
Route::get('admin/logout','admin/Login/logout');                                                         //管理员退出登录
Route::post('admin/uploadPic','admin/Pic/uploadPic');                                                    //图片上传


Route::resource('admin/customer','admin/userAdmin.User');
/*******************************************************客户管理***********************************************************************************/

Route::get('borrower/customer','borrower/Customer/index'); //用户列表首页
Route::get('borrower/single/:id','borrower/Customer/single'); //单个用户详情
Route::get('borrower/customer/server','borrower/Customer/server'); //客户服务详情
Route::any('borrower/question','borrower/Customer/question'); //信息反馈
Route::get('borrower/information','borrower/Customer/information'); //信息中心
Route::any('borrower/user','borrower/Customer/user'); //个人中心
Route::post('borrower/check','borrower/Customer/check');//修改密码
Route::post('borrower/change','borrower/Customer/change');//修改密码
Route::post('borrower/check_name','borrower/Customer/check_username');//修改姓名
Route::post('borrower/check_email','borrower/Customer/check_email');//修改邮箱
Route::post('borrower/check_age','borrower/Customer/check_age');//修改年龄
Route::post('borrower/check_weixin','borrower/Customer/check_weixin');//修改微信
Route::post('borrower/check_contack','borrower/Customer/check_contack');//修改备用联系人



Route::get('borrower/index','borrower/User/index');                  //获取材质库类型


























