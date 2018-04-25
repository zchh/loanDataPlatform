<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 18:10
 */
namespace app\common\selfConfig;
class StatusCode
{
    const GET_SUCCESS                      = '200';                                      //服务器成功返回用户请求的数据
    const CREATED_SUCCESS                  = '201';                                      //用户新建数据成功。
    const UPDATE_SUCCESS                   = '201';                                      //用户修改数据成功
    const DELETE_SUCCESS                   = '204';                                      //用户删除数据成功
    const NO_PERMISSION                    = '401';                                      //表示用户没有权限（令牌、用户名、密码错误）
    const SERVER_ERROR                     = '500';                                      //服务器错误

    const GET_SUCCESS_MESSAGE              = '获取数据成功';
    const CREATED_SUCCESS_MESSAGE          = '创建数据成功';
    const UPDATE_SUCCESS_MESSAGE           = '更新数据成功';
    const DELETE_SUCCESS_MESSAGE           = '删除数据成功';
    const HAVE_DELETED                     = '该数据已不存在';

    const HAVE_SHUT_UP_MESSAGE             = '您已被禁言，此功能暂不能使用';
    const NO_PERMISSION_MESSAGE            = '无权限';
    const SERVER_ERRO_MESSAGE              = '服务器错误';
    const PICTURE_FAIL                      = '图片上传失败';
    const USERNAME_PASSWORD_WRONG          = '用户名或密码错误';
    const LOGIN_SUCCESS                     = '登录成功';
    const PLEASE_LOGIN                      = '请登录';
    const PARAM_WRONG                       = '参数错误';
    const DOMAIN_NAME                        = 'http://p5o6x5qe1.bkt.clouddn.com';        //图片域名
    const THUMB_PIC_SUFFIX                 = '-thumb';                                    //缩略图后缀

    const SUPER_ADMIN                      = '1';                                         //超级管理员
    const NORMAL_ADMIN                     = '2';                                         //普通管理员
    const HAVE_LOGIN                       = '1';                                         //已登录
    const NOT_LOGIN                        = '0';                                         //未登录

    const HAVE_SHUT_UP                     = '1';                                         //被禁言
    const NOT_SHUT_UP                      = '0';                                         //未被禁言

    const SHUTUP_ONE_DAY                   = '1';                                         //禁言一天
    const SHUTUP_ONE_MONTH                 = '2';                                         //禁言一个月
    const SHUTUP_ONE_YEAR                  = '3';                                         //禁言一年
    const SHUTUP_FOREVER                   = '4';                                         //永久禁言
    const BE_SHUTUP                        = '1';                                         //被禁言
    const NOT_BE_SHUTUP                    = '0';                                         //未被禁言

    const MATERIAL_LIBRARY_FATHER_TYPE     = '0';                                         //父类材质库类型

    const LIKE_NUM_ORDER                   = '1';                                         //按点赞量最多排序
    const COMMENT_NUM_ORDER                = '2';                                         //按评论量最多排序
    const PAGE_VIEW_ORDER                  = '3';                                         //按浏览量最多排序
    const TIME_ORDER                       = '4';                                         //按时间排序

    const CLICK_LIKE_PRODUCTION            = '1';                                         //作品点赞
    const CLICK_LIKE_PRODUCTION_COMMENT    = '2';                                         //作品评论点赞
    const CLICK_LIKE_PRODUCTION_COMMENT_REPLY= '3';                                       //作品评论回复点赞
    const CLICK_LIKE_MATERIAL              = '4';                                         //材质点赞
    const CLICK_LIKE_BOOK                  = '5';                                         //书店点赞
    const CLICK_LIKE_BOOK_COMMENT          = '6';                                         //书店评论点赞
    const CLICK_LIKE_BOOK_COMMENT_REPLY    = '7';                                         //书店评论回复点赞
    const CLICK_LIKE_CG                    = '8';                                         //CG影院点赞
    const CLICK_LIKE_CG_COMMENT            = '9';                                         //CG影院评论点赞
    const CLICK_LIKE_CG_COMMENT_REPLY      = '10';                                        //CG影院评论回复点赞
    const CLICK_LIKE_DAILY                 = '11';                                        //每日设计点赞
    const CLICK_LIKE_DAILY_COMMENT         = '12';                                        //每日设计评论点赞
    const CLICK_LIKE_DAILY_COMMENT_REPLY   = '13';                                        //每日设计评论回复点赞
    const CLICK_LIKE_FORUM                 = '14';                                        //论坛点赞
    const CLICK_LIKE_FORUM_COMMENT         = '15';                                        //论坛评论点赞
    const CLICK_LIKE_HAND_DO               = '17';                                        //手办点赞
    const CLICK_LIKE_HAND_DO_COMMENT       = '18';                                        //手办评论点赞
    const CLICK_LIKE_HAND_DO_COMMENT_REPLY = '19';                                        //手办评论回复点赞

