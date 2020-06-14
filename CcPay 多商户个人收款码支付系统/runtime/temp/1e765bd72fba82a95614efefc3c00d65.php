<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"../template/default/user/setting.html";i:1568106288;s:66:"/www/wwwroot/epay.3ii.cn/template/default/common/admin_header.html";i:1568086704;s:66:"/www/wwwroot/epay.3ii.cn/template/default/common/admin_footer.html";i:1568085444;}*/ ?>
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
        <div class="layui-card-header">商户配置
</div>
<div class="layui-card-body" style="padding: 15px;">
    <form class="layui-form" lay-filter="form-setting">
        <div class="layui-form-item">
            <label class="layui-form-label">商户ID：</label>
            <div class="layui-input-inline">
                <input type="text" autocomplete="off" class="layui-input" value="<?php echo $user['mid']; ?>" disabled>
            </div>
            <div class="layui-form-mid layui-word-aux">商户等级：<?php echo get_level_name($user['level']); ?>，当前费率：<?php echo $user['mout']; ?>%</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商户密钥</label>
            <div class="layui-input-4">
                <input type="text" name="apikey" id="apikey" autocomplete="off" placeholder="请生成ApiKey" value="<?php echo $user['apikey']; ?>" class="layui-input" disabled>
            </div>
            <div class="layui-form-mid layui-word-aux" style="padding: 5px 5px!important;">
                <button type="button" class="layui-btn layui-btn-sm" id="copy" data-clipboard-action="copy" data-clipboard-text="<?php echo $user['apikey']; ?>">复制密钥</button>
                <button type="button" class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="" lay-filter="getkey">生成新密钥</button>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">订单有效期</label>
            <div class="layui-input-inline">
                <input type="text" name="close_time" lay-verify="required" autocomplete="off" placeholder="请输入订单超时时间" value="<?php echo $user['close_time']; ?>" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux">单位：分钟</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">区分方式</label>
            <div class="layui-input-4">
                <select name="payQf">
                    <option value="1" <?php if(($user['payQf'] == 1)): ?>selected<?php endif; ?>>金额递增</option>
                    <option value="2" <?php if(($user['payQf'] == 2)): ?>selected<?php endif; ?>>金额递减</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">同步回调</label>
            <div class="layui-input-block">
                <input type="text" name="returnUrl" lay-verify="required" placeholder="请输入支付成功后跳转网址" value="<?php echo $user['returnUrl']; ?>" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">异步回调</label>
            <div class="layui-input-block">
                <input type="text" name="notifyUrl" lay-verify="required" placeholder="请输入异步回调网址" value="<?php echo $user['notifyUrl']; ?>" autocomplete="off" class="layui-input">
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
<script src="/static/admin/js/clipboard.min.js"></script>
<script>
    layui.use(['form', 'layer','element'], function () {
        var form = layui.form,layer = layui.layer,$ = layui.jquery;
        //提交监听
        form.on('submit(getkey)', function (data) {
            loading =layer.load(1, {shade: [0.1,'#fff']});
            $.post("<?php echo url('getapi'); ?>",{id:1}, function (res) {
                layer.close(loading);
                if (res.code > 0) {
                    layer.msg(res.msg, {time: 1800, icon: 1}, function () {
                        $('#apikey').val(res.data);
                        $('#copy').attr('data-clipboard-text',res.data);
                    });
                } else {
                    layer.msg('网络错误！', {time: 1800, icon: 2});
                }
            });
        });
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
        var clipboard = new Clipboard('#copy');
        clipboard.on('success', function(e) {
            layer.msg("复制成功！", {time: 1000, icon: 1});
            console.log(e);
        });
        clipboard.on('error', function(e) {
            console.log(e);
        });
    })
</script>

<style id="LAY_layadmin_theme">.layui-side-menu,.layadmin-pagetabs .layui-tab-title li:after,.layadmin-pagetabs .layui-tab-title li.layui-this:after,.layui-layer-admin .layui-layer-title,.layadmin-side-shrink .layui-side-menu .layui-nav>.layui-nav-item>.layui-nav-child{background-color:#20222A !important;}.layui-nav-tree .layui-this,.layui-nav-tree .layui-this>a,.layui-nav-tree .layui-nav-child dd.layui-this,.layui-nav-tree .layui-nav-child dd.layui-this a{background-color:#009688 !important;}.layui-layout-admin .layui-logo{background-color:#20222A !important;}</style>
</body>


</html>