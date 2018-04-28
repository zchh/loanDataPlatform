<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"F:\php_project\git_project\loanDataPlatform\public/../application/admin\view\login.html";i:1524826200;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录页面</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/static/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/static/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>LOGO合作商平台</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">管理员</p>

        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="请填写用户名" id="username" name="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="请填写密码" id="password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" id="remember" value="1" checked> 记住我
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button  class="btn btn-primary btn-block btn-flat" id="btn">确认登录</button>
            </div>
            <!-- /.col -->
        </div>

        <!-- /.social-auth-links -->

        <a href="#">忘记密码</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/static/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/static/layer/layer.js"></script>
<!-- iCheck -->
<script src="/static/plugins/iCheck/icheck.min.js"></script>
<script>
    $("#btn").on("click",function () {

        //管理员登录
            $.ajax({
                type: "post",
                url: '/admin/login',
                data: {
                    'username':  $("[name='username']").val(),
                    'password':  $("[name='password']").val(),
                },
                dataType: "json",
                success: function(data) {
                    if(data.code == '200'){
                        alert(data.msg);
                        window.location.href= '/admin/user';
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