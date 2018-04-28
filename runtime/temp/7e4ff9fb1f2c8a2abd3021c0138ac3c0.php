<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"D:\www\business\loanDataPlatform\public/../application/admin\view\addCustomer.html";i:1524797526;s:70:"D:\www\business\loanDataPlatform\application\admin\view\base\base.html";i:1524797526;s:42:"../application/admin/view/base/header.html";i:1524650783;s:43:"../application/admin/view/base/sidebar.html";i:1524797526;s:42:"../application/admin/view/base/footer.html";i:1524650783;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Data Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
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

    <link rel="stylesheet" href="../../static/plugins/timepicker/bootstrap-timepicker.min.css">


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
        <span class="logo-lg"><b>Admin</b>LTE</span>
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
                        <img src="../../static/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../static/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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

            <!--单栏目-->
            <li>
                <a href="/admin/user">
                    <i class="fa fa-th"></i> <span>平台用户</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>

            <li>
                <a href="/admin/customerList">
                    <i class="fa fa-th"></i> <span>客户管理</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>

            <li>
                <a href="/admin/addInformation">
                    <i class="fa fa-th"></i> <span>信息公告</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>

            <li>
                <a href="/admin/service">
                    <i class="fa fa-th"></i> <span>服务支持</span>
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
    <div class="col-xs-12">
        <!-- /.box -->

            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">添加新客户</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-4">
                                    <input id="name" name="name" type="text" class="form-control" id="inputEmail3" placeholder="真实姓名">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">电话</label>
                                <div class="col-sm-4">
                                    <input id="tel" name="tel" type="text" class="form-control" placeholder="电话">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">申请时间</label>
                                <div class="col-sm-4">
                                    <input name="add_time" type="text" class="form-control" id="datepicker">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">贷款金额</label>
                                <div class="col-sm-4">
                                    <input id="loan_amount" name="loan_amount" type="text" class="form-control" placeholder="贷款金额">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">有无公积金</label>
                                <div class="col-sm-4">
                                    <input id="have_provident" name="have_provident" type="text" class="form-control"  placeholder="有无公积金">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">芝麻分</label>
                                <div class="col-sm-4">
                                    <input id="credit" name="credit" type="text" class="form-control" placeholder="芝麻分">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">有无工作</label>
                                <div class="col-sm-4">
                                    <input id="have_job" name="have_job" type="text" class="form-control"  placeholder="有无工作">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">有无社保</label>
                                <div class="col-sm-4">
                                    <input id="have_social_security" name="have_social_security" type="text" class="form-control" placeholder="有无社保">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">微信</label>
                                <div class="col-sm-4">
                                    <input id="wx_number" name="wx_number" type="text" class="form-control"  placeholder="微信">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">年龄</label>
                                <div class="col-sm-4">
                                    <input id="age" name="age" type="text" class="form-control" placeholder="年龄">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">QQ号</label>
                                <div class="col-sm-4">
                                    <input id="qq" name="qq" type="text" class="form-control"  placeholder="QQ号">
                                </div>
                                <label for="inputEmail3" class="col-sm-2 control-label">电话状态</label>
                                <div class="col-sm-4">
                                    <input id="tel_status" name="tel_status" type="text" class="form-control" placeholder="电话状态">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-10">
                                <textarea id="remark" name="remark" class="form-control" rows="3" placeholder="输入 ..."></textarea>
                                </div>
                            </div>


                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">取消</button>
                            <button type="button" class="btn btn-info pull-right" id="addCustomer">确定</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>


        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>




<script src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
<script>


    //添加用户
    $("#addCustomer").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/addCustomer',
            data: {
                'name': $("#name").val(),
                'tel': $("#tel").val(),
                'add_time':  $("[name='add_time']").val(),
                'loan_amount': $("#loan_amount").val(),
                'have_provident': $("#have_provident").val(),
                'credit': $("#credit").val(),
                'have_job': $("#have_job").val(),
                'have_social_security': $("#have_social_security").val(),
                'wx_number': $("#wx_number").val(),
                'age': $("#age").val(),
                'qq': $("#qq").val(),
                'tel_status': $("#tel_status").val(),
                'remark': $("#remark").val(),
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '500') {
                    alert(data.msg);
                }else {
                    alert('添加成功');
                    window.location.href= 'customerList';
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    });




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
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })

    $('#datepicker').datepicker({
        autoclose: true,
        language:"en",
    });
</script>
</body>
</html>
