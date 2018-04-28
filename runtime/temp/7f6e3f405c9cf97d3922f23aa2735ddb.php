<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\www\business\loanDataPlatform\public/../application/borrower\view\customer\ceshi.html";i:1524826558;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图片上传</title>
    <link rel="stylesheet" type="text/css" href="/static/webuploader/webuploader.css">
    <script src="/static/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/static/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/static/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/static/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="/static/webuploader/webuploader.js"></script>
    <!--引入JS-->

</head>
<body>
<div>
    <div id="uploader-demo">
        <!--用来存放item-->
        <div id="fileList" class="uploader-list"></div>
        <div id="filePicker">选择图片</div>
    </div>
    <img id = 'img'>
</div>
<script type="text/javascript">
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
        console.log(response.url);
        //$( '#'+file.id ).addClass('');
        //response图片地址
        console.log(response.url);
        $("#img").attr("src",response.url);
        //$("#goods-logo").val(response.url);
        //console.debug($("#goods-logo").val());
    });
</script>
</body>
</html>