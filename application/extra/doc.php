<?php
return [
    'title' => "APi接口文档",  //文档title
    'version'=>'1.0.0', //文档版本
    'copyright'=>'Powered By Zhangweiwei', //版权信息
    'controller' => [
        //后台
        'app\\admin\\controller\\Login',
        'app\\admin\\controller\\Pic',
        'app\\admin\\controller\\userAdmin\\Administrator',
        'app\\admin\\controller\\userAdmin\\Feedback',
        'app\\admin\\controller\\userAdmin\\Shutup',
//        'app\\admin\\controller\\userAdmin\\PrivateLetter',
        'app\\admin\\controller\\productionAdmin\\Banner',
        'app\\admin\\controller\\productionAdmin\\Book',
        'app\\admin\\controller\\productionAdmin\\BookType',
        'app\\admin\\controller\\productionAdmin\\CgCinema',
        'app\\admin\\controller\\productionAdmin\\CgCinemaType',
        'app\\admin\\controller\\productionAdmin\\DailyDesign',
        'app\\admin\\controller\\productionAdmin\\HandDo',
        'app\\admin\\controller\\productionAdmin\\HandDoType',
        'app\\admin\\controller\\productionAdmin\\HotCity',
        'app\\admin\\controller\\productionAdmin\\HotEvent',
        'app\\admin\\controller\\jobAdmin\\Company',
        'app\\admin\\controller\\jobAdmin\\CompanyJob',
        'app\\admin\\controller\\jobAdmin\\Job',
        'app\\admin\\controller\\jobAdmin\\Recruitment',
        'app\\admin\\controller\\productionAdmin\\MaterialLibrary',
        'app\\admin\\controller\\productionAdmin\\MaterialLibraryType',
        'app\\admin\\controller\\productionAdmin\\Forum',
        'app\\admin\\controller\\productionAdmin\\ForumType',
//        'app\\admin\\controller\\productionAdmin\\GameBulletin',
        'app\\admin\\controller\\productionAdmin\\Production',
//        'app\\admin\\controller\\productionAdmin\\ProductionComment',
        'app\\admin\\controller\\productionAdmin\\ProductionType',
        'app\\admin\\controller\\productionAdmin\\EducationBackground',
        'app\\admin\\controller\\productionAdmin\\Pic',
//        'app\\admin\\controller\\userAdmin\\User',
        //前台
        'app\\user\\controller\\AdminUpload',
        'app\\user\\controller\\UserProductionCollect',
        'app\\user\\controller\\UserAttention',
        'app\\user\\controller\\ForumComment',
        'app\\user\\controller\\DailyDesignComment',
        'app\\user\\controller\\DailyDesignCommentReply',
        'app\\user\\controller\\Banner',
        'app\\user\\controller\\BookComment',
        'app\\user\\controller\\BookCommentReply',
        'app\\user\\controller\\Forum',
        'app\\user\\controller\\HandDoComment',
        'app\\user\\controller\\HandDoCommentReply',
        'app\\user\\controller\\CgCinemaComment',
        'app\\user\\controller\\CgCinemaCommentReply',
        'app\\user\\controller\\CgCinema',
        'app\\user\\controller\\CgCinemaType',
        'app\\user\\controller\\ProductionComment',
        'app\\user\\controller\\ProductionCommentReply',
        'app\\user\\controller\\Feedback',
        'app\\user\\controller\\Grade',
        'app\\user\\controller\\MaterialLibrary',
        'app\\user\\controller\\MaterialLibraryType',
        'app\\user\\controller\\Login',
        'app\\user\\controller\\Index',
        'app\\user\\controller\\Production',
        'app\\user\\controller\\Pic',
        'app\\user\\controller\\PrivateLetter',
        'app\\user\\controller\\HotEvent',
        'app\\user\\controller\\HandDo',
        'app\\user\\controller\\Book',
        'app\\user\\controller\\HotCity',
        'app\\user\\controller\\Company',
        'app\\user\\controller\\DailyDesign',
        'app\\user\\controller\\EducationBackground',
        'app\\user\\controller\\UserEducationExperience',
        'app\\user\\controller\\UserResume',
        'app\\user\\controller\\UserWorkExperience',
//        'app\\user\\controller\\User',
//        'app\\user\\controller\\ClickLikeRecord',



    ],
    'filter_method' => [
        //过滤 不解析的方法名称
        '_empty'
    ],
    'public_header' => [
        //全局公共头部参数
        //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
    ],
    'public_param' => [
        //全局公共请求参数，设置了所以的接口会自动增加次参数
        //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
    ],
];
