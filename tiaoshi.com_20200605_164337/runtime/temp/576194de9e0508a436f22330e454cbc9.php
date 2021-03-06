<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"/www/wwwroot/tiaoshi.com/application/dai/view/index/login.html";i:1588631418;}*/ ?>
<!DOCTYPE html>
<html lang="zh_ch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>登录</title>

    <link href="/static/dai/css/style.css" rel="stylesheet">
    <link href="/static/dai/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond./static/dai/js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/static/dai/js/html5shiv.js"></script>
    <script src="/static/dai/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">
    <form id="form" class="form-signin" action="/dai/index/login.html">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">CPS管理系统--代理登录</h1>
            <img src="/static/dai/images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="用户名" autofocus>
            <input type="password" name="password" class="form-control" placeholder="密码">
            <div style="margin-bottom:70px">
                <input type="text" class="form-control" placeholder="验证码" style="color:black;width:120px;float:left;margin:0px 0px;" name="code" id="code"/>
                <img src="/index.php/verify/index.html" onclick="javascript:this.src='/index.php/verify/index.html?tm='+Math.random();" style="float:right;cursor: pointer"/>
            </div>
            <button class="btn btn-lg btn-login btn-block" >
                <i class="fa fa-check"></i>
            </button>
            <span class="check-tips"></span>

        </div>
    </form>

</div>

<!-- Placed /static/dai/js at the end of the document so the pages load faster -->

<!-- Placed /static/dai/js at the end of the document so the pages load faster -->
<script src="/static/dai/js/jquery-1.10.2.min.js"></script>
<script src="/static/dai/js/bootstrap.min.js"></script>
<script src="/static/dai/js/modernizr.min.js"></script>
<script>
    $(function() {
        $("#form").submit(function(){
            var self = $(this);
            $.post(self.attr("index"), self.serialize(),success,"json");
            return false;

            function success(data){
                if(data.code == 200){
                    window.location.href = data.url;
                } else {
                    self.find(".check-tips").text(data.msg);
                }
            }
        });
    })
</script>
</body>
</html>
