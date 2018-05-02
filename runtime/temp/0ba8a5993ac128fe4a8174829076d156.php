<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:89:"D:\www\business\loanDataPlatform\public/../application/borrower\view\customer\single.html";i:1524898037;s:73:"D:\www\business\loanDataPlatform\application\borrower\view\base\base.html";i:1524885297;s:45:"../application/borrower/view/base/header.html";i:1524883165;s:46:"../application/borrower/view/base/sidebar.html";i:1524827581;s:45:"../application/borrower/view/base/footer.html";i:1524650783;}*/ ?>
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
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">客户信息</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    姓名：<input type="text" class="form-control" placeholder="<?php echo $data['name']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    电话：<input type="text" class="form-control" placeholder="<?php echo $data['tel']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    客户来源：<input type="text" class="form-control" placeholder="<?php echo $data['customer_s']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    贷款金额：<input type="text" class="form-control" placeholder="<?php echo $data['loan_amount']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    芝麻分：<input type="text" class="form-control" placeholder="<?php echo $data['credit']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    有无公积金：<input type="text" class="form-control" placeholder="" readonly>
                                </div>
                                <div class="col-xs-6">
                                    有无工作：<input type="text" class="form-control" placeholder="<?php echo $data['have_job']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    年龄：<input type="text" class="form-control" placeholder="<?php echo $data['age']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    QQ号：<input type="text" class="form-control" placeholder="<?php echo $data['qq']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    微信：<input type="text" class="form-control" placeholder="<?php echo $data['wx_number']; ?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    申请时间：<input type="text" class="form-control" placeholder="<?=date('Y-m-d h:i:s',$data['add_time'])?>" readonly>
                                </div>
                                <div class="col-xs-6">
                                    电话状态：<input type="text" class="form-control" placeholder="<?php echo $data['tel_status']; ?>" readonly>
                                </div>
                                <div class="col-xs-9">
                                    文档文件：<a href="" class="form-control">资料.docx</a><br/>
                                             <a href="" class="form-control">资料.docx</a>
                                </div>
                                <div class="col-xs-9">
                                    信息备注：<textarea class="form-control" readonly><?php echo $data['remark']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        <!-- /.content -->
    <!-- /.content-wrapper -->
<!-- ./wrapper -->

<!-- jQuery 3 -->



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