    const BOOK_COMMENT_REPLY               = '1';                                         //书籍评论回复
    const CG_CINEMA_COMMENT_REPLY          = '2';                                         //CG影院评论回复
    const DAILY_DESIGN_COMMENT_REPLY       = '3';                                         //每日设计评论回复
    const HAND_DO_COMMENT_REPLY            = '4';                                         //手办评论回复
    const PRODUCTION_COMMENT_REPLY         = '5';                                         //作品评论回复

    const ADD_BOOK_PAGE_VIEW               = '1';                                         //添加书籍浏览量
    const ADD_CG_CINEMA_PAGE_VIEW          = '2';                                         //添加CG影院浏览量
    const ADD_DAILY_DESIGN_PAGE_VIEW       = '3';                                         //添加每日设计浏览量
    const ADD_HAND_DO_PAGE_VIEW            = '4';                                         //添加手办浏览量
    const ADD_MATERIAL_PAGE_VIEW           = '5';                                         //添加材质浏览量
    const ADD_PRODUCTION_PAGE_VIEW         = '6';                                         //添加作品浏览量

    const NOT_LIKE                         = '0';                                         //未点赞
    const HAVE_LIKED                       = '1';                                         //已经点赞
    const HAVE_ATTENTION                   = '1';                                         //已关注
    const NOT_ATTENTION                    = '0';                                         //未关注
    const LETTER_SEND_DELETE               = '1';                                         //发送方删除
    const LETTER_SEND_NOT_DELETE           = '0';                                         //发送方不删除
    const LETTER_RECEIVE_DELETE            = '1';                                         //接收方删除
    const LETTER_RECEIVE_NOT_DELETE        = '0';                                         //接收方不删除
    const LETTER_HAVE_READ                 = '1';                                         //私信已读
    const LETTER__NOT_READ                 = '0';                                         //私信未读

    const PRODUCTION_DETAIL_PIC               = '1';                                      //作品详情图
    const HAND_DO_DETAIL_PIC                  = '2';                                      //手办详情
    const BOOK_DETAIL_PIC                     = '3';                                      //书籍详情

    const CG_CINEMA_GRADE                     = '1';                                       //cg影院评分
    const BOOK_GRADE                          = '2';                                       //书籍评分

    const DELETE_PRODUCTION                   = '1';                                       //删除作品
    const DELETE_BOOK                         = '2';                                       //删除书店
    const DELETE_CG_CINEMA                    = '3';                                       //删除CG影院
    const DELETE_FORUM                        = '4';                                       //删除论坛帖子
    const DELETE_DAILY_DESIGN                 = '5';                                       //删除每日设计
    const DELETE_HAND_DO                      = '6';                                       //删除手办

    const ONE_LEVEL_FORUM_COMMENT             = '1';                                       //一级论坛评论
    const TWO_LEVEL_FORUM_COMMENT             = '0';                                       //二级论坛评论

    const HOT_EVENT_SHOW                      = '1';                                       //热门活动展示
    const HOT_EVENT_NOT_SHOW                  = '0';                                       //热门活动不展示

    const BANNER_SHOW                         = '1';                                       //banner展示
    const BANNER_NOT_SHOW                     = '0';                                       //banner不展示

}