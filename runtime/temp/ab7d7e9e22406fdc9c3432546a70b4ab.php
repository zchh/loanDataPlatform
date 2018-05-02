<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"F:\php_project\git_project\loanDataPlatform\public/../application/borrower\view\cuslogin\login.html";i:1524823244;}*/ ?>
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
        <a href=""><b>LOGO合作商</b>用户管理</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">平台用户</p>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="请填写用户名" id="real_name">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="请填写密码" id="password">
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
//    $(function () {
//        $('input').iCheck({
//            checkboxClass: 'icheckbox_square-blue',
//            radioClass: 'iradio_square-blue',
//            increaseArea: '20%' /* optional */
//        });
//    });
    $("#btn").on("click",function () {
        var remember1 = $("input:checkbox:checked").val();//是否要记住
        if(remember1 == 1){
            var remeber =1;
        }
        else {
            remeber =2;
        }
        var username = $("#real_name").val();
        if(username.trim() == ''){
            layer.msg("用户名不可为空",{icon:0});
            return false;
        }
        var password1 = $("#password").val();
        if(password1.trim() == ''){
            layer.msg("密码不可为空",{icon:0});
            return false;
        }
        $.post("<?php echo url('borrower/Cuslogin/index'); ?>",{'real_name':username,'password':password1,'is_remember':remeber},function (data) {
            if(data.status == 0){
                layer.msg(data.msg,{icon:0,time:1000},function () {
                    window.location.reload();
                });
                return false;
            }
            else {
                layer.msg(data.msg,{icon:1,time:1000},function () {
                    window.location.href = "<?php echo url('borrower/Customer/index'); ?>";
                });
                return true;
            }
        })
    })
</script>
</body>
</html>
