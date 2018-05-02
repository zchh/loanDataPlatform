<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:87:"D:\www\business\loanDataPlatform\public/../application/borrower\view\customer\user.html";i:1524898313;s:73:"D:\www\business\loanDataPlatform\application\borrower\view\base\base.html";i:1524885297;s:45:"../application/borrower/view/base/header.html";i:1524883165;s:46:"../application/borrower/view/base/sidebar.html";i:1524827581;s:45:"../application/borrower/view/base/footer.html";i:1524650783;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>合作商管理平台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" type="text/css" href="/static/webuploader/webuploader.css">
    <link rel="stylesheet" href="../../static/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../static/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../static/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../static/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../static/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../static/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>合作商</b>管理平台</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=$_SESSION['userinfo']['img']?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?=$_SESSION['userinfo']['real_name']?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?=$_SESSION['userinfo']['img']?>" class="img-circle" alt="User Image">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo url('borrower/Customer/logout'); ?>" class="btn btn-default btn-flat">注销</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <!-- 侧边栏 Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidecustomeruser panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="<?php echo url('borrower/customer/user'); ?>">
                    <img src="<?=$_SESSION['userinfo']['img']?>" class="img-circle" alt="User Image" width="200px">
                </a>
            </div>
            <div class="pull-left info">
                <p>用户名:<?=$_SESSION['userinfo']['real_name']?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>余额：<?=$_SESSION['userinfo']['balance']?></a>
            </div>
        </div>
        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">-->
        <!--<div class="input-group">-->
        <!--<input type="text" name="q" class="form-control" placeholder="Search...">-->
        <!--<span class="input-group-btn">-->
        <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
        <!--</button>-->
        <!--</span>-->
        <!--</div>-->
        <!--</form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="<?php echo url('borrower/customer/index'); ?>">
                    <i class="fa fa-th"></i> <span>我要充值</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>

            <!--单栏目-->
            <li>
                <a href="<?php echo url('borrower/customer/index'); ?>">
                    <i class="fa fa-th"></i> <span>客户信息</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('/borrower/question'); ?>">
                    <i class="fa fa-th"></i> <span>信息反馈</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('borrower/customer/server'); ?>">
                    <i class="fa fa-th"></i> <span>服务支持</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('borrower/customer/information'); ?>">
                    <i class="fa fa-th"></i> <span>信息中心</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>



            <!--多栏目-->
            <!--<li class="treeview active">-->
            <!--<a href="#">-->
            <!--<i class="fa fa-table"></i> <span>Tables</span>-->
            <!--<span class="pull-right-container">-->
            <!--<i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
            <!--</a>-->

            <!--<ul class="treeview-menu">-->
            <!--<li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>-->
            <!--<li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
            <!--</ul>-->
            <!--</li>-->






        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">


            
            <div class="row">

                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <!-- /.box -->

                    <!-- Form Element sizes -->
                    <!-- /.box -->

                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">账户信息</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-4">
                                    头像：
                                </div>
                                <div class="col-xs-4">
                                    <img src="<?php echo $data['img']; ?>" alt="头像" id="img" width="200px">
                                </div>
                                <div id="uploader-demo">
                                    <!--用来存放item-->
                                    <div id="fileList" class="uploader-list"></div>
                                    <div id="filePicker">修改</div>
                                </div>
                                <div class="col-xs-6">
                                    真实姓名：<input type="text" class="form-control" placeholder="<?php echo $data['real_name']; ?>" readonly>
                                </div>
                                <div class="col-xs-4">

                                </div>
                                <div class="col-xs-4">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#real_name">
                                        修改
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    修改密码：<input type="text" class="form-control" placeholder="已设置" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                        修改
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    联系邮箱：<input type="text" class="form-control" placeholder="<?php echo $data['email']; ?>" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-email">
                                        修改
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    联系电话：<input type="text" class="form-control" placeholder="<?php echo $data['tel']; ?>" readonly>
                                </div>
                                <div class="col-xs-9">
                                    年龄：<input type="text" class="form-control" placeholder="<?php echo $data['age']; ?>" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-age">
                                        设置
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    锁定城市：<input type="text" class="form-control" placeholder="<?php echo $data['city_id']; ?>" readonly>
                                </div>
                                <div class="col-xs-9">
                                    联系微信：<input type="text" class="form-control" placeholder="<?php echo $data['weixin']; ?>" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-weixin">
                                        设置
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    备用联系人：<input type="text" class="form-control" placeholder="<?php echo $data['contact']; ?>" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-contack">
                                        设置
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    账户余额：<input type="text" class="form-control" placeholder="<?php echo $data['balance']; ?>" readonly>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default1">
                                        历史记录
                                    </button>
                                </div>
                                <div class="col-xs-9">
                                    流量计划:(<?=$data['flow_plan']?>位/天)<input type="text" class="form-control" placeholder="<?php echo $data['flow_plan']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- Input addon -->
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改密码</h4>
                            </div>
                            <div class="col-xs-9">
                                旧密码：<input type="password" class="form-control" placeholder="请输入旧密码" id="old">
                            </div>
                            <div class="col-xs-9">
                                新密码：<input type="password" class="form-control" placeholder="请输入新密码" id="new">
                            </div>
                            <div class="col-xs-9">
                                确认密码：<input type="password" class="form-control" placeholder="确认密码" id="confirm">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 修改密码 -->
                <div class="modal fade" id="real_name"><!-- 修改姓名 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改姓名</h4>
                            </div>
                            <div class="col-xs-9">
                                姓名：<input type="text" class="form-control" placeholder="请输入真实姓名" id="username">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary1">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 修改姓名 -->
                <div class="modal fade" id="modal-email"><!-- 修改姓名 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改邮箱</h4>
                            </div>
                            <div class="col-xs-9">
                                邮箱：<input type="text" class="form-control" placeholder="请输入邮箱" id="_email">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary2">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 修改邮箱 -->
                <div class="modal fade" id="modal-age"><!-- 修改年龄 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改年龄</h4>
                            </div>
                            <div class="col-xs-9">
                                年龄：<input type="text" class="form-control" placeholder="请输入年龄" id="_age">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary3">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 设置年龄 -->
                <div class="modal fade" id="modal-weixin"><!-- 修改微信 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改微信号</h4>
                            </div>
                            <div class="col-xs-9">
                                微信：<input type="text" class="form-control" placeholder="请输入微信号" id="_weixin">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary4">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 设置微信 -->
                <div class="modal fade" id="modal-default1"><!-- 查看余额 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">查看余额</h4>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>金额</th>
                                            <th>说明</th>
                                            <th>时间</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($snacks as $s):?>
                                             <tr>
                                                 <td><?=$s['balance']?></td>
                                                 <td><?=$s['describe']?></td>
                                                 <td><?=date('Y-m-d h:i:s',$s['add_time'])?></td>
                                             </tr>
                                          <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 查看余额 -->
                <div class="modal fade" id="modal-contack"><!-- 修改备用联系人 -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">修改备用联系人</h4>
                            </div>
                            <div class="col-xs-9">
                                备用联系人：<input type="text" class="form-control" placeholder="请输入备用联系人" id="_contack">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary5">确认修改</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div><!-- 设置备用联系人 -->
                <!--/.col (right) -->
            </div>

