<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:94:"F:\php_project\git_project\loanDataPlatform\public/../application/admin\view\customerList.html";i:1525271425;s:81:"F:\php_project\git_project\loanDataPlatform\application\admin\view\base\base.html";i:1524830243;s:42:"../application/admin/view/base/header.html";i:1524830396;s:43:"../application/admin/view/base/sidebar.html";i:1524799955;s:42:"../application/admin/view/base/footer.html";i:1524624938;}*/ ?>
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


    <form class="well form-search" method="get" action="">
        <div class="search_type cc mb10">
            <div class="mb11">
                贷款金额：
                <div id="bt1">全部</div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="bt2">￥1000 - ￥2000</div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="bt3">￥2001 - ￥5000</div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="bt4">￥5001 - ￥10000</div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="bt5">￥10001 - ￥20000</div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="bt6">￥20000以上</div>
            </div>
            <div class="mb10">
                申请时间：
                <input type="text" name="start_time" class="layui-input" value="<?php echo input('start_time'); ?>"  style="width: 100px;"  autocomplete="off" id="test">
                <input type="button" class="btn btn-primary" id="select" value="搜索" />
                <a class="btn btn-danger" href="/borrower/customer">清空</a>
            </div>
        </div>
    </form>






    <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">


            <div class="box-header">
                <h3 class="box-title">客户管理</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <div style="position: relative">
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o" id="checkCustomer"></i></button>
                        <button class="pull-right">分配</button>
                        <select name="quick_distribute" class="pull-right">
                            <option>快速分配</option>
                            <option value="500">500条</option>
                            <option value="1000">1000条</option>
                            <option value="2000">2000条</option>
                            <option value="3000">3000条</option>
                        </select>
                        <a href="addCustomer" type="button" class="btn btn-default pull-right">
                            添加新客户
                        </a>
                    </div>
                    <tr>
                        <th></th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>联系电话</th>
                        <th>微信账号</th>
                        <th>贷款金额</th>
                        <th>芝麻信用分</th>
                        <th>申请时间</th>
                        <th>详细信息</th>
                    </tr>
                    </thead>
                    <tbody class="content" id="content">



                   </tbody>
                </table>
            </div>



            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>

<script src="../../static/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/static/layDate/laydate/laydate.js"></script>
<script src="/static/layer/layer.js"></script>
<script>
    $(".mb11").find('div').css('display','inline-block');
    $(".mb11").find('div').css('background-color','#ddd');
    $(".mb11").find("div").css('cursor','pointer');
    $(".mb11").find("div").click(function(){
        $(".mb11").find("div").css("background-color","#ddd");
        $(".selectMoney").removeClass("selectMoney");
        $(this).attr("class","selectMoney");
        $(this).css("background-color","#999");
    });

    $.ajax({
        type: "get",
        url: '/admin/getCustomerData',
        data: {},
        dataType: "json",
        success: function(result) {
            var str = '';
            if(result.code == '200'){
                for(var i=0 ; i < result.data.length ; i ++){
                    str = str + ' <tr> <td><input type="checkbox" name="checkNum" value=" '+result.data[i].customer_id+'" class="checkSingle"></td>\n' +
                        '                        <td>'+result.data[i].name+'</td>\n' +
                        '                        <td>'+result.data[i].age+'</td>\n' +
                        '                        <td>'+result.data[i].tel+'</td>\n' +
                        '                        <td>'+result.data[i].wx_number+'</td>\n' +
                        '                        <td>'+result.data[i].loan_amount+'</td>\n' +
                        '                        <td>'+result.data[i].credit+'</td>\n' +
                        '                        <td>'+result.data[i].add_time+'</td>\n' +
                        '                        <td><a href="/admin/customerDetail/'+result.data[i].customer_id+'" type="button" class="btn btn-default">\n' +
                        '                            查看\n' +
                        '                        </a>\n' +
                        '                        <a href="/admin/editCustomer/'+result.data[i].customer_id+'" type="button" class="btn btn-default">\n' +
                        '                                编辑\n' +
                        '                        </a>\n' +
                        '                        </td> </tr>';
                }
            }else{
                alert('系统错误');
            }
            $("#content").append(str);
        },
        error:function(){
            alert('系统错误');
        }
    });



    $("#select").click(function () {
        $("#content").empty();
        $.ajax({
            type: "get",
            url: '/admin/getCustomerData',
            data: {
                'selectMoney': $(".selectMoney").html(),
                'time': $("[name='time']").val()
            },
            dataType: "json",
            success: function(result) {
                var str = '';
                if(result.code == '200'){
                     for(var i=0 ; i < result.data.length ; i ++){
                         str = str + ' <tr> <td><input type="checkbox" name="checkNum" value=" '+result.data[i].customer_id+'" class="checkSingle"></td>\n' +
                             '                        <td>'+result.data[i].name+'</td>\n' +
                             '                        <td>'+result.data[i].age+'</td>\n' +
                             '                        <td>'+result.data[i].tel+'</td>\n' +
                             '                        <td>'+result.data[i].wx_number+'</td>\n' +
                             '                        <td>'+result.data[i].loan_amount+'</td>\n' +
                             '                        <td>'+result.data[i].credit+'</td>\n' +
                             '                        <td>'+result.data[i].add_time+'</td>\n' +
                             '                        <td><a href="/admin/customerDetail/'+result.data[i].customer_id+'" type="button" class="btn btn-default">\n' +
                             '                            查看\n' +
                             '                        </a>\n' +
                             '                        <a href="/admin/editCustomer/'+result.data[i].customer_id+'" type="button" class="btn btn-default">\n' +
                             '                                编辑\n' +
                             '                        </a>\n' +
                             '                        </td> </tr>';
                     }
                }else{
                    alert('系统错误');
                }
                $("#content").append(str);
            },
            error:function(){
                alert('系统错误');
            }
        });

    })

</script>
<script>

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

    $("#checkCustomer").on("click",function () {

        var obj=document.getElementsByName('checkNum');
        var s='';
        for(var i=0; i<obj.length; i++){
            if(obj[i].checked){
                s += obj[i].value;
                s += ',';
            }
        }

        //删除
        $.ajax({
            type: "post",
            url: '/admin/delete',
            data: {
                'type': 2,
                'checkNum': s
            },
            dataType: "json",
            success: function(data) {
                alert(data.msg);
                if(data.code == '204'){
                    window.location.reload();
                }
            },
            error:function(){
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
