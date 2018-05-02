<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"F:\php_project\git_project\loanDataPlatform\public/../application/admin\view\know.html";i:1524888900;s:81:"F:\php_project\git_project\loanDataPlatform\application\admin\view\base\base.html";i:1524830243;s:42:"../application/admin/view/base/header.html";i:1524830396;s:43:"../application/admin/view/base/sidebar.html";i:1524799955;s:42:"../application/admin/view/base/footer.html";i:1524624938;}*/ ?>
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

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#reset-model">重置密码</a>
                            </div>
                            <div class="pull-right">
                                <a href="/admin/logout" class="btn btn-default btn-flat">退出登录</a>
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
                <a href="/admin/information">
                    <i class="fa fa-th"></i> <span>信息公告</span>
                    <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                </a>
            </li>

            <li>
                <a href="/admin/know">
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


            
<div class="col-md-12">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">使用须知</a></li>
            <li><a href="#timeline" data-toggle="tab">常见问题</a></li>
            <li><a href="#settings" data-toggle="tab">客服服务</a></li>
        </ul>
        <div class="tab-content">

            <div class="active tab-pane" id="activity">

                <form action="" enctype="multipart/form-data">
                <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="hidden" name="know_id" value="<?php echo $know_id; ?>">
                        <textarea name="know_content" id="myEditor" style="width:100%;height:380px;"><?php echo $know_content; ?></textarea>
                    </div>
                </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default">重置信息</button>
                    <button type="button" class="btn btn-info pull-right" id="addKnow">确定发布</button>
                </div>
                </form>
            </div>

            <div class="tab-pane" id="timeline">
                <div class="box-header">
                    <h3 class="box-title">常见问题</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <div style="position: relative">
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o" id="delete"></i></button>
                            <button type="button" class="btn btn-default pull-right"  data-toggle="modal" data-target="#add_question">
                                添加
                            </button>
                        </div>
                        </thead>
                        <tbody>

                        <?php if(!(empty($questionData) || (($questionData instanceof \think\Collection || $questionData instanceof \think\Paginator ) && $questionData->isEmpty()))): if(is_array($questionData) || $questionData instanceof \think\Collection || $questionData instanceof \think\Paginator): $i = 0; $__LIST__ = $questionData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$single): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox" name="checkNum" value="<?php echo $single['question_id']; ?>"></td>
                            <td><?php echo $single['question_title']; ?></td>
                            <td><?php echo $single['create_time']; ?></td>
                            <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                查看
                            </button>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                    编辑
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                        </tbody>
                    </table>


                    <div class="modal fade" id="add_question">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">添加常见问题</h4>
                                </div>
                                <form enctype="multipart/form-data form-horizontal">
                                    <div class="modal-body">
                                        <div class="form-group">
                                          <div class="col-sm-10">
                                            <input name="question_title" type="text" class="form-control my-colorpicker1" id="inputEmail3" placeholder="请在这里输入标题">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-sm-12">
                                            <textarea name="question_content" id="questionEditor" style="width:100%;height:380px;"></textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" id="addQuestion" data-dismiss="modal">确认添加</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>



                </div>
            </div>

            <div class="tab-pane" id="settings">
                <div class="box-header">
                    <h3 class="box-title">客户服务</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <div style="position: relative">
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                            <button type="button" class="btn btn-default pull-right"  data-toggle="modal" data-target="#add_service">
                                添加
                            </button>
                        </div>
                        <tr>
                            <th></th>
                            <th>角色</th>
                            <th>姓名</th>
                            <th>邮箱</th>
                            <th>电话</th>
                            <th>微信</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if(!(empty($serviceData) || (($serviceData instanceof \think\Collection || $serviceData instanceof \think\Paginator ) && $serviceData->isEmpty()))): if(is_array($serviceData) || $serviceData instanceof \think\Collection || $serviceData instanceof \think\Paginator): $i = 0; $__LIST__ = $serviceData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$single): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?php echo $single['role']; ?></td>
                            <td><?php echo $single['name']; ?></td>
                            <td><?php echo $single['email']; ?></td>
                            <td><?php echo $single['tel']; ?></td>
                            <td><?php echo $single['weixin']; ?></td>
                            <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                查看
                            </button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#edit_service" value="<?php echo $single['service_id']; ?>" id="edit_service_button">
                                    编辑
                            </button>
                            </td>

                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                        </tbody>
                    </table>


                    <div class="modal fade" id="add_service">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">添加客户服务</h4>
                                </div>
                                <form enctype="multipart/form-data form-horizontal">
                                    <div class="modal-body">
                                        <label>角色</label>
                                        <input id="role" name="role" type="text" class="form-control my-colorpicker1">
                                        <label>姓名</label>
                                        <input id="name" name="name" type="text" class="form-control my-colorpicker1">
                                        <label>邮箱</label>
                                        <input id="email" name="email" type="text" class="form-control my-colorpicker1">
                                        <label>电话</label>
                                        <input id="tel" name="tel" type="text" class="form-control my-colorpicker1">
                                        <label>微信</label>
                                        <input id="weixin" name="weixin" type="text" class="form-control my-colorpicker1">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" id="addService" data-dismiss="modal">确认添加</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="edit_service">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">编辑客户服务</h4>
                                </div>
                                <form enctype="multipart/form-data form-horizontal">
                                    <div class="modal-body">
                                        <input type="hidden" name="service_id">
                                        <lable>角色</lable>
                                        <input  name="role2" type="text" class="form-control my-colorpicker1">
                                        <label>姓名</label>
                                        <input  name="name2" type="text" class="form-control my-colorpicker1">
                                        <label>邮箱</label>
                                        <input  name="email2" type="text" class="form-control my-colorpicker1">
                                        <label>电话</label>
                                        <input  name="tel2" type="text" class="form-control my-colorpicker1">
                                        <label>微信</label>
                                        <input name="weixin2" type="text" class="form-control my-colorpicker1">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                                        <button type="button" class="btn btn-primary" id="editService" data-dismiss="modal">确认修改</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../static/ueditor/ueditor.config.js"></script>