<!-- jQuery 3 -->
<script src="/static/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/static/webuploader/webuploader.js"></script>
<script src="/static/layer/layer.js"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript">
    //修改头像
    var uploader = WebUploader.create({

        // 选完文件后，是否自动上传。
        auto: true,

        // swf文件路径
        swf: '/static/webuploader/Uploader.swf',

        // 文件接收服务端。
        server: '<?php echo url("borrower/Customer/img"); ?>',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'uploadSuccess', function( file,response) {
        //console.log(response.url);
        //$( '#'+file.id ).addClass('');
        //response图片地址
        //console.log(response.url);
        $("#img").attr("src",response.img);
        //$("#goods-logo").val(response.url);
        //console.debug($("#goods-logo").val());
    });
    //修改密码
   $(".btn-primary").on('click',function () {
      var old_password =  $("#old").val();//旧密码
      var new_password = $("#new").val();//新密码
       var confirm_password = $("#confirm").val();//确认密码
       if(old_password.trim() == ''){
         layer.msg("密码不可为空",{icon:0});
         return false;
       }
       if(new_password.trim() == ''){
           layer.msg("新密码不可为空",{icon:0});
           return false;
       }
       if(confirm_password.trim() == ''){
           layer.msg("请再确认一次密码",{icon:0});
           return false;
       }
       if(confirm_password.trim() != new_password.trim()){
           layer.msg("确认密码必须与新密码一致",{icon:0});
           return false;
       }
       $.post("<?php echo url('borrower/Customer/check'); ?>",{'password':old_password},function (rows) {
           if(rows.status == 0){
               layer.msg(rows.msg,{icon:0,time:2000},function () {
                   window.location.reload();
               });
               return false;
           }
           else {
               $.post("<?php echo url('borrower/Customer/change'); ?>",{'new_password':new_password},function (data) {
                   if(data.status == 1){
                       layer.msg(data.msg,{icon:1,time:2000},function () {
                           window.location.reload();
                       });
                   }
                   else {
                       layer.msg(data.msg,{icon:0,time:2000},function () {
                           window.location.reload();
                       });
                       return false;
                   }
               });
           }
       });

   })
    //修改姓名
    $(".btn-primary1").on('click',function () {
        var username = $("#username").val();
        var checkName = /^[\u4e00-\u9fa5]+(·[\u4e00-\u9fa5]+)*$/;
        if(checkName.test(username)){
            $.post("<?php echo url('borrower/Customer/check_username'); ?>",{'real_name':username},function (data) {
                if(data.status == 1){
                    layer.msg(data.msg,{icon:1,time:1000},function () {
                        window.location.reload();
                    });
                }
                else {
                    layer.msg(data.msg,{icon:0,time:1000},function () {
                        window.location.reload();
                    });
                    return false;
                }
            })

        }else{
            layer.msg("请输入正确的中文名",{icon:0});
            return false;
        }

    })
    //修改邮箱
    $(".btn-primary2").on('click',function () {
        var email = $("#_email").val();
        var checkEmail = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
        if(checkEmail.test(email)){
            $.post("<?php echo url('borrower/Customer/check_email'); ?>",{'email':email},function (data) {
                if(data.status == 1){
                    layer.msg(data.msg,{icon:1,time:1000},function () {
                        window.location.reload();
                    });
                }
                else {
                    layer.msg(data.msg,{icon:0,time:1000},function () {
                        window.location.reload();
                    });
                    return false;
                }
            })

        }else{
            layer.msg("请输入正确的邮箱",{icon:0});
            return false;
        }

    })
    //设置年龄
    $(".btn-primary3").on('click',function () {
        var age = $("#_age").val();
        var checkAge = /^(?:[1-9][0-9]?|1[01][0-9]|120)$/;
        if(checkAge.test(age)){
            $.post("<?php echo url('borrower/Customer/check_age'); ?>",{'age':age},function (data) {
                if(data.status == 1){
                    layer.msg(data.msg,{icon:1,time:1000},function () {
                        window.location.reload();
                    });
                }
                else {
                    layer.msg(data.msg,{icon:0,time:1000},function () {
                        window.location.reload();
                    });
                    return false;
                }
            })

        }else{
            layer.msg("请输入正确的年龄",{icon:0});
            return false;
        }
        
    })
    //设置微信
    $(".btn-primary4").on('click',function () {
        var weixin = $("#_weixin").val();
        var checkWei =/^[a-zA-Z]([-_a-zA-Z0-9]{5,19})+$/;
        if(checkWei.test(weixin)){
            $.post("<?php echo url('borrower/Customer/check_weixin'); ?>",{'weixin':weixin},function (data) {
                if(data.status == 1){
                    layer.msg(data.msg,{icon:1,time:1000},function () {
                        window.location.reload();
                    });
                }
                else {
                    layer.msg(data.msg,{icon:0,time:1000},function () {
                        window.location.reload();
                    });
                    return false;
                }
            })

        }else{
            layer.msg("请输入正确的微信号",{icon:0});
            return false;
        }

    })
    //设置备用联系人
    $(".btn-primary5").on('click',function () {
        var contack = $("#_contack").val();
        if(contack.trim() != ''){
            $.post("<?php echo url('borrower/Customer/check_contack'); ?>",{'contack':contack},function (data) {
                if(data.status == 1){
                    layer.msg(data.msg,{icon:1,time:1000},function () {
                        window.location.reload();
                    });
                }
                else {
                    layer.msg(data.msg,{icon:0,time:1000},function () {
                        window.location.reload();
                    });
                    return false;
                }
            })

        }else{
            layer.msg("备用联系人不可为空",{icon:0});
            return false;
        }

    })
</script>



        </section>
        <!-- /.content -->
    </div>

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../static/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../static/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../static/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../static/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../static/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../static/dist/js/demo.js"></script>
<script src="../../static/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../../static/plugins/iCheck/icheck.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>
