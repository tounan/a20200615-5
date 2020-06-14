<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"template/RX03/new1685/user/findpass.html";i:1576939909;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta name="description" content="<?php echo $maccms['site_description']; ?>">
    <meta name="author" content="<?php echo $maccms['site_name']; ?>">
    <title>
      找回密码 - <?php echo $maccms['site_name']; ?>
    </title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="<?php echo $maccms['site_wapurl']; ?>html/style/images/favicon.png">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo $maccms['site_wapurl']; ?>html/style/css/osahan.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo $maccms['site_wapurl']; ?>html/style/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $maccms['site_wapurl']; ?>html/style/css/owl.theme.css">
	<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
	<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
	<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
	<style>.fr{float:right}@media (max-width: 768px){.login-main-wrapper{background: #fff;}.col-md-7.slide2{display: none!important;}.full-height{height: calc(100%);}} a.gohome{position:absolute;z-index:1;color:#fff;padding:7px 10px;border-radius:5px;margin:10px;border-color:transparent!important;background:#ff516b;background:-moz-linear-gradient(-45deg,#ff516b 0,#826cfd 100%);background:-webkit-linear-gradient(-45deg,#ff516b 0,#826cfd 100%);background:linear-gradient(135deg,#ff516b 0,#826cfd 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff516b',endColorstr='#826cfd',GradientType=1)}</style>
  </head>
  
  <body class="login-main-body">
    <section class="login-main-wrapper">
      <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
		  <a class="gohome" href="http://<?php echo $maccms['site_url']; ?>">首页</a>
          <div class="col-md-5 p-5 bg-white full-height">
            <div class="login-main-left">
              <div class="text-center mb-5 login-main-left-header pt-4">
                <img src="<?php echo $maccms['site_wapurl']; ?>html/style/images/favicon.png" class="img-fluid" alt="LOGO">
                <h5 class="mt-3 mb-3">
                  忘记密码
                </h5>
                <p>
                  预留问题找回密码
                </p>
              </div>
              <form method="post" id="fm" action="">
                <div class="form-group">
                  <label>
                    账号
                  </label>
                  <input type="text" id="user_name" name="user_name" class="form-control" placeholder="请输入您的登录账号" value="" autofocus required>
                </div>
				<div class="form-group">
                  <label>
                    找回问题
                  </label>
                  <input type="text" id="user_question" name="user_question" class="form-control" placeholder="请输入您密码找回问题" required>
                </div>
				<div class="form-group">
                  <label>
                    找回答案
                  </label>
                  <input type="text" id="user_answer" name="user_answer" class="form-control" placeholder="请输入您的密码找回答案" required>
                </div>
                <div class="form-group">
                  <label>
                    新的密码
                  </label>
                  <input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="请输入您的新密码" required>
                </div>
				<div class="form-group">
                  <label>
                    确认密码
                  </label>
                  <input type="password" id="user_pwd2" name="user_pwd2" class="form-control" placeholder="请输入您的确认密码" required>
                </div>
				<div class="form-group">
				  <label>
                    验证码
                  </label>
				  <input type="text" class="form-control" id="verify" name="verify" placeholder="请输入验证码">
				  <img class="fr" style="margin-top: -39px;" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" />
				</div>
                <div class="mt-4">
                  <div class="row">
                    <div class="col-12">
                      <input type="button" id="btn_submit" class="btn btn-outline-primary btn-block btn-lg" value="立即找回">
                    </div>
                  </div>
                </div>
              </form>
			  <div class="fr mt-2">
                  <a href="<?php echo url('user/findpass_msg'); ?>?ac=email">
                    邮箱找回
                  </a>
				  <a href="<?php echo url('user/findpass_msg'); ?>?ac=phone" style="margin-left: 5px;">
                    手机找回
                  </a>
			      <a href="<?php echo url('user/findpass'); ?>" style="margin-left: 5px;">
                    问题找回
                  </a>
              </div>
              <div class="text-center mt-5">
                <p class="light-gray">
                  想起密码了?
                  <a href="<?php echo url('user/login'); ?>">
                    直接登录
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-7 slide2">
            <div class="login-main-right bg-white p-5 mt-5 mb-5">
              <div class="owl-carousel owl-carousel-login">
                <div class="item">
                  <div class="carousel-login-card text-center">
                    <img src="<?php echo $maccms['site_wapurl']; ?>html/style/images/recharge_loading_bg.png" width="75%" class="img-fluid"
                    alt="LOGO">
                    <h5 class="mt-5 mb-3">
                      ​海量美女主播视频免费看
                    </h5>
                    <p class="mb-4">
                      魅力社拥有超过20000部美女主播视频
                      <br>
                      高速在线播放看个过瘾
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-login-card text-center">
                    <img src="<?php echo $maccms['site_wapurl']; ?>html/style/images/loading_empty.png" width="75%" class="img-fluid"
                    alt="LOGO">
                    <h5 class="mt-5 mb-3">
                      VIP专区视频更精彩
                    </h5>
                    <p class="mb-4">
                      VIP会员专区拥有更加优质精彩的内容,无需下载，超多美女视频一触即发
                      <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<script type="text/javascript">

	$(function(){
		$("body").bind('keyup',function(event) {
			if(event.keyCode==13){ $('#btnLogin').click(); }
		});
		$('#btn_submit').click(function() {
			if ($('#user_name').val()  == '') { alert('请输入用户！'); $("#user_name").focus(); return false; }
			if ($('#user_pwd').val()  == '') { alert('请输入密码！'); $("#user_pwd").focus(); return false; }
			if ($('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

			$.ajax({
				url: "<?php echo url('user/findpass'); ?>",
				type: "post",
				dataType: "json",
				data: $('#fm').serialize(),
				beforeSend: function () {
					$("#btn_submit").val("loading...");
				},
				success: function (r) {
					if(r.code==1){
						location.href="<?php echo url('user/index'); ?>";
					}
					else{
						alert(r.msg);
					}
				},
				complete: function () {
					$('#verify').click();
					$("#btn_submit").val("立即找回");
				}
			});

		});
	});

</script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/jquery.min.js">
    </script>
    <script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/bootstrap.bundle.min.js">
    </script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/jquery.easing.min.js">
    </script>
    <!-- Owl Carousel -->
    <script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/owl.carousel.js">
    </script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo $maccms['site_wapurl']; ?>html/style/js/custom.js">
    </script>
  </body>
</html>