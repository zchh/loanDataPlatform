<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"F:\php_project\loanDataPlatform\public/../application/admin\view\test.html";i:1524626883;s:42:"../application/admin/view/base/header.html";i:1524626382;s:43:"../application/admin/view/base/sidebar.html";i:1524624836;s:42:"../application/admin/view/base/footer.html";i:1524624938;}*/ ?>
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
                <a href="#">
                    <i class="fa fa-th"></i> <span>Widgets</span>
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


            

            


            <!--<div class="row">-->
                <!--<div class="col-xs-12">-->
                    <!--&lt;!&ndash; /.box &ndash;&gt;-->

                    <!--<div class="box">-->


                        <!--<div class="box-header">-->
                            <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
                        <!--<div class="box-body">-->
                            <!--<table id="example1" class="table table-bordered table-striped">-->
                                <!--<thead>-->
                                <!--<tr>-->
                                    <!--<th>Rendering engine</th>-->
                                    <!--<th>Browser</th>-->
                                    <!--<th>Platform(s)</th>-->
                                    <!--<th>Engine version</th>-->
                                    <!--<th>CSS grade</th>-->
                                <!--</tr>-->
                                <!--</thead>-->
                                <!--<tbody>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>Internet-->
                                        <!--Explorer 4.0-->
                                    <!--</td>-->
                                    <!--<td>Win 95+</td>-->
                                    <!--<td> 4</td>-->
                                    <!--<td>X</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>Internet-->
                                        <!--Explorer 5.0-->
                                    <!--</td>-->
                                    <!--<td>Win 95+</td>-->
                                    <!--<td>5</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>Internet-->
                                        <!--Explorer 5.5-->
                                    <!--</td>-->
                                    <!--<td>Win 95+</td>-->
                                    <!--<td>5.5</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>Internet-->
                                        <!--Explorer 6-->
                                    <!--</td>-->
                                    <!--<td>Win 98+</td>-->
                                    <!--<td>6</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>Internet Explorer 7</td>-->
                                    <!--<td>Win XP SP2+</td>-->
                                    <!--<td>7</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Trident</td>-->
                                    <!--<td>AOL browser (AOL desktop)</td>-->
                                    <!--<td>Win XP</td>-->
                                    <!--<td>6</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Firefox 1.0</td>-->
                                    <!--<td>Win 98+ / OSX.2+</td>-->
                                    <!--<td>1.7</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Firefox 1.5</td>-->
                                    <!--<td>Win 98+ / OSX.2+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Firefox 2.0</td>-->
                                    <!--<td>Win 98+ / OSX.2+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Firefox 3.0</td>-->
                                    <!--<td>Win 2k+ / OSX.3+</td>-->
                                    <!--<td>1.9</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Camino 1.0</td>-->
                                    <!--<td>OSX.2+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Camino 1.5</td>-->
                                    <!--<td>OSX.3+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Netscape 7.2</td>-->
                                    <!--<td>Win 95+ / Mac OS 8.6-9.2</td>-->
                                    <!--<td>1.7</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Netscape Browser 8</td>-->
                                    <!--<td>Win 98SE+</td>-->
                                    <!--<td>1.7</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Netscape Navigator 9</td>-->
                                    <!--<td>Win 98+ / OSX.2+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.0</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.1</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.1</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.2</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.2</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.3</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.3</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.4</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.4</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.5</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.5</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.6</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>1.6</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.7</td>-->
                                    <!--<td>Win 98+ / OSX.1+</td>-->
                                    <!--<td>1.7</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Mozilla 1.8</td>-->
                                    <!--<td>Win 98+ / OSX.1+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Seamonkey 1.1</td>-->
                                    <!--<td>Win 98+ / OSX.2+</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Gecko</td>-->
                                    <!--<td>Epiphany 2.20</td>-->
                                    <!--<td>Gnome</td>-->
                                    <!--<td>1.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>Safari 1.2</td>-->
                                    <!--<td>OSX.3</td>-->
                                    <!--<td>125.5</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>Safari 1.3</td>-->
                                    <!--<td>OSX.3</td>-->
                                    <!--<td>312.8</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>Safari 2.0</td>-->
                                    <!--<td>OSX.4+</td>-->
                                    <!--<td>419.3</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>Safari 3.0</td>-->
                                    <!--<td>OSX.4+</td>-->
                                    <!--<td>522.1</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>OmniWeb 5.5</td>-->
                                    <!--<td>OSX.4+</td>-->
                                    <!--<td>420</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>iPod Touch / iPhone</td>-->
                                    <!--<td>iPod</td>-->
                                    <!--<td>420.1</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Webkit</td>-->
                                    <!--<td>S60</td>-->
                                    <!--<td>S60</td>-->
                                    <!--<td>413</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 7.0</td>-->
                                    <!--<td>Win 95+ / OSX.1+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 7.5</td>-->
                                    <!--<td>Win 95+ / OSX.2+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 8.0</td>-->
                                    <!--<td>Win 95+ / OSX.2+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 8.5</td>-->
                                    <!--<td>Win 95+ / OSX.2+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 9.0</td>-->
                                    <!--<td>Win 95+ / OSX.3+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 9.2</td>-->
                                    <!--<td>Win 88+ / OSX.3+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera 9.5</td>-->
                                    <!--<td>Win 88+ / OSX.3+</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Opera for Wii</td>-->
                                    <!--<td>Wii</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Nokia N800</td>-->
                                    <!--<td>N800</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Presto</td>-->
                                    <!--<td>Nintendo DS browser</td>-->
                                    <!--<td>Nintendo DS</td>-->
                                    <!--<td>8.5</td>-->
                                    <!--<td>C/A<sup>1</sup></td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>KHTML</td>-->
                                    <!--<td>Konqureror 3.1</td>-->
                                    <!--<td>KDE 3.1</td>-->
                                    <!--<td>3.1</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>KHTML</td>-->
                                    <!--<td>Konqureror 3.3</td>-->
                                    <!--<td>KDE 3.3</td>-->
                                    <!--<td>3.3</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>KHTML</td>-->
                                    <!--<td>Konqureror 3.5</td>-->
                                    <!--<td>KDE 3.5</td>-->
                                    <!--<td>3.5</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Tasman</td>-->
                                    <!--<td>Internet Explorer 4.5</td>-->
                                    <!--<td>Mac OS 8-9</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>X</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Tasman</td>-->
                                    <!--<td>Internet Explorer 5.1</td>-->
                                    <!--<td>Mac OS 7.6-9</td>-->
                                    <!--<td>1</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Tasman</td>-->
                                    <!--<td>Internet Explorer 5.2</td>-->
                                    <!--<td>Mac OS 8-X</td>-->
                                    <!--<td>1</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>NetFront 3.1</td>-->
                                    <!--<td>Embedded devices</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>NetFront 3.4</td>-->
                                    <!--<td>Embedded devices</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>A</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>Dillo 0.8</td>-->
                                    <!--<td>Embedded devices</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>X</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>Links</td>-->
                                    <!--<td>Text only</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>X</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>Lynx</td>-->
                                    <!--<td>Text only</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>X</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>IE Mobile</td>-->
                                    <!--<td>Windows Mobile 6</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Misc</td>-->
                                    <!--<td>PSP browser</td>-->
                                    <!--<td>PSP</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>C</td>-->
                                <!--</tr>-->
                                <!--<tr>-->
                                    <!--<td>Other browsers</td>-->
                                    <!--<td>All others</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>-</td>-->
                                    <!--<td>U</td>-->
                                <!--</tr>-->
                                <!--</tbody>-->
                                <!--<tfoot>-->
                                <!--<tr>-->
                                    <!--<th>Rendering engine</th>-->
                                    <!--<th>Browser</th>-->
                                    <!--<th>Platform(s)</th>-->
                                    <!--<th>Engine version</th>-->
                                    <!--<th>CSS grade</th>-->
                                <!--</tr>-->
                                <!--</tfoot>-->
                            <!--</table>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.box &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.col &ndash;&gt;-->
            <!--</div>-->
            <!-- /.row -->






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