<script src="../../static/ueditor/ueditor.all.min.js"></script>
<script>

    var ue = UE.getEditor('myEditor');
    var ue2 = UE.getEditor('questionEditor');

    //添加信息
    $("#addKnow").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/addKnow',
            data: {
                'title': $("[name='title']").val(),
                'know_content':  $("[name='know_content']").val()
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '500') {
                    alert(data.msg);
                }else {
                    alert('添加成功');
                    window.location.reload();
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    });


    //添加常见问题
    $("#addQuestion").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/addNormalQuestion',
            data: {
                'question_title': $("[name='question_title']").val(),
                'question_content':  $("[name='question_content']").val()
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '500') {
                    alert(data.msg);
                }else {
                    alert('添加成功');
                    window.location.reload();
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    });

    //添加客户服务
    $("#addService").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/addService',
            data: {
                'role': $("[name='role']").val(),
                'name': $("[name='name']").val(),
                'tel': $("[name='tel']").val(),
                'weixin': $("[name='weixin']").val(),
                'email': $("[name='email']").val(),
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '500') {
                    alert(data.msg);
                }else {
                    alert('添加成功');
                    window.location.reload();
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    });


    //编辑客户服务
    $("#editService").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/editService',
            data: {
                'service_id': $("[name='service_id']").val(),
                'role': $("[name='role2']").val(),
                'name': $("[name='name2']").val(),
                'tel': $("[name='tel2']").val(),
                'weixin': $("[name='weixin2']").val(),
                'email': $("[name='email2']").val(),
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '500') {
                    alert(data.msg);
                }else {
                    alert('修改成功');
                    window.location.reload();
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    });

    //获取单条记录
    $("#edit_service_button").click(function () {
        $.ajax({
            type: "get",
            url: '/admin/getOneService',
            data: {
                'service_id': $(this).val()
            },
            dataType: "json",
            success: function(result) {
                $("[name='service_id']").val(result.data.service_id);
                $("[name='role2']").val(result.data.role);
                $("[name='name2']").val(result.data.name);
                $("[name='tel2']").val(result.data.tel);
                $("[name='weixin2']").val(result.data.weixin);
                $("[name='email2']").val(result.data.email);
            },
            error:function(){
                alert('系统错误');
            }
        });
    });


    $(".checkbox-toggle").click(function () {

        $(".checkSingle").attr('checked','checked');

        var clicks = $(this).data('clicks');
        if (clicks) {
            $("input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
        } else {
            $("input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
    });

    $(".checkSingle").on("click",function () {
        $(this).attr('checked','checked');
    });

    //删除常见问题
    $("#delete").on("click",function () {
        var obj=document.getElementsByName('checkNum');
        var s='';
        for(var i=0; i<obj.length; i++){
            if(obj[i].checked){
                s += obj[i].value;
                s += ',';
            }
        }

        $.ajax({
            type: "post",
            url: '/admin/delete',
            data: {
                'type': 4,
                'checkNum': s
            },
            dataType: "json",
            success: function (data) {
                alert(data.msg);
                if (data.code == '204') {
                    window.location.reload();
                }
            },
            error: function () {
                alert('系统错误');
            }
        });
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




    <div class="modal fade" id="reset-model">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">密码重置</h4>
                </div>
                <form>
                    <div class="modal-body">
                        <label>原密码</label>
                        <input id="oldPassword" name="oldPassword" type="password" class="form-control my-colorpicker1">
                        <label>新密码</label>
                        <input id="newPassword" name="newPassword" type="password" class="form-control my-colorpicker1">
                        <label>确认新密码</label>
                        <input id="newPassword2" name="newPassword2" type="password" class="form-control my-colorpicker1">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">重置</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"  id="sure_edit">确认修改</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




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

    $("#sure_edit").on("click",function () {
        //管理员登录
        $.ajax({
            type: "post",
            url: '/admin/resetPassword',
            data: {
                'oldPassword':  $("[name='oldPassword']").val(),
                'newPassword':  $("[name='newPassword']").val(),
                'newPassword2':  $("[name='newPassword2']").val()
            },
            dataType: "json",
            success: function(data) {
                if(data.code == '201'){
                    alert(data.msg);
                }else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('系统错误');
            }
        });
    })


</script>
</body>
</html>
