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

Route::any('admin/login', 'admin/Login/adminLogin');                                                    //管理员登录
Route::any('admin/logout', 'admin/Login/logout');                                                       //管理员退出登录
Route::post('admin/resetPassword', 'admin/Login/resetPassword');                                        //管理员密码重置

Route::get('/admin/user', 'admin/User/index');                                                          //用户列表
Route::post('/admin/addUser', 'admin/User/addUser');                                                    //添加用户
Route::get('admin/userDetail/:id', 'admin/User/userDetail');                                            //用户详情
Route::post('admin/editUserStatus', 'admin/User/editUserStatus');                                       //编辑用户流量计划状态

Route::get('admin/customerList', 'admin/CustomerList/index');                                           //客户列表页面
Route::get('admin/getCustomerData', 'admin/CustomerList/getCustomerData');                              //客户列表数据
Route::post('admin/distributeCustomer', 'admin/CustomerList/distributeCustomer');                       //分配客户

Route::get('admin/customerDetail/:id', 'admin/CustomerList/customerDetail');                            //客户详情
Route::any('admin/addCustomer', 'admin/CustomerList/addCustomer');                                      //添加客户
Route::any('admin/editCustomer/:id', 'admin/CustomerList/editCustomer');                                //编辑客户

Route::any('admin/information', 'admin/Information/index');                                             //信息公告列表
Route::any('admin/addInformation', 'admin/Information/addInformation');                                 //添加信息公告

Route::get('admin/know', 'admin/Know/index');                                                           //使用须知
Route::any('admin/addKnow', 'admin/Know/addKnow');                                                      //添加使用须知

Route::post('admin/addNormalQuestion', 'admin/NormalQuestions/addNormalQuestion');                      //添加常见问题

Route::post('admin/addService', 'admin/Service/addService');                                            //添加客户服务
Route::get('admin/getOneService', 'admin/Service/getOneService');                                       //获取一条客户服务
Route::post('admin/editService', 'admin/Service/editService');                                           //编辑一条客户服务

Route::get('/admin/provincial', 'admin/Provincial/index');                                               //地址信息

Route::post('admin/delete','admin/AdminDelete/deleteRecord');                                           //删除

Route::resource('admin/customer','admin/userAdmin.User');

Route::resource('admin/customer','admin/userAdmin.User');

/*******************************************************客户管理***********************************************************************************/

Route::get('borrower/customer/:id','borrower/Customer/index'); //用户列表首页
Route::get('borrower/single/:id','borrower/Customer/single'); //单个用户详情
Route::get('borrower/customer/server','borrower/Customer/server'); //客户服务详情
Route::any('borrower/question','borrower/Customer/question'); //信息反馈
Route::get('borrower/information','borrower/Customer/information'); //信息中心
Route::any('borrower/user','borrower/Customer/user'); //个人中心
Route::post('borrower/check','borrower/Customer/check');//修改密码
Route::post('borrower/change','borrower/Customer/change');//修改密码
Route::post('borrower/check_flow','borrower/Customer/check_flow');//修改流量计划
Route::get('borrower/question_detail/:id','borrower/Customer/question_detail');//常见问题详情
Route::post('borrower/check_contack','borrower/Customer/check_contack');//修改备用联系人
Route::any('borrower/img','borrower/Customer/img');//修改头像
//Route::get('borrower/login','borrower/Customer/login');//登录
Route::any('borrower/login','borrower/Cuslogin/index');//登录
Route::get('borrower/logout','borrower/Customer/logout');//注销
Route::any('borrower/export/:ids','borrower/Customer/daochu');//批量导出
Route::any('borrower/ceshi','borrower/Customer/ceshi');//测试
Route::get('borrower/detail/:id','borrower/Customer/detail');//信息中心详情
Route::any('borrower/password','borrower/Cuslogin/forget');//忘记密码



Route::get('borrower/index','borrower/User/index');                  //获取材质库类型
/*******************************************************前台管理***********************************************************************************/
Route::get('home/index','home/Index/index');//首页
Route::get('home/service','home/Index/service');//数据服务
Route::get('home/news','home/Index/news');//新闻咨询
Route::get('home/news2','home/Index/news2');//新闻咨询
Route::get('home/about','home/Index/about');//关于我们
Route::get('home/cooperation','home/Index/cooperation');//合作入住
Route::get('about/one','home/About/one');//运营部
Route::get('about/two','home/About/two');//设计部
Route::get('about/three','home/About/three');//市场部
Route::get('about/four','home/About/four');//BD
Route::get('about/five','home/About/five');//客服部
Route::get('about/six','home/About/six');//研发部
Route::get('news/one','home/News/one');//详情1
Route::get('news/two','home/News/two');//详情2
Route::get('news/three','home/News/three');//详情1
Route::get('news/four','home/News/four');//详情2
Route::get('news/five','home/News/five');//详情1
Route::get('news/six','home/News/six');//详情2
Route::get('news/seven','home/News/seven');//详情1
Route::get('news/eight','home/News/eight');//详情2


























