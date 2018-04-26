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
        'app\\customer\\controller\\AdminUpload',
        'app\\customer\\controller\\UserProductionCollect',
        'app\\customer\\controller\\UserAttention',
        'app\\customer\\controller\\ForumComment',
        'app\\customer\\controller\\DailyDesignComment',
        'app\\customer\\controller\\DailyDesignCommentReply',
        'app\\customer\\controller\\Banner',
        'app\\customer\\controller\\BookComment',
        'app\\customer\\controller\\BookCommentReply',
        'app\\customer\\controller\\Forum',
        'app\\customer\\controller\\HandDoComment',
        'app\\customer\\controller\\HandDoCommentReply',
        'app\\customer\\controller\\CgCinemaComment',
        'app\\customer\\controller\\CgCinemaCommentReply',
        'app\\customer\\controller\\CgCinema',
        'app\\customer\\controller\\CgCinemaType',
        'app\\customer\\controller\\ProductionComment',
        'app\\customer\\controller\\ProductionCommentReply',
        'app\\customer\\controller\\Feedback',
        'app\\customer\\controller\\Grade',
        'app\\customer\\controller\\MaterialLibrary',
        'app\\customer\\controller\\MaterialLibraryType',
        'app\\customer\\controller\\Login',
        'app\\customer\\controller\\Index',
        'app\\customer\\controller\\Production',
        'app\\user\\controller\\Pic',
        'app\\customer\\controller\\PrivateLetter',
        'app\\customer\\controller\\HotEvent',
        'app\\customer\\controller\\HandDo',
        'app\\customer\\controller\\Book',
        'app\\customer\\controller\\HotCity',
        'app\\customer\\controller\\Company',
        'app\\customer\\controller\\DailyDesign',
        'app\\customer\\controller\\EducationBackground',
        'app\\customer\\controller\\UserEducationExperience',
        'app\\customer\\controller\\UserResume',
        'app\\customer\\controller\\UserWorkExperience',
//        'app\\customer\\controller\\User',
//        'app\\customer\\controller\\ClickLikeRecord',



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
