<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:33:"../template/default/user/pwd.html";i:1567851758;s:66:"/www/wwwroot/epay.3ii.cn/template/default/common/admin_header.html";i:1568086704;s:66:"/www/wwwroot/epay.3ii.cn/template/default/common/admin_footer.html";i:1568085444;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?> - <?php echo get_sys('site_name'); ?></title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/static/admin/css/font.css">
	<link rel="stylesheet" href="/static/admin/css/xadmin.css">
	<link rel="stylesheet" href="/static/admin/css/public.css">
</head>
<body class="form-wrap" >

<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-header">用户信息
        </div>
        <div class="layui-card-body" style="padding: 15px;">
            <form class="layui-form" lay-filter="form-setting">
                <div class="layui-form-item">
                    <label class="layui-form-label">旧密码：</label>
                    <div class="layui-input-4">
                        <input type="password" name="password" lay-verify="required" autocomplete="off" class="layui-input" placeholder="请输入旧登陆密码">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">新密码：</label>
                    <div class="layui-input-4">
                        <input type="password" name="password1" lay-verify="pass" autocomplete="off" placeholder="请输入新登陆密码" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">确认密码：</label>
                    <div class="layui-input-4">
                        <input type="password" name="password2" lay-verify="pass" autocomplete="off" placeholder="请输入新的确认密码" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <div class="layui-footer" style="left: 0;">
                            <button type="button" class="layui-btn" lay-submit="" lay-filter="submit">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/static/lib/layui/css/layui.css">
<link rel="stylesheet" href="/static/lib/layui/css/layui.mobile.css">
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
<script type="text/javascript" src="/static/lib/layui/layui.js"></script>
<script>
    layui.use(['form', 'layer','element'], function () {
        var form = layui.form,layer = layui.layer,$ = layui.jquery;
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });
        //提交监听
        form.on('submit(submit)', function (data) {
            loading =layer.load(1, {shade: [0.1,'#fff']});
            $.post("", data.field, function (res) {
                layer.close(loading);
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        window.location.reload();
                    });
                } else {
                    layer.msg(res.msg, {time: 1800, icon: 2});
                }
            });
        });
    })
</script>

<style id="LAY_layadmin_theme">.layui-side-menu,.layadmin-pagetabs .layui-tab-title li:after,.layadmin-pagetabs .layui-tab-title li.layui-this:after,.layui-layer-admin .layui-layer-title,.layadmin-side-shrink .layui-side-menu .layui-nav>.layui-nav-item>.layui-nav-child{background-color:#20222A !important;}.layui-nav-tree .layui-this,.layui-nav-tree .layui-this>a,.layui-nav-tree .layui-nav-child dd.layui-this,.layui-nav-tree .layui-nav-child dd.layui-this a{background-color:#009688 !important;}.layui-layout-admin .layui-logo{background-color:#20222A !important;}</style>
</body>


</html>