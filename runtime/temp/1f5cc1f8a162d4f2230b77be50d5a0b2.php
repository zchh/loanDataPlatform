<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"F:\php_project\git_project\loanDataPlatform\public/../application/admin\view\user.html";i:1525331881;s:81:"F:\php_project\git_project\loanDataPlatform\application\admin\view\base\base.html";i:1524830243;s:42:"../application/admin/view/base/header.html";i:1524830396;s:43:"../application/admin/view/base/sidebar.html";i:1524799955;s:42:"../application/admin/view/base/footer.html";i:1524624938;}*/ ?>
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


            
<div class="row">
    <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">


            <div class="box-header">
                <h3 class="box-title">平台用户</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <div style="position: relative">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o" id="delete"></i></button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" id="add-model">
                            添加新用户
                        </button>
                    </div>
                    <tr>
                        <th></th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>联系电话</th>
                        <th>微信账号</th>
                        <th>账户余额</th>
                        <th>流量计划</th>
                        <th>芝麻信用分</th>
                        <th>详细信息</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(!(empty($data) || (($data instanceof \think\Collection || $data instanceof \think\Paginator ) && $data->isEmpty()))): if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$single): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><input type="checkbox" name="checkNum" value="<?php echo $single['user_id']; ?>" class="checkSingle"></td>
                        <td><?php echo $single['real_name']; ?></td>
                        <td><?php echo $single['age']; ?></td>
                        <td><?php echo $single['tel']; ?></td>
                        <td><?php echo $single['weixin']; ?></td>
                        <td><?php echo $single['balance']; ?></td>

                        <?php switch($single['flow_plan_status']): case "0": ?> <td style="color: green"><a data-toggle="modal" data-target="#edit-status" id="not_check" class="<?php echo $single['user_id']; ?>"> <?php echo $single['flow_plan']; ?></a></td><?php break; case "1": ?> <td><?php echo $single['flow_plan']; ?></td><?php break; case "2": ?> <td style="color: red"><a style="color: red;" data-toggle="modal" data-target="#edit-status" id="not_pass_check" class="<?php echo $single['user_id']; ?>"><?php echo $single['flow_plan']; ?></a></td><?php break; endswitch; ?>

                        <td><?php echo $single['credit']; ?></td>
                        <td><a type="button" href="/admin/userDetail/<?php echo $single['user_id']; ?>" class="btn btn-default">
                            查看
                        </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                    </tbody>
                </table>
            </div>



            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">添加新用户</h4>
                        </div>
                        <form>
                        <div class="modal-body">
                            <label>真实姓名</label>
                            <input id="real_name" type="text" class="form-control my-colorpicker1" required>
                            <label>密码</label>
                            <input id="password" type="password" class="form-control my-colorpicker1">
                            <label>联系邮箱</label>
                            <input id="email" type="text" class="form-control my-colorpicker1">
                            <label>联系电话</label>
                            <input id="tel" type="text" class="form-control my-colorpicker1">
                            <label>年龄</label>
                            <input id="age" type="text" class="form-control my-colorpicker1">
                            <div class="form-group">
                                <label>锁定城市</label>
                                <select class="form-control" id="province_id" name="province_id">
                                    <option>请选择</option>
                                </select>
                                <select class="form-control" id="city_id" name="city_id">
                                    <option>请选择市</option>
                                </select>
                            </div>
                            <label>联系微信</label>
                            <input id="weixin" type="text" class="form-control my-colorpicker1">
                            <label>芝麻信用分</label>
                            <input id="credit" type="text" class="form-control my-colorpicker1">
                            <label>备用联系人</label>
                            <input id="contact" type="text" class="form-control my-colorpicker1">
                            <label>账户余额</label>
                            <input id="balance" type="text" class="form-control my-colorpicker1">
                            <label>流量计划:(0位/天）</label>
                            <input id="flow_plan" type="text" class="form-control my-colorpicker1">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" id="add" data-dismiss="modal">确认添加</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="edit-status">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">审核流量计划</h4>
                        </div>
                        <form>
                            <input type="hidden" name="user_id" id="user_id">
                            <div class="modal-body">
                                是否审核通过?
                                <select name="flow_plan_status">
                                    <option value="1" id="pass">通过</option>
                                    <option value="2" id="not_pass">不通过</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary" id="edit-status-sure" data-dismiss="modal">确认修改</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<script src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
<script>



    //添加用户
    $("#add").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/addUser',
            data: {
                'real_name': $("#real_name").val(),
                'password' : $("#password").val(),
                'email': $("#email").val(),
                'tel': $("#tel").val(),
                'age': $("#age").val(),
                'province_id': $('#province_id').val(),
                'city_id': $("#city_id").val(),
                'weixin': $('#weixin').val(),
                'credit': $('#credit').val(),
                'contact': $('#contact').val(),
                'balance': $('#balance').val(),
                'flow_plan': $('#flow_plan').val()
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

    //地址选择联动
    $("#add-model").click(function () {
        var dataAreas = [];
        var object = {};
        var provinceList = JSON.parse('<?php echo $provinceList; ?>');
        var cityList = JSON.parse('<?php echo $cityList; ?>');
        for(var i = 0 ; i < provinceList.length ; i ++){
            object = {
                'pid':provinceList[i].pid,
                'address':provinceList[i].Provincial,
                'parent_type':'0'
            };
            dataAreas.push(object);
        }

        for(var i = 0 ; i < cityList.length ; i ++){
            object = {
                'pid':cityList[i].cid,
                'address':cityList[i].city,
                'parent_type':cityList[i].pid
            };
            dataAreas.push(object);
        }
        for (var i = 0; i < provinceList.length; i++) {
            if (parseInt(dataAreas[i].parent_type) == 0) {
                var option = $("<option>").val(dataAreas[i].pid).text(dataAreas[i].address);
                $("#province_id").append(option);
            }
        }

        $("#province_id").bind("change", function() {
            var code = parseInt($(this).val());
            $("[name='city_id'] option").remove();
            for (var i = 0; i < dataAreas.length; i++) {
                if (parseInt(dataAreas[i].parent_type) == code) {
                    option = $("<option>").val(dataAreas[i].pid).text(dataAreas[i].address);
                    $("[name='city_id']").append(option);
                }
            }
        });
    });

    //赋值
    $("#not_pass_check").click(function () {
        var user_id = $(this).attr("class");
        $("#user_id").val(user_id);
        $("#not_pass").attr('selected', 'selected');
    });

    //赋值
    $("#not_check").click(function () {
        var user_id = $(this).attr("class");
        $("#user_id").val(user_id);
    });

    //编辑状态
    $("#edit-status-sure").click(function () {
        $.ajax({
            type: "post",
            url: '/admin/editUserStatus',
            data: {
                'user_id': $("#user_id").val(),
                'flow_plan_status':  $("[name='flow_plan_status']").val()
            },
            dataType: "json",
            success: function (data) {
                alert(data.msg);
                if (data.code == '201') {
                    window.location.reload();
                }
            },
            error: function () {
                alert('系统错误');
            }
        });
    });




    $(".checkbox-toggle").click(function () {

        $(".checkSingle").attr('checked','checked');

        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $("input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
        } else {
            //Check all checkboxes
            $("input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
    });

    $(".checkSingle").on("click",function () {
        $(this).attr('checked','checked');
    });

    //删除
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
                'type': 1,
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
